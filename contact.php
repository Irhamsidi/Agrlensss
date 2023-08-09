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
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--  -->

    <!-- Contact -->
    <div class="contact text-center">
      <figure class="figure" style="max-width: 40rem">
        <img src="img/Lake.jpg" class="figure-img img-fluid" alt="..." />
      </figure>
      <div class="detail">
        <p style="font-size: 18px">iniemail@email.com</p>
        <p style="font-size: 17px">+62 85600096221</p>
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
