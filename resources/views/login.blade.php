@extends('master')


@section('content')
    <div class="container custom-login">
        <div class="row justify-content-center">
          <div class="col-sm-4 ">
            <form action="login" method="POST">
              <div class="form-group">
                @csrf
                <label for="">Email Address</label>
                <input type="text" name="email" class="form-control" value="spiderman@gmail.com">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control mb-2" value="123">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>

          </div>
          
        </div>
    </div>
@endsection