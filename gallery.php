<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agr Lensss</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <!--  -->

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <!--  -->

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!--  -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Agr Lensss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bio.php">Bio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--  -->

    <!-- Gallery -->
    <div class="galFoto text-center">
      <h1>Gallery</h1>
      <div class="category text-center">
        <button class="btn btn-default filter-button" data-filter="wedding">Prewed & Wedding</button>
        <button class="btn btn-default filter-button" data-filter="wisuda">Wisuda</button>
        <button class="btn btn-default filter-button" data-filter="gath">Gathering</button>
        <button class="btn btn-default filter-button" data-filter="busana">Busana Jawa</button>
      </div>
      <div class="foto" style="margin-top: 2rem">
        <div class="row">
          <div class="col cat">
            <h1 class="text-center filter wedding">Wedding</h1>
          </div>
          <div class="col-8">
            <img src="img/gl1.jpg" class="img-fluid hi-img wedding" alt="..." />
            <div class="row">
              <img src="img/Lake.jpg" class="img-fluid small-img filter wedding" alt="..." />
              <img src="img/Forest.jpg" class="img-fluid small-img filter wedding" alt="..." />
              <img src="img/IntroImage.jpg" class="img-fluid small-img filter wedding" alt="..." />
              <img src="img/Lake.jpg" class="img-fluid small-img filter wedding" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- Footer -->
    <?php include 'Components/Footer.php'?>
    <!--  -->

    <!-- WhatsApp Floating Button -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <a href="https://wa.me/+6285600096221?text=Hi%2C%20Saya%20tertarik%20untuk%20berbisnis%20dengan%20anda." class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
