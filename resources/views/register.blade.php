@extends('master')


@section('content')
    <div class="container custom-login">
        <div class="row justify-content-center">
          <div class="col-sm-4 ">
            <form action="register" method="POST">
                @csrf
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="name" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="text" name="email" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control mb-2">
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </form>

          </div>
          
        </div>
    </div>
@endsection