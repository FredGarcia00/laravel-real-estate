<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
    <title>Ecommerce</title>
</head>
<body class="container">
  {{View::make('header')}}
  @yield('content')
  {{View::make('footer')}}
</body>
<style>
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

  .search__box {
    width: 500px;
  }
</style>

</html>