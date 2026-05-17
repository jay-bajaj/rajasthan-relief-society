<?php
$pageTitle =
"Contact - Bajaj Degree College";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
  <?php include 'includes/header.php'; ?>

  <main class="container page-content">
    <section class="page-header">
      <h1>Contact Us</h1>
      <p>Questions? Reach out and we'll be happy to help with admissions, courses, or general information.</p>
    </section>

    <section class="contact-grid">
      <article>
        <h2>Get in Touch</h2>
        <p>Email: navjeevanvidhalya@gmail.com</p>
        <p>Phone: +91 99872 92680</p>
        <p>Address: Rani Sati Marg, near RAJASTHAN BHAVAN, 
            behind Abt Apartment, Malad, Matanpur Nagar, Malad East, Mumbai, Maharashtra 400097
        </p>
      </article>
      <article>
        <form id="contactForm">
          <label>
            Name
            <input type="text" name="name" placeholder="Your name" required />
          </label>
          <label>
            Email
            <input type="email" name="email" placeholder="you@example.com" required />
          </label>
          <label>
            Message
            <textarea name="message" rows="5" placeholder="How can we help?" required></textarea>
          </label>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </article>
    </section>

    <!-- MAP -->

    <section class="map">

        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.2821017024175!2d72.84787510963139!3d19.182877148535987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6fd9c421847%3A0xfb8ecfabae6fb461!2sNavjivan%20Vidyalaya%20High%20School!5e0!3m2!1sen!2sin!4v1778766583941!5m2!1sen!2sin"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
        </iframe>

    </section>

  </main>


  <?php include 'includes/footer.php'; ?>

  <script src="js/script.js"></script>
</body>
</html>

