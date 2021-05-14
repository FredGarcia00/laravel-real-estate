@extends('master')


@section('content')
    <div class=" custom-product">
       
            <h4>Search results</h4>
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending__wrapper">
                @foreach ($products as $product)
                <div class="searched__item">
                  <a href="detail/{{$product['id']}}">
                    <img src="{{$product['gallery']}}"class="trending__image " alt="House">
                    <div class="">
                        <h2>{{$product['name']}}</h2>
                        <h5>{{$product['description']}}</h5>
                    </div>
                  </a>
                </div> 
                @endforeach
              </div>
        </div>
    </div>
@endsection