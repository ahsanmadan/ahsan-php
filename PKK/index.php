<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <title>MudaMart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>
<style>
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
  @import url("https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@500&display=swap");
  @import url("https://fonts.googleapis.com/css2?family=Varela+Round&display=swap");

  .icon {
    list-style: none;
    margin-right: 18px;
    color: #f2f2f2;
  }

  .menu {
    color: #f2f2f2;
    font-weight: 600;
    text-decoration: none;
    font-size: 18px;
    font-family: "Montserrat Alternates", sans-serif;
    border-radius: 8px;
    padding: 8px;
  }

  .menu-2 {
    color: #f2f2f2;
    font-weight: 600;
    text-decoration: none;
    font-size: 18px;
    margin-right: 20px;
    margin-left: 20px;
    font-family: "Varela Round", sans-serif;

    border-radius: 8px;
    padding: 8px;
  }

  .shdow {
    box-shadow: 0px 8px 10px -6px lightgray;
  }

  .brand {
    font-family: "Lexend Giga", sans-serif;
    color: #f2f2f2;
    font-weight: 900;
    padding: 5px;
    font-size: 18px;
  }

  .background {
    background-color: #f2f2f2;
  }

  .mybg-nav {
    background-color: #28482E;
  }

  .swiper {
    width: 850px;
    height: 400px;
    box-sizing: border-box;
    border-radius: 8px;
    border: 2px solid gray;
  }

  .swiper-slide>img {
    width: 850px;
    height: 400px;
  }

  .swiper-button-prev::after,
  .swiper-button-next:after {
    font-size: 12px;
    color: white;
    font-weight: bold;
  }

  .swiper-pagination-bullet {
    background-color: white;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<div class="background">

  <body>
    <!-- navbar -->
    <nav class="mybg-nav nav navbar p-2">
      <div class="container-fluid d-flex flex-row">
        <span class="brand m-1"><i class="bi bi-cart me-2"></i>MudaMart</span>
        <div class="justify-content-end">
          <div class="d-flex flex-row">
            <a target="_blank" href="https://www.facebook.com/smkmuhammadiyah02pekanbaru">
              <li class="icon"><i class="bi bi-facebook"></i></li>
            </a>

            <a target="_blank" href="https://www.instagram.com/smkmuda_pekanbaru/">
              <li class="icon"><i class="bi bi-instagram"></i></li>
            </a>

            <a target="_blank" href="https://wa.me/6289621500376">
              <li class="icon"><i class="bi bi-whatsapp"></i></li>
            </a>

            <a target="_blank" href="https://www.youtube.com/c/mudatvpekanbaru">
              <li class="icon"><i class="bi bi-youtube"></i></li>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <ul class="mybg-nav shdow sticky-top nav justify-content-center p-2">
      <li class="nav-item">
        <a class="menu" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="menu-2" href="#">Market</a>
      </li>
      <li class="nav-item">
        <a class="menu" href="#">About</a>
      </li>
    </ul>
    <!-- akhir nav -->

    <!-- Slider main container -->
    <div class="swiper mt-3 container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img src="image/Slider/1.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="image/Slider/2.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="image/Slider/3.jpg" alt="">
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      <!-- akhir slider -->
    </div>


</div>

<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay:  3000,
    },
  });
</script>
</body>

</html>