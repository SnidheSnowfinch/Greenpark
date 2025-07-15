<?php include 'includes/header.php' ?>
<section class="room-banner">
<img src="bootstrap/images/room-home.jpg" alt="">

    <h1>Deluxe Rooms</h1>
  </section>

  <section class="div-container fade-in-on-scroll">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img class="abt-img" src="bootstrap/images/about.jpg" alt="Room" />
    </div>
    <div  class="col-lg-6 col-md-6 col-sm-12">
      <h3 class="about-h3">About Accommodation</h3>
      <p class="text-left">
        Relax in our cozy, compact room featuring a 140cm bed, satellite TV, coffee and tea set, minibar, desk, air conditioning, and complimentary Wi-Fi. Unwind in the bathroom with a shower, and find bathrobe and slippers for added comfort. Our non-smoking rooms also include SeaPearl's inclusive service, ensuring a delightful stay.
        Your accommodation price covers breakfast and unrestricted entry to our thermal pools and Wellness & Spa.
      </p>
      <h3 class="about-h4">Facilities</h3>

      <div class="facilities">
        
        <div><img src="bootstrap/images/bed.png" alt="">King size bed</div>
        <div><img src="bootstrap/images/locker.png" alt="">Locker</div>
        <div><img src="bootstrap/images/air.png" alt="">Air Condition</div>
        <div><img src="bootstrap/images/bathtub.png" alt="">Bathtub</div>
        <div><img src="bootstrap/images/wifi.png" alt="">Wi-Fi</div>
        <div><img src="bootstrap/images/minibar.png" alt="">Minibar</div>
        <div><img src="bootstrap/images/desk.png" alt="">Desk</div>
        <div><img src="bootstrap/images/television.png" alt="">Television</div>
        <div><img src="bootstrap/images/tea.png" alt="">Tea Maker</div>
        <div><img src="bootstrap/images/service.png" alt="">24/4 Room Service</div>
      </div>
    </div>
    </div>
  </section>
  <section class="div-container fade-in-on-scroll">
  <div class="row">
  <div  class="col-lg-6 col-md-6 col-sm-12">

    <div class="booking-image">
      <img src="bootstrap/images/stay.png" alt="Bath" />
      <h2>Book Your<br>Perfect Stay</h2>
    </div>
    </div>

    <div  class="col-lg-6 col-md-6 col-sm-12">

    <div class="booking-form"><div class="d-align">
    <h3>Reservation</h3>
    <h3>₹ 4,000 <span style="font-weight: normal;font-size:25px;">/Night</span></h3>

    </div>

    <div class="booking-field">
    <label>Check in :</label>
    <input type="date" class="booking-input" value="2025-08-21" />
  </div>

  <div class="booking-field">
    <label>Check out :</label>
    <input type="date" class="booking-input" value="2025-08-22" />
  </div>

  <div class="booking-field">
    <label>Rooms :</label>
    <select class="booking-input">
      <option>01</option>
      <option>02</option>
      <option>03</option>
    </select>
  </div>

  <div class="booking-row">
    <div class="booking-field">
      <label>Adults :</label>
      <select class="booking-input">
        <option>01</option>
        <option>02</option>
        <option>03</option>
      </select>
    </div>

    <div class="booking-field">
      <label>Children :</label>
      <select class="booking-input">
        <option>00</option>
        <option>01</option>
        <option>02</option>
      </select>
    </div>
  </div>
  <div class="extra-services">
    <h6>Extra Services</h6>

    <div class="service-item">
      <div class="service-left">
        <input type="checkbox" id="gym" />
        <label for="gym">Gym & fitness</label>
      </div>
      <div class="service-right">
        <span>₹ 800/Night</span>
      </div>
    </div>

    <div class="service-item">
      <div class="service-left">
        <input type="checkbox" id="spa" />
        <label for="spa">Spa & Massage</label>
      </div>
      <div class="service-right">
        <span>₹ 1200/Night</span>
        <select>
          <option>01</option>
          <option>02</option>
          <option>03</option>
        </select>
      </div>
    </div>
    </div>
    
  <!-- Book Button -->
  <button class="book-button">Book Room Now</button>
    </div></div>
    </div>

  </section>
  <section class="div-container fade-in-on-scroll">

  <div class="gallery-container">
  <div class="thumbnails">
    <img src="bootstrap/images/room1.jpg" alt="Thumb 1" class="thumb active" onclick="changeImage(this)">
    <img src="bootstrap/images/room-2.jpg" alt="Thumb 2" class="thumb" onclick="changeImage(this)">
    <img src="bootstrap/images/room-3.jpg" alt="Thumb 3" class="thumb" onclick="changeImage(this)">
  </div>
  <div class="main-preview">
    <img id="mainImage" src="bootstrap/images/room-4.jpg" alt="Main" />
  </div>
</div>
</section>

</section>
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
<?php include 'includes/footer.php' ?>


