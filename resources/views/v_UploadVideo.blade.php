@extends('templates')

<head>
<meta charset="UTF-8">
<title>VideoTutorial</title>
</head>

<body>

  <div class="row">
    <div class="col-xs-6 col-sm-4"></div>
    <div class="col-xs-6 col-sm-4">
      <h1 style="text-align : center; color :#ed3237; ">Upload Your Video Tutorial </h1>
      <form action="{{route('UploadingVideo')}}" method="post" enctype="multipart/form-data">
       <p><img src="assets/bbt logo.png"  width="150" height="150">
        <input type="file" name="video"  id="pic">
        </p>
      <label for="Vid" style="font-family : Century Gothic"> Name Your Video </label>
      <input type="submit" class="form-control" id="Vidname" name ="Vid" Value="Upload!">


      <Input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">

      </form>

</body>
