@extends('master')

@section('content')

<div class="home">
  
 
  <main data-barba="container" data-barba-namespace="home">
      <div class="left">
        <h1 class="home__title">let's find a home you'll love<h1>
          <form action="/search" class="d-flex">
            <input name="query" class="form-control me-2 search__box" type="search" placeholder="e.g. Florida, California" aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
          </form>
        </div>
  </main>

  </div> 
          
@include('inc.content')
@endsection
<style>

  .btn {
    background: black !important;
    color: #fff !important;
  }

  .btn:hover {
    color:gold !important;
  }   
    
</style>
