@extends('master')


@section('content')
    <div class=" custom-product">
        {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach ($products as $product)
                  <div class="carousel-item {{$product['id'] == 1 ?'active' : ''}}">
                    <a href="detail/{{$product['id']}}">
                      <img src="{{$product['gallery']}}"class=" slider-img" alt="House">
                      <div class="carousel-caption slider__text">
                          <h3>{{$product['name']}}</h3>
                          <p>{{$product['description']}}</p>
                      </div>
                    </a>
                  </div>
              @endforeach
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
            <h3>Listings</h3>
          </div>
          <div class="trending__wrapper container">
              @foreach ($products as $product)
              
              <div class="card" style="width: 18rem;">
                <a href="detail/{{$product['id']}}">
                  <img src="{{$product['gallery']}}"class="trending__image " alt="House">
                </a>

                <div class="card-body">
                  <h3>{{$product['name']}}</h3>
                  <p class="card-text">{{$product['description']}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              @endforeach
          </div>
    </div>
@endsection