<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navjeevan Junior College</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <main>
    <section class="hero">
      <div class="container hero-content">
        <h1>Welcome to Navjeevan Junior College</h1>
        <p>Building brighter futures through modern learning, caring faculty, and real-world skills.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="admissions.php">Apply Now</a>
          <a class="btn btn-secondary" href="courses.php">Explore Courses</a>
        </div>
      </div>
    </section>

    <section class="features container">
      <article>
        <h2>Expert Faculty</h2>
        <p>Learn from experienced educators who focus on personalized growth.</p>
      </article>
      <article>
        <h2>Modern Curriculum</h2>
        <p>Programs designed to prepare students for the future of work and life.</p>
      </article>
      <article>
        <h2>Student Support</h2>
        <p>Committed support services to help students stay motivated and succeed.</p>
      </article>
    </section>

    <section class="principal-message">
        <div class="container principal-container">
            <div class="principal-image">
                <img src="images/principal.jpg" alt="Principal">
            </div>
            <div class="principal-content">

                <h2>Principal's Message</h2>
                <p>
                    Welcome to Navjeevan Junior College.
                    Our institution is committed to providing
                    quality education while nurturing values,
                    discipline, and innovation among students.
                </p>
                <p>
                    Under the academic guidance of experienced
                    educators, we strive to create an environment
                    where students can achieve both academic and
                    personal excellence.
                </p>
                <h4>
                    Dr. Harishchandra Tripathi
                </h4>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <h2>Campus Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/gallery/campus-1.webp" alt="Campus Buildings">
                    <p>Campus View</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/campus-2.jpeg" alt="Campus Grounds">
                    <p>Campus Grounds</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/campus-3.jpg" alt="College Entrance">
                    <p>College Entrance</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/computer-lab-1.webp" alt="Computer Lab">
                    <p>Computer Lab</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/chemistry-lab.webp" alt="Chemistry Lab">
                    <p>Chemistry Lab</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/classPhoto.jpg" alt="Class Photo">
                    <p>Class Activity</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/annual-day-5.webp" alt="Annual Day Celebration">
                    <p>Annual Day Event</p>
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/annual-day-7.webp" alt="Student Awards Ceremony">
                    <p>Awards Ceremony</p>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter container">
      <div>
        <h2>Stay in Touch</h2>
        <p>Get updates on admissions, new courses, and events.</p>
      </div>
      <form id="newsletterForm">
        <input type="email" name="email" placeholder="Enter your email" required />
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="js/script.js"></script>
</body>
</html>
