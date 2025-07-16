<?php include 'includes/header.php' ?>
<section class="room-banner">
  <img src="bootstrap/images/room-3.jpg" alt="">
  <h1>Chose Your Rooms</h1>
</section>

<section class="div-container fade-in-on-scroll">

  <p>Rooms & Suites</p>
  <h2>Our Exquisite Rooms & Suites Collection</h2>
  <div class="margin-top">
    <div class="room-card-horizontal">
      <div> <img src="./bootstrap/images/room-img.jpg" alt="Room" /></div>
      <div class="room-info">
        <h3>Deluxe Room</h3>
        <p class="price"><label for="">From</label> ₹ 4,000/Night</p>
        <div class="details">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our
          thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category
        </div>
        <div class="details mt-2">110 Sq | 3–5 Guests | Free Wi-Fi</div>
        <button>Learn More »</button>
      </div>
    </div>
    <div class="room-card-horizontal">
      <div> <img src="./bootstrap/images/room-img.jpg" alt="Room" /></div>
      <div class="room-info">
        <h3>Deluxe Room</h3>
        <p class="price"><label for="">From</label> ₹ 4,000/Night</p>
        <div class="details">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our
          thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category
        </div>
        <div class="details mt-2">110 Sq | 3–5 Guests | Free Wi-Fi</div>
        <button>Learn More »</button>
      </div>
    </div>
  </div>
</section>
<div class="img-banner fade-in-on-scroll">
  <img src="./bootstrap/images/banner-room.jpg" alt="">
  <div class="video-overlay">
    <h1>Secure Your Spot: Reserve Your Stay at Seapearl Hostel</h1>
    <div class="button-outdiv">
      <div class="button-group">
        <div class="form-container">
          <div class="form-select-wrapper">
            <label>Check in :</label>
            <input type="date">

          </div>

          <div class="form-select-wrapper">
            <label>Check out :</label>
            <input type="date">

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
    </div>

  </div>
</div>
<section class="div-container">
  <p>LUXURIOUS FACILITIES</p>
  <h2>Explore Our Exclusive Resort Facilities</h2>
  <div class="position-relative">
    <div class="fec-arrow-btn left" onclick="scrollFacilities(-1)"><i class="bi bi-arrow-left"></i></div>

    <div class="facility-slider" id="facilitySlider">
      <div class="facility-card">
        <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
        <div class="facility-content">
          <h3>Infinity Pool</h3>
          <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity
            of our infinity pool.</p>
          <button>Learn More »</button>
        </div>
      </div>

      <div class="facility-card">
        <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
        <div class="facility-content">
          <h3>Infinity Pool</h3>
          <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity
            of our infinity pool.</p>
          <button>Learn More »</button>
        </div>
      </div>

      <div class="facility-card">
        <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
        <div class="facility-content">
          <h3>Infinity Pool</h3>
          <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity
            of our infinity pool.</p>
          <button>Learn More »</button>
        </div>
      </div>

      <div class="facility-card">
        <img src="./bootstrap/images/pool-img.jpg" alt="Infinity Pool">
        <div class="facility-content">
          <h3>Infinity Pool</h3>
          <p>Our Infinity Pool Escape. Surrender to breathtaking views and pure relaxation as you soak in the serenity
            of our infinity pool.</p>
          <button>Learn More »</button>
        </div>
      </div>
    </div>
    <div class="fec-arrow-btn right" onclick="scrollFacilities(1)"><i class="bi bi-arrow-right"></i></div>
  </div>
</section>
<?php include 'includes/footer.php' ?>
