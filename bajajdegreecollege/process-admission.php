<?php
session_start();

// Configure this address for the college admissions inbox before deployment.
$admissionsEmail = 'admission@bajajdegreecollege.navjeevanvidhalya.in';
$fromEmail = 'no-reply@bajajdegreecollege.navjeevanvidhalya.in';

$allowedCourses = [
  'B.Com',
  'B.A Psychology',
  'B.Sc IT',
  'B.Sc Data Science',
];

function redirectToForm() {
  header('Location: admissions.php');
  exit;
}

function cleanInput($value) {
  return trim(strip_tags(str_replace("\0", '', (string) $value)));
}

function hasHeaderInjection($value) {
  return preg_match('/[\r\n]/', $value) === 1;
}

function storeFeedback($status, $message, $values = [], $errors = []) {
  $_SESSION['admission_feedback'] = [
    'status' => $status,
    'message' => $message,
    'values' => $values,
    'errors' => $errors,
  ];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  storeFeedback('error', 'Invalid request. Please submit the admission form.');
  redirectToForm();
}

$values = [
  'full_name' => cleanInput($_POST['full_name'] ?? ''),
  'phone' => cleanInput($_POST['phone'] ?? ''),
  'email' => cleanInput($_POST['email'] ?? ''),
  'course' => cleanInput($_POST['course'] ?? ''),
  'percentage' => cleanInput($_POST['percentage'] ?? ''),
  'message' => cleanInput($_POST['message'] ?? ''),
];

$errors = [];

foreach (['full_name', 'phone', 'email', 'course', 'percentage', 'message'] as $field) {
  if ($values[$field] === '') {
    $errors[$field] = 'This field is required.';
  }
}

foreach (['full_name', 'phone', 'email', 'course', 'percentage'] as $field) {
  if ($values[$field] !== '' && hasHeaderInjection($values[$field])) {
    $errors[$field] = 'Invalid characters detected.';
  }
}

if ($values['email'] !== '' && !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = 'Please enter a valid email address.';
}

if ($values['phone'] !== '' && !preg_match('/^[0-9+\-\s()]{7,20}$/', $values['phone'])) {
  $errors['phone'] = 'Please enter a valid phone number.';
}

if ($values['course'] !== '' && !in_array($values['course'], $allowedCourses, true)) {
  $errors['course'] = 'Please select a valid course.';
}

if ($values['percentage'] !== '' && !preg_match('/^(100(\.0{1,2})?|[0-9]{1,2}(\.[0-9]{1,2})?)$/', $values['percentage'])) {
  $errors['percentage'] = 'Please enter a valid percentage between 0 and 100.';
}

if ($errors) {
  storeFeedback('error', 'Please correct the highlighted fields and submit the form again.', $values, $errors);
  redirectToForm();
}

$safeValues = $values;

$subject = 'New Admission Inquiry - Bajaj Degree College';

$emailBody = "New Admission Inquiry - Bajaj Degree College\n\n";
$emailBody .= "Full Name: {$safeValues['full_name']}\n";
$emailBody .= "Phone Number: {$safeValues['phone']}\n";
$emailBody .= "Email Address: {$safeValues['email']}\n";
$emailBody .= "Course Interested In: {$safeValues['course']}\n";
$emailBody .= "12th Percentage: {$safeValues['percentage']}\n\n";
$emailBody .= "Message:\n{$safeValues['message']}\n";

$headers = [
  'From: Bajaj Degree College <' . $fromEmail . '>',
  'Reply-To: ' . $safeValues['email'],
  'Content-Type: text/plain; charset=UTF-8',
  'X-Mailer: PHP/' . phpversion(),
];

$sent = mail($admissionsEmail, $subject, $emailBody, implode("\r\n", $headers));

if (!$sent) {
  storeFeedback('error', 'We could not send your inquiry right now. Please try again later.', $values);
  redirectToForm();
}

storeFeedback('success', 'Thank you. Your admission inquiry has been submitted successfully.');
redirectToForm();
