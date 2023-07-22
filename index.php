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
    <?php include 'Components/Navbar.php';?>
    <!-- Image Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/IntroImage.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/Forest.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/Lake.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End of Carousel -->

    <!-- Gallery Highlight -->
    <section class="gallery text-light">
      <h1 class="text-center">Gallery</h1>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card -->
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="img/Lake.jpg" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="img/Lake.jpg" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="img/Forest.jpg" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </section>
    <!-- End of Gallery -->

    <!-- Photo Highlight -->
    <section class="pricelist text-center">
      <h1 class="text-center">Pricelist</h1>
    </section>
    <!-- End of Photo -->

    <!-- WhatsApp Floating Button -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <a href="https://wa.me/+6285600096221?text=Hi%2C%20Saya%20tertarik%20untuk%20berbisnis%20dengan%20anda." class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
