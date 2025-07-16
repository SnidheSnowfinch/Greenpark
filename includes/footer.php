<footer class="pt-5">

  <div class="container footer-cols">
    <div class="row gy-4">

      <div class="col-12 col-md-6 col-lg-3">
        <h6 class="footer-head">Contact Us</h6>
        <p class="mb-2">Call : <a href="tel:+911234567890">+91 1234567890</a></p>
        <p class="mb-2">Email : <a href="mailto:greenpark@gmail.com">greenpark@gmail.com</a></p>
        <p class="mb-3">We are open 24/7</p>

        <ul class="social-list">
          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="#"><i class="bi bi-envelope"></i></a></li>
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <h6 class="footer-head">Address</h6>
        <p>Greenpark, Beach Road,<br>2nd Street 47754,<br>INDIA</p>
      </div>

      <div class="col-12 col-md-6 col-lg-2">
        <h6 class="footer-head">Links</h6>
        <ul class="list-unstyled">
          <li class="mb-1"><a href="index.php">Home</a></li>
          <li class="mb-1"><a href="about-us.php">About Us</a></li>
          <li class="mb-1"><a href="#">Booking</a></li>
          <li class="mb-1"><a href="#">SPA & Wellness</a></li>
          <li class="mb-1"><a href="#">Restaurant</a></li>
          <li class="mb-1"><a href="#">News & Media</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <h6 class="footer-head">Map Location</h6>
        <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.009157033367!2d76.2673025!3d9.931232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d5123456789%3A0xabcdef1234567890!2sYour%20Company%20Name!5e0!3m2!1sen!2sin!4v1658123456789!5m2!1sen!2sin"
  width="100%"
  height="400"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade"
></iframe>      </div>

    </div> 
  </div>  

  <a href="#" class="back-to-top"><i class="bi bi-chevron-up"></i></a>

  <div class="footer-bottom py-3 mt-5">
    <div class="container d-flex justify-content-between align-items-center">
      <span>Greenpark Copyright © 2024  |  <a href="#">Snowfinch</a></span>
      <a href="#">Privacy & Cookie Policy</a>
    </div>
  </div>
</footer>
<script>
      const navbar = document.getElementById("mainNavbar");

const path = window.location.pathname;

const currentPage = path.split("/").pop();

if (currentPage === "" || currentPage === "index.php") {
  // Home page
  navbar.classList.add("navbar-home");
} else {
  navbar.classList.add("navbar-inner");
}


      function scrollFacilities(direction) {
    const slider = document.getElementById('facilitySlider');
    const scrollAmount = 320;
    slider.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        slide.style.left = '100%';
        if (i === index) {
          slide.classList.add('active');
          slide.style.left = '0';
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    // Auto slide
    setInterval(nextSlide, 5000);


    function scrollSlider(direction) {
    const slider = document.getElementById('roomSlider');
    const cardWidth = slider.querySelector('.room-card').offsetWidth + 20; 
    slider.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }
  function scrollFacilities(direction) {
    const slider = document.getElementById('facilitySlider');
    const cardWidth = slider.querySelector('.facility-card').offsetWidth + 20; 
    slider.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }
  function scrollExplore(direction) {
    const slider = document.getElementById('ExploreSlider');
    const cardWidth = slider.querySelector('.Explore-card').offsetWidth + 20; 
    slider.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }

  const testimonials = [
    {
      name: "Sujith Krishna",
      role: "Hotel Guest",
      img: "bootstrap/images/profile.png",
      quote: "Exceptional resort! From the exquisite dining to the serene spa and the captivating infinity pool, every moment was pure bliss. Impeccable service and breathtaking views – a perfect escape!"
    },
    {
      name: "Arjun Menon",
      role: "Couple Traveler",
      img: "bootstrap/images/profile.png",
      quote: "Absolutely romantic getaway! Candlelight dinners by the beach and spa treatments were amazing. Loved the warm hospitality and luxurious feel."
    },
    {
      name: "Meera Thomas",
      role: "Solo Explorer",
      img: "bootstrap/images/profile.png",
      quote: "Perfect place to unwind. The nature trails, yoga sessions, and infinity pool made my solo trip unforgettable. Will visit again soon!"
    }
  ];

  let index = 0;
  const quoteEl = document.getElementById("quote");
  const nameEl = document.getElementById("name");
  const roleEl = document.getElementById("role");
  const imgEl = document.querySelector(".profile-img");
  const paginationEl = document.getElementById("pagination");

  function updateTestimonial() {
    const t = testimonials[index];
    nameEl.textContent = t.name;
    roleEl.textContent = t.role;
    quoteEl.textContent = t.quote;
    imgEl.src = t.img;
    paginationEl.textContent = `${index + 1}/${testimonials.length}`;
    index = (index + 1) % testimonials.length;
  }

  setInterval(updateTestimonial, 5000); 


  function changeImage(el) {

    document.querySelectorAll('.thumb').forEach(img => img.classList.remove('active'));
    el.classList.add('active');
    const main = document.getElementById('mainImage');
    const fullSize = el.src.replace('w=300', 'w=1200'); 
    main.src = fullSize;
  }
  document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log("Observed:", entry.target);
      if (entry.isIntersecting) {
        console.log("Showing:", entry.target); 
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
    observer.observe(el);
  });
});
  </script>
</body>
</html>
