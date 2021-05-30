<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
    crossorigin="anonymous"></script>
    <title>Real Estate</title>
  </head>
  <body data-barba="wrapper">
    
<ul class="transition">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>

@include('inc.header')
<main data-barba="container" data-barba-namespace="home-animation">
    @yield('content') 
    @include('inc.footer')
<main>

<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>	
<script src="js/index.js"></script>
</body>
<style>

.home {
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url('img/homepage.jpg'); */
    background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(255, 217, 0, 0.1)),url('img/homepage2.jpg');
    background-size: cover;
    background-position:center;
    object-fit: contain;
    height: 100vh;
    width: 100%;
  }
  

  .custom-login {
    height:500px;
    padding-top:100px
  }

  img.slider-img {
    height: 400px !important;
    width: 1200px;
    object-fit: cover
  }

  .custom-product {
    justify-content: center;
  }

  .slider__text {
    background-color: rgba(29, 41, 29, 0.623);
    margin: auto;
    width: 50%;
    
  }
  .trending__wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    
  }

  .trending__image {
    height: 150px;
  }

  .detail__img {
    height: 300px;
  }

</style>

</html>