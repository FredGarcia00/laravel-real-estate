@extends('master')

@section('content')


  <div class="custom-product">
    {{-- Below is left side search settings --}}
    <div class="search__sidebar">
      <h3>Location</h3>
      <form action="/search">
        <input name="query" type="text"> 
        <button class="btn btn-primary" type="submit">Search</button>
      </form>

      <div class="form-check">
        <input class="form-check-input" name="f-sale" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" >
        <label class="form-check-label" for="flexRadioDefault1">
          For sale
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          For rent
        </label>
      </div>
      <div>
        <h3>Price range</h3>
        <div class="form-check">
          <input name="price" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            $0 - $399k
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">
           $400k - $500k
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">
           $600k - $1,000,000 + 
          </label>
        </div>

      </div>
    </div>
    
    {{-- End of search settings --}}
    {{-- Below is the right side of page --}}
    <div class="search__product">

          <div class="trending__wrapper">
              @foreach ($products as $product)
                  <div class="searched__item">
                    <div class="card" style="width: 15rem;">
                     <a href="detail/{{$product['id']}}">
                     <img style="height:150px;"src="{{$product['gallery']}}" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h4>${{$product['price']}}</h4>
                       <h5 class="card-title">{{$product['name']}}</h5>
                       <p class="card-text">{{$product['description']}}</p>
                     </div>
                       </a>
                   </div>
                     
                  </div> 
               @endforeach

                  </div>
              </div>
                
            </div>
          @endsection
            <style>

  a {
    text-decoration: none !important;
    color: #fff !important;
    }

    .search__sidebar {
      margin-left: 10px;
    }

  .custom-product{
    height: 100vh;
    display: grid;
    grid-template-columns: 1fr 2fr;
    justify-items: center;
    margin-top: 130px;
    background: lightgrey;
    border-top: 1px solid gold;
  }

  .card {
    margin:10px 5px 5px 5px;
  }

  .card-body{
    color:#000;
  }
</style>