@extends('templates')

@section ('title')
Register
@endsection

@section ('body')
  <style type="text/css">
  p { color:#ed3237; }
  h3{ color:#ed3237;
    font-family: Century Gothic;
    }
  label{
    text-align: center;
  }
  .center  { text-align: center;}
  </style>
<div class="panel panel-warning">
  <div class="panel-heading">
      <h3 class="panel-title">Basketball Trainer</h3>
    </div>
</div>



    <div class="row">
      <div class="col-xs-6 col-sm-4"></div>
      <div class="col-xs-6 col-sm-4">
        <h1 style="text-align : center; color :#ed3237; ">Basketball Trainer Register </h1>
        <form action="{{route('prosesRegister')}}" method="post" enctype="multipart/form-data">
         <p><img src="assets/bbt logo.png"  width="150" height="150">
          <input type="file" name="foto" accept="image/*" id="pic">
          </p>

        <label for="username" style="font-family : Century Gothic"> Username </label>
        <input type="text" class="form-control" id="username" name ="username" placeholder="Username">
        <label for="Password1" style="font-family : Century Gothic">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password"  name ="password">

        <Input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">


        <label for="Email1" style="font-family : Century Gothic"> Email </label>
        <input type="email" class="form-control" id="email" placeholder="Email" name ="email">
      </div>
      <p class="text-center"><button type="submit" class="form-control">Register</button>
      </p>
        </form>

      </div>

      <div class="clearfix visible-xs-block"></div>
      <div class="col-xs-6 col-sm-4"></div>
    </div>





<br></br>
