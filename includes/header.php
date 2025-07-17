<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GreenPark Resort</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="bootstrap/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script  src="bootstrap/js/bootstrap.bundle.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg" id="mainNavbar">
  

    <a class="logo" href="index.php">GreenPark</a>

    <button class="navbar-toggler d-lg-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="mainNav">
      <ul class="navbar-nav  nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="roomsMenu" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">Rooms ▾</a>
          <ul class="dropdown-menu" aria-labelledby="roomsMenu">
            <li><a class="dropdown-item" href="room-collection.php">Deluxe Room</a></li>
            <li><a class="dropdown-item" href="#">Executive Suite</a></li>
            <li><a class="dropdown-item" href="#">Family Villa</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="servicesMenu" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">Services ▾</a>
          <ul class="dropdown-menu" aria-labelledby="servicesMenu">
            <li><a class="dropdown-item" href="#">Spa & Wellness</a></li>
            <li><a class="dropdown-item" href="#">Airport Pickup</a></li>
            <li><a class="dropdown-item" href="#">Laundry</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">Restaurant</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
      </ul>
      <button class="res-btn">Reservation</botton>

    </div>
</nav>
