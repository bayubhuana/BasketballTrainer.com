
<html>
<header> <title>@yield('title')
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
                  <li>
                    <a href="{{ URL::route('KeTutorial') }}">Tutorial <span class="sr-only">(current)</span></a></li>
                  <li><a href="{{ URL::route('KeTrackRecord') }}">Track Record</a></li>
                  <li><a href="{{URL::route('keVideoTutorial')}}">Video Tutorial</a></li>
                  </ul>


                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{URL::route('keProfile')}}">Profil</a></li>
                  <li><a href="{{URL::route('Logout')}}">Logout</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          </div>

      </tr>
    @yield('body')
</table>
  </body>
</html>
