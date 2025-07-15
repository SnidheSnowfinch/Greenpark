<?php include 'includes/header.php' ?>

  <div>
  <div class="slider">
    <!-- Slides -->
    <div class="slide active" style="background-image: url('./bootstrap/images/home-img.jpg');"></div>
    <div class="slide" style="background-image: url('./bootstrap/images/slide-img-2.jpg');"></div>
    <div class="slide" style="background-image: url('./bootstrap/images/slide-img-3.jpg');"></div>
    <div class="slide" style="background-image: url('./bootstrap/images/slide-img-4.avif');"></div>
    <div class="slide" style="background-image: url('./bootstrap/images/slide-img1.avif');"></div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Navbar -->
  

    <!-- Center Content -->
    <div class="home-banner-content">
      <h5>A COASTAL RETREAT FOR SERENITY AND INDULGENCE</h5>
      <h1>Welcome to Our Luxurious<br>Hotel & Resort</h1>
    </div>

    <!-- Bottom Button Group -->
  

    <!-- Arrows -->
    <div class="arrow left" onclick="prevSlide()"><i class="bi-arrow-left"></i></div>
    <div class="arrow right" onclick="nextSlide()"><i class="bi-arrow-right"></i></div>
  </div>
</div>
  <section class="gray ">
  <div class="button-group">
  <div class="form-container">
  <div class="form-select-wrapper">
    <label>Check in :</label>
    <select>
      <option>20-08-2024</option>
      <option>21-08-2024</option>

    </select>
  </div>

  <div class="form-select-wrapper">
    <label>Check out :</label>
    <select>
      <option>20-08-2024</option>
      <option>21-08-2024</option>

    </select>
  </div>

  <div class="form-select-wrapper">
    <label>Rooms :</label>
    <select>
      <option>01</option>
      <option>02</option>

    </select>
  </div>

  <div class="form-select-wrapper">
    <label>Adults :</label>
    <select>
      <option>01</option>
      <option>02</option>

    </select>
  </div>

  <div class="form-select-wrapper">
    <label>Children :</label>
    <select>
      <option>00</option>
      <option>01</option>

    </select>
  </div>

  <button class="check-btn">Check Availability</button>
</div>
    </div>
    
      <div class="div-width">
        <div>
      <p>WHY CHOOSE US</p>
      <h2>Tailored to your tastes, our collection features beachfront resorts, private getaways, and seamless transfers for an unparalleled experience</h2>
      <button class="learn-btn">Learn More »</button>
    </div></div></section>
    <section class="div-container position-relative fade-in-on-scroll">
      <p>Rooms & Suites</p>
        <h2>Our Exquisite Rooms & Suites Collection</h2>
        <div class="slider-wrapper">
  <button class="slider-btn left" onclick="scrollSlider(-1)">
    <i class="bi bi-chevron-left"></i>
  </button>

  <div class="room-slider-container" id="roomSlider">
    <div class="room-card">
      <img src="./bootstrap/images/room-img.jpg" alt="Room">
      <div class="room-info">
        <h3>Superior Room</h3>
        <div class="price-div"><div><p class="price"><label for="">From</label> ₹ 5,000/Night</p></div> <div class="arr-btn"><i class="bi bi-chevron-right"></i></div></div>
        <div class="details">130 Sq | 2–4 Guests | Free Wi-Fi</div>
      </div>
    </div>
    <div class="room-card">
      <img src="./bootstrap/images/room-img.jpg" alt="Room">
      <div class="room-info">
        <h3>Superior Room</h3>
        <div class="price-div"><div><p class="price"><label for="">From</label> ₹ 5,000/Night</p></div> <div class="arr-btn"><i class="bi bi-chevron-right"></i></div></div>
        <div class="details">130 Sq | 2–4 Guests | Free Wi-Fi</div>
      </div>
    </div>

    <div class="room-card">
      <img src="./bootstrap/images/room-img.jpg" alt="Room">
      <div class="room-info">
        <h3>Superior Room</h3>
        <div class="price-div"><div><p class="price"><label for="">From</label> ₹ 5,000/Night</p></div> <div class="arr-btn"><i class="bi bi-chevron-right"></i></div></div>
        <div class="details">130 Sq | 2–4 Guests | Free Wi-Fi</div>
      </div>
    </div>
    <div class="room-card">
      <img src="./bootstrap/images/room-img.jpg" alt="Room">
      <div class="room-info">
        <h3>Superior Room</h3>
        <div class="price-div"><div><p class="price"><label for="">From</label> ₹ 5,000/Night</p></div> <div class="arr-btn"><i class="bi bi-chevron-right"></i></div></div>
        <div class="details">130 Sq | 2–4 Guests | Free Wi-Fi</div>
      </div>
    </div>

    <!-- Add more cards if needed -->
  </div>

  <button class="slider-btn right" onclick="scrollSlider(1)">
    <i class="bi bi-chevron-right"></i>
  </button>
</div>
     
      </section>
      <div class="video-banner">
        <!-- Replace this src with your actual video -->
        <img src="./bootstrap/images/banner-home.jpg" alt="">
        <div class="video-overlay-new">
          <h1>GREENPARK</h1>
          <div class="play-button"></div>
        </div>
      </div>
      <section class="div-container fade-in-on-scroll">
        <p>LUXURIOUS FACILITIES</p>
        <h2>Explore Our Exclusive Resort Facilities</h2>
        <div class="position-relative">
        <div class="fec-arrow-btn left" onclick="scrollFacilities(-1)"><i class="bi bi-arrow-left"></i></div>
      
        <div class="facility-slider" id="facilitySlider">
          <div class="facility-card">
            <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="facility-card">
            <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="facility-card">
            <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="facility-card">
            <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
        </div>
        <div class="fec-arrow-btn right" onclick="scrollFacilities(1)"><i class="bi bi-arrow-right"></i></div>
        </div>
      </section>
      <section class="gray-section fade-in-on-scroll">
      <section class="div-container">

      <section class="amenities-section">
        <div class="amenities-left">
          <p>PREMIUM SERVICES</p>
          <h2>Our Amenities</h2>
          <div class="amenity-grid">
            <div class="amenity-item">
              <img src="./bootstrap/images/pool-icon.png" alt="Pool">
              Pool
            </div>
            <div class="amenity-item active">
              <img src="./bootstrap/images/resto-icon.png" alt="Restaurant">
              Restaurant
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/spa-icon.png" alt="Spa">
              Spa
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/wifi-icon.png" alt="Wi-Fi">
              Free Wi-Fi
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/gym-icon.png" alt="Gym">
              Gym
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/service-icon.png" alt="Room Service">
              Room Service
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/doctor.png" alt="Doctor">
              Doctor on call
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/safe-icon.png" alt="Locker">
              Safe Locker
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/meeting-icon.png" alt="Meeting">
              Meeting
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/plane-icon.png" alt="Travel">
              Travel Assistance
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/game-icon.png" alt="Games">
              Indoor Games
            </div>
            <div class="amenity-item">
              <img src="./bootstrap/images/water-icon.png" alt="Hot Water">
              24/7 Hot Water
            </div>
          </div>
        </div>
    
        <div class="amenities-right">
          <img src="bootstrap/images/amenities.jpg" alt="Amenities Image">
        </div>
      </section>
      </section>
      </section>
      <section class="div-container fade-in-on-scroll">
        <p>EXCITING GALLERY</p>
        <h2>Explore Unforgettable Experiences</h2>
      </section>

      <section>
        <img class="banner-img" src="bootstrap/images/banner-new.png" alt="">
      </section>
      <section class="gray-section">
  <section class="div-container position-relative fade-in-on-scroll">

      <div class="testimonial-card" id="testimonialCard">
  <img src="bootstrap/images/profile.png" class="profile-img" alt="User">
  <div class="name" id="name">Sujith Krishna</div>
  <div class="role" id="role">Hotel Guest</div>
  <div class="quote" id="quote">
    Exceptional resort! From the exquisite dining to the serene spa and the captivating infinity pool, every moment was pure bliss. Impeccable service and breathtaking views – a perfect escape!
  </div>
  <div class="stars">★★★★★</div>
  <div class="pagination" id="pagination">1/3</div>
</div>
</section>
</section>
<section class="div-container fade-in-on-scroll">
        <p>NEWS & MEDIA</p>
        <h2>Explore Our Latest Updates</h2>
        <div class="position-relative">
        <div class="fec-arrow-btn left" onclick="scrollExplore(-1)"><i class="bi bi-arrow-left"></i></div>
      
        <div class="facility-slider" id="ExploreSlider">
          <div class="Explore-card">
            <img src="./bootstrap/images/journey-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="Explore-card">
            <img src="./bootstrap/images/journey-img.jpg" alt="Infinity Pool">
            <div class="facility-content ">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="Explore-card">
            <img src="./bootstrap/images/journey-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
      
          <div class="Explore-card">
            <img src="./bootstrap/images/journey-img.jpg" alt="Infinity Pool">
            <div class="facility-content">
              <h3>Infinity Pool</h3>
              <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity of our infinity pool.</p>
              <button>Learn More »</button>
            </div>
          </div>
        </div>
        <div class="fec-arrow-btn right" onclick="scrollExplore(1)"><i class="bi bi-arrow-right"></i></div>
        </div>
      </section>

      <?php include 'includes/footer.php' ?>


 