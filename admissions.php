<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admissions | Navjeevan Junior College</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <main class="container page-content">
    <section class="page-header">
      <h1>Admissions</h1>
      <p>Start your learning journey with Navjeevan Junior College. Submit your details and we will contact you.</p>
    </section>

    <section class="admissions-form">
      <form id="admissionsForm">
        <label>
          Full Name
          <input type="text" name="name" placeholder="Your name" required />
        </label>
        <label>
          Email Address
          <input type="email" name="email" placeholder="you@example.com" required />
        </label>
        <label>
          Course Interest
          <select name="course" required>
            <option value="">Select a program</option>
            <option value="web">Web Development</option>
            <option value="data">Data Science</option>
            <option value="design">Creative Design</option>
            <option value="career">Career Coaching</option>
          </select>
        </label>
        <label>
          Message
          <textarea name="message" rows="4" placeholder="Tell us more" />
        </label>
        <button type="submit" class="btn btn-primary">Submit Application</button>
      </form>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="js/script.js"></script>
</body>
</html>
