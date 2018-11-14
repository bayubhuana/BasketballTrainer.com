 @extends('templateshome')
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>VideoTutorial</title>
</head>

<body>

  <br><br><br>
  <p style="text-align:center; font-size: 30px;"> Video Tutorial<p>

<div class="panel panel-warning">
  <div class="panel-heading">Dribbling Tutorial</div>
    <div class="panel-body">
      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        <source src="assets/vid1.ogg" type="video/ogg">
        </video>
      <tr>

        <tr>
          <video width="320" height="240" controls>
          <source src="assets/vid1.mp4" type="video/mp4">
          <source src="assets/vid1.ogg" type="video/ogg">
          </video>
        <tr>

  </div>
</div>

<br><br>
<div class="panel panel-warning">
<div class="panel-heading">Pivot Tutorial</div>
  <div class="panel-body">
    <tr>
      <video width="320" height="240" controls>
      <source src="assets/vid1.mp4" type="video/mp4">
      <source src="assets/vid1.ogg" type="video/ogg">
      </video>
    <tr>

      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        <source src="assets/vid1.ogg" type="video/ogg">
        </video>
      <tr>

</div>
</div>


<br><br>
<div class="panel panel-warning">
<div class="panel-heading">Passing & Catching Tutorial</div>
  <div class="panel-body">
    <tr>
      <video width="320" height="240" controls>
      <source src="assets/vid1.mp4" type="video/mp4">
      <source src="assets/vid1.ogg" type="video/ogg">
      </video>
    <tr>

      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        <source src="assets/vid1.ogg" type="video/ogg">
        </video>
      <tr>

</div>
</div>

<br><br>
<div class="panel panel-warning">
<div class="panel-heading">Rebound Tutorial</div>
  <div class="panel-body">
    <tr>
      <video width="320" height="240" controls>
      <source src="assets/vid1.mp4" type="video/mp4">
      <source src="assets/vid1.ogg" type="video/ogg">
      </video>
    <tr>

      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        <source src="assets/vid1.ogg" type="video/ogg">
        </video>
      <tr>

</div>
</div>

<br><br>
<div class="panel panel-warning">
<div class="panel-heading">Shooting Tutorial</div>
  <div class="panel-body">
    <tr>
      <video width="320" height="240" controls>
      <source src="assets/vid1.mp4" type="video/mp4">
      <source src="assets/vid1.ogg" type="video/ogg">
      </video>
    <tr>

      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        <source src="assets/vid1.ogg" type="video/ogg">
        </video>
      <tr>

</div>
</div>

<br><br>
<div class="panel panel-warning">
<div class="panel-heading">Rule Basketball</div>
  <div class="panel-body">
    <tr>
      <video width="320" height="240" controls>
      <source src="assets/vid1.mp4" type="video/mp4">
      <source src="assets/vid1.ogg" type="video/ogg">
      </video>
    <tr>

      <tr>
        <video width="320" height="240" controls>
        <source src="assets/vid1.mp4" type="video/mp4">
        </video>
      <tr>

        <br><br>
        <div class="panel panel-warning">
        <div class="panel-heading">User Video
        </div>

          <div class="panel-body">
            <p><a href="{{route('keUploadVideo')}}">upload gambar</a><p>

                @foreach($data as $d)
                <tr>
                    <video width="320" height="240" controls>
                    <source src="{{url($d->video)}}" type="video/mp4">
                    </video>
                </tr>
                @endforeach
        </div>
        </div>
</div>
</div>




</body>

</html>
