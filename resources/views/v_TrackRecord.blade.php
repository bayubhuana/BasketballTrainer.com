@extends('templateshome')
@section('title')Track Record
@endsection
@section('body')
<br><br><br>
<tr>
<h1 style="text-align : center ; color : #f0ad4e;"> Your Basket Ball Training  </h1>
<h1 style="text-align : center;  color : #f0ad4e;"> Track Record </h1>
<br><br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3"><img src="assets/drible_icon.png" width="100" height="100" >      {{$t_Dribbling}} minute</div>
  </div>
</div>
</tr>
<tr>
<br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3"><img src="assets/pivot_icon.png" width="100" height="100" >    {{$t_Pivot}}   minute</div>
  </div>
</div>
</tr>
<tr>
<br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3"><img src="assets/Passing_Catching_icon.png" width="100" height="100" > {{$t_Passing_Catching}}minute</div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3"><img src="assets/Rebound_icon.png" width="100" height="100" >    {{$t_Rebound}}   minute</div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3"><img src="assets/Shooting_icon.png" width="100" height="100" >     {{$t_Shooting}}   minute</div>
  </div>


</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="col-md-6 col-md-offset-3">

      <form action="{{route('Reset')}}">
      <input type="submit" value="Reset Data">
      <Form>

      </div>
  </div>

</tr>


@endsection
