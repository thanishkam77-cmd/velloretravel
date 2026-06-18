// Main Javascript for Responsive Interactions
document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initSlideshow();
  initTestimonials();
  initQuickEnquiryValidation();
});

// Mobile Navigation Toggle
function initMobileMenu() {
  const menuToggle = document.getElementById('menuToggle');
  const mainNavigation = document.getElementById('mainNavigation');

  if (menuToggle && mainNavigation) {
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      mainNavigation.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!menuToggle.contains(e.target) && !mainNavigation.contains(e.target)) {
        menuToggle.classList.remove('active');
        mainNavigation.classList.remove('active');
      }
    });
  }
}

// Banner Slideshow Controller
let slideIndex = 0;
let slideTimer = null;

function initSlideshow() {
  const slides = document.getElementsByClassName('my-slide');
  if (slides.length === 0) return;

  showSlides();

  // Auto advance every 5 seconds
  slideTimer = setInterval(() => {
    changeSlide(1);
  }, 5000);
}

function showSlides() {
  const slides = document.getElementsByClassName('my-slide');
  if (slides.length === 0) return;

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
    slides[i].classList.remove('active');
  }

  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }

  slides[slideIndex].style.display = 'block';
  setTimeout(() => {
    slides[slideIndex].classList.add('active');
  }, 20); // Short delay for CSS transition
}

function changeSlide(n) {
  // Reset timer
  clearInterval(slideTimer);
  slideIndex += n;
  showSlides();
  slideTimer = setInterval(() => {
    changeSlide(1);
  }, 5000);
}

// Testimonials Rotator
function initTestimonials() {
  const testimonialSlides = document.getElementsByClassName('testimonial-slide');
  if (testimonialSlides.length === 0) return;

  let testimonialIndex = 0;
  
  setInterval(() => {
    testimonialSlides[testimonialIndex].classList.remove('active');
    testimonialIndex++;
    if (testimonialIndex >= testimonialSlides.length) {
      testimonialIndex = 0;
    }
    testimonialSlides[testimonialIndex].classList.add('active');
  }, 4000);
}

// Basic form validation for Quick Enquiry
function initQuickEnquiryValidation() {
  const form = document.getElementById('quickEnquiryForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    const mobileInput = document.getElementById('enquiryMobile');
    const mobileVal = mobileInput.value.trim();

    // Verify digits
    const isDigits = /^\d+$/.test(mobileVal);
    if (!isDigits) {
      e.preventDefault();
      alert('Please enter digits only for the Mobile Number.');
      mobileInput.focus();
    }
  });
}
