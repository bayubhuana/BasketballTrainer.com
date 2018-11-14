<html><header></header>
<title>LatihanDribbling</title>
<link  rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<body>
  <table>
    <tr>
        <nav class="navbar navbar-default navbar-fixed-top " style ="background-color: #f2ccb1" >
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              Basketball Trainer
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="">Tutorial <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Track Record</a></li>
                <li><a href="#">Video Tutorial</a></li>
                </ul>


              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Profil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        </div>

    </tr>
<br><br><br><br>
    <div class="row">
      <div class="col-xs-6 col-sm-4"></div>
      <div class="col-xs-6 col-sm-4">
        <h1 style="text-align : center; color :#ed3237; ">Exercise Shooting</h1><br>
        <form action="{{route('RecordShooting')}}" method="post" enctype="multipart/form-data">
        <h4>How Hard Are You Do Today?</h4>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio1" value="5"> 05 Minute
            </label>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio2" value="10"> 10 Minute
            </label>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio3" value="15"> 15 Minute
            </label>
            <br>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio1" value="20"> 20 Minute
            </label>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio2" value="25"> 25 Minute
            </label>
            <label class="radio-inline">
                <input type="radio" name="time" id="inlineRadio3" value="30"> 30 Minute
            </label>
        <Input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">

        <p class="text-center"><button type="submit" class="form-control btn btn-warning"> Save Your Ability !</button>
        </p>

      </div>

        </form>

      </div>

      <div class="clearfix visible-xs-block"></div>
      <div class="col-xs-6 col-sm-4"></div>
    </div>
    <tr>
  </body>

</html>
