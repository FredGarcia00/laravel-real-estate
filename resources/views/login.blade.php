@extends('master')


@section('content')
    <div class="container custom-login">
        <div class="row justify-content-center">
          <div class="col-sm-4 ">
            <form action="">
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control mb-2">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
          
        </div>
    </div>
@endsection