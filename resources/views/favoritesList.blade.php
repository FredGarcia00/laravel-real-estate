@extends('master')

@section('content')
    <div class="custom-product">
        <div>
            <h3>Favorites</h3>
          </div>
      
            @foreach ($products as $product)
            <div class="row ">
                <div class="col-sm-4 mb-4">
                    <a href="detail/{{$product->id}}">
                        <img src="{{$product->gallery}}"class="trending__image " alt="House">
                      </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h3>{{$product->name}}</h3>
                            <h4>{{$product->description}}</h4>
                        </div>
                </div>
                <div class="col-sm-4">
                   <a href="/remove/{{$product->cart_id}}" class="btn btn-warning">Remove</a>
                </div>
            </div> 
            @endforeach
        
    </div>
@endsection

<style>
    .custom-product {
        position:relative;
        height: 100vh !important;
        margin-top: 130px !important;
        padding-left: 10px;
    }

    @media screen and (min-width:990px) {
        margin-top:100px;
    }
</style>