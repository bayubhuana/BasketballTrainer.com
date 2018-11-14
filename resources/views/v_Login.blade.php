@extends('templates')

@section ('title')
Basketball Trainer
@endsection


@section ('body')
  <style type="text/css">
  p { color:#ed3237; }
  h3{ color:#ed3237;
    font-family: Century Gothic; }
  </style>
<div class="panel panel-warning">
  <div class="panel-heading">
      <h3 class="panel-title">Basketball Trainer</h3>
    </div>
</div>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
    <div class="clearfix visible-xs-block"></div>
  <div class="col-sm-4">
  </div>


</div><div class="row">
  <div class="col-md-6">
    <br></br>
    <div class="row">
      <div class="col-xs-8 col-sm-6">
      </div>
        <div class="col-xs-4 col-sm-6">
            <img src="assets/bbt logo.png" class="img-responsive" alt="Responsive image" width="337" height="337">
        </div>
    </div>
</div>

  <div class="clearfix visible-xs-block"></div>
  <div class="col-md-6">
    <br></br>
    <div class="row">
      <div class="col-xs-8 col-sm-6">
      <div class="form-group">
        <form action="{{route('prosesLogin')}}" method="post">
        <label for="username" style="font-family : Century Gothic">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" style="font-family : Century Gothic">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        <Input type="hidden" name="_token" value="{{csrf_token()}}">
      </div>
      <p class="text-center"><button type="submit" class="form-control">Sign In</button>
      </p>
    </form>
    <form action="{{route('cobakeregister')}}" method="get">
      <p class="text-center" style="font-family : Century Gothic"> Not have Account</p>
      <p class="text-center">
        <button type="submit" class="btn btn-default">Register</button>
      </p>
        </form>
</div>

  </div>
</div>
<br></br>


@endsection
