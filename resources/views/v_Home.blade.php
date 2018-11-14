<html>
<header> Tutorial<title>
</title>
<link  rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</header>

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
                  <li class="active">
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
                      <li class="active">
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

<style type="text/css">
p { color:#ed3237 }
h1{ color:#ed3237;
  font-family: Century Gothic; }
</style>


<br><br><br>
<tr>
  <h1 align ="center" style="color:#ed3237; font-family: Century Gothic; ">Select Your Tutorial !</h1>
</tr>
  <tr>
    <div class="row">
      <div class="col-xs-6 col-md-3">


        <td>
        <a href="#" class="thumbnail">
          <img src="assets/drible.jpg" width="60" height="80"  >
          <p align ='center'>Driblling Tutorial</p>
        </a>
        </td>

        <td>
        <a href="#" class="thumbnail">
          <img src="assets/pivot.jpg" width="160" height="180"   >
          <p align ='center'>Pivot Tutorial</p>
        </a>
        </td>

        <td>
        <a href="#" class="thumbnail">
          <img src="assets/catch.jpg" width="160" height="180"  >
          <p align ='center'>Catch Tutorial</p>
        </a>
        </td>

        <td>
        <a href="#" class="thumbnail">
          <img src="assets/rebound.jpg" width="160" height="180"   >
          <p align ='center'>Rebound Tutorial</p>
        </a>
        </td>

        <td>
        <a href="#" class="thumbnail">
          <img src="assets/shooting.jpg"width="160" height="180"  >
          <p align ='center'>shooting Tutorial</p>
        </a>
        </td>
      </div>

      <a href="#" class="thumbnail">
        <img src="assets/shooting.jpg"width="160" height="180"  >
        <p align ='center'>Basketball Rule</p>
      </a>
      </td>
    </div>

    </div>
  </tr>
@yield('contain')
</table>
</body>
</html>
