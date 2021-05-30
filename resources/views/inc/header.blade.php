<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')) 
{
  $total = ProductController::favItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img class="nav__logo" src="img/lb.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-nav-scroll me-auto mb-2 mb-lg-0" style="--bs-scroll-height: 20vh;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Sell</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Agent Finder</a>
          </li>
          {{-- <form action="/search" class="d-flex">
            <input name="query" class="form-control me-2 search__box" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
        </ul>
        
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class=" nav-link active" href="{{Session::has('user') ? '/favoritesList' : '/login'}}">
                  Favorites({{$total}})
                </a></li>
          </ul>
        
        @if(Session::has('user'))
        <div class="dropdown">
          <div class=" dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </div>
        @else 
        <div><a class="nav-link nav__link nav__login"href="/login">Login</a></div>
        <div><a class="nav-link nav__link nav__login"href="/register">Register</a></div>
        @endif
      </div>
    </div>
  </nav>

  <style>

ul.transition {
    display: flex;
    position: absolute;
    z-index: 10;
    height: 100vh;
    width: 100%;
    top:0;
    left: 0;
    right: 0;
    padding: 0;
    margin: 0;
    pointer-events: none;
}

ul.transition li {
    transform: scaleY(0);
    background: rgb(233, 207, 64);
    width: 20%;
}

.nav__logo {
  height: 100px;
}
  .nav-link{
    font-family: 'Open Sans', sans-serif !important;
    text-decoration: none;
    color:#fff !important;
    cursor: pointer;
    }

     .nav-link:hover {
      color:gold !important;
    }

    .dropdown-toggle{
      color:gold;
      cursor: pointer;
    }

  </style>