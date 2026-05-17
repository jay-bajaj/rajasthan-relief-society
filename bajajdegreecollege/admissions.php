<?php
session_start();

$pageTitle = "Admissions - Bajaj Degree College";

$feedback = $_SESSION['admission_feedback'] ?? [];
$formValues = $feedback['values'] ?? [];
$errors = $feedback['errors'] ?? [];
$status = $feedback['status'] ?? '';
$message = $feedback['message'] ?? '';

unset($_SESSION['admission_feedback']);

function oldValue($field, $values) {
  return htmlspecialchars($values[$field] ?? '', ENT_QUOTES, 'UTF-8');
}

function fieldError($field, $errors) {
  return $errors[$field] ?? '';
}

function alertClass($status) {
  if ($status === 'success') {
    return 'form-alert-success';
  }

  if ($status === 'warning') {
    return 'form-alert-warning';
  }

  return 'form-alert-error';
}

$courseOptions = [
  'B.Com',
  'B.A Psychology',
  'B.Sc IT',
  'B.Sc Data Science',
];
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
  <?php include 'includes/header.php'; ?>

  <main class="container page-content">
    <section class="page-header">
      <h1>Admissions</h1>
      <p>Start your degree journey with Bajaj Degree College. Share your details and our admissions team will contact you.</p>
    </section>

    <section class="admission-form-section">
      <div class="admission-form-panel">
        <div>
          <h2>Admission Inquiry Form</h2>
          <p>Fields marked with an asterisk are required.</p>
        </div>

        <?php if ($status && $message): ?>
          <div class="form-alert <?php echo alertClass($status); ?>">
            <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        <?php endif; ?>

        <form class="admission-form" action="process-admission.php" method="POST" novalidate>
          <div class="form-grid">
            <label>
              <span>Full Name *</span>
              <input
                type="text"
                name="full_name"
                value="<?php echo oldValue('full_name', $formValues); ?>"
                required
              />
              <?php if (fieldError('full_name', $errors)): ?>
                <small class="field-error"><?php echo htmlspecialchars(fieldError('full_name', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
              <?php endif; ?>
            </label>

            <label>
              <span>Phone Number *</span>
              <input
                type="tel"
                name="phone"
                value="<?php echo oldValue('phone', $formValues); ?>"
                required
              />
              <?php if (fieldError('phone', $errors)): ?>
                <small class="field-error"><?php echo htmlspecialchars(fieldError('phone', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
              <?php endif; ?>
            </label>

            <label>
              <span>Email Address *</span>
              <input
                type="email"
                name="email"
                value="<?php echo oldValue('email', $formValues); ?>"
                required
              />
              <?php if (fieldError('email', $errors)): ?>
                <small class="field-error"><?php echo htmlspecialchars(fieldError('email', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
              <?php endif; ?>
            </label>

            <label>
              <span>Course Interested In *</span>
              <select name="course" required>
                <option value="">Select a course</option>
                <?php foreach ($courseOptions as $course): ?>
                  <option value="<?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?>" <?php echo ($formValues['course'] ?? '') === $course ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <?php if (fieldError('course', $errors)): ?>
                <small class="field-error"><?php echo htmlspecialchars(fieldError('course', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
              <?php endif; ?>
            </label>

            <label>
              <span>12th Percentage *</span>
              <input
                type="text"
                name="percentage"
                value="<?php echo oldValue('percentage', $formValues); ?>"
                required
              />
              <?php if (fieldError('percentage', $errors)): ?>
                <small class="field-error"><?php echo htmlspecialchars(fieldError('percentage', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
              <?php endif; ?>
            </label>
          </div>

          <label>
            <span>Message *</span>
            <textarea name="message" rows="5" required><?php echo oldValue('message', $formValues); ?></textarea>
            <?php if (fieldError('message', $errors)): ?>
              <small class="field-error"><?php echo htmlspecialchars(fieldError('message', $errors), ENT_QUOTES, 'UTF-8'); ?></small>
            <?php endif; ?>
          </label>

          <button type="submit" class="btn btn-primary">Submit Inquiry</button>
        </form>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="js/script.js"></script>
</body>
</html>
