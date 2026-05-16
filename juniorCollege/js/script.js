const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');

if (menuToggle && mainNav) {
  menuToggle.addEventListener('click', () => {
    mainNav.classList.toggle('active');
  });
}

const newsletterForm = document.getElementById('newsletterForm');
const admissionsForm = document.getElementById('admissionsForm');
const contactForm = document.getElementById('contactForm');

function handleFormSubmit(event) {
  event.preventDefault();
  const form = event.target;
  alert('Thank you! Your submission has been received.');
  form.reset();
}

if (newsletterForm) newsletterForm.addEventListener('submit', handleFormSubmit);
if (admissionsForm) admissionsForm.addEventListener('submit', handleFormSubmit);
if (contactForm) contactForm.addEventListener('submit', handleFormSubmit);
