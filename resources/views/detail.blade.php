@extends('master')


@section('content')

 <div class="container" style="margin-top:150px;height:100vh; background:grey;">
     <div class="row display-flex">
         <div class="col-sm-6">
             <img src="/{{$product['gallery']}}" class="detail__img" alt="" style="margin-bottom: 5px;">
             <img src="../img/in.jpg"  alt="house pic" height="150" width="300px">
         </div>
         <div class="col-sm-6">
            <a class="btn btn-secondary" href="/">Go Back</a>
            <div class="card" style="width: 25rem;height:20rem;">
                <div class="card-body text-center">
                  <h1 class="card-title">{{$product['name']}}</h1>
                  <h2 class="card-title">price: ${{$product['price']}}</h2>
                  <h6 class="card-subtitle mb-2 text-muted">category: {{$product['category']}}</h6>
                  <p class="card-text">Details: {{$product['description']}}</p>
                  <div style="display: flex;justify-content:center;">
                    <form action="/add_to_favorites" method="POST">
                        @csrf
                        <input type="hidden" name="product__id" value={{$product['id']}} >
                      <button class="btn btn-primary" style="margin-right: 5px;">Add To Favorites</button>
                    </form>
                    <form action="">
                        <input type="hidden">
                        <button class="btn btn-primary">Contact Agent</button>
                    </form>

                  </div>
                </div>
              </div>
           

         </div>
     </div>
 </div>
@endsection
