<html>
<header><title>Tutorial @yield('title')
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

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                  <li class=>
                    <a href="{{route('KeTutorial')}}">Tutorial <span class="sr-only">(current)</span></a></li>
                  <li class=>
                    <a href="{{route('KeTrackRecord')}}">Track Record<span class="sr-only">(current)</span></a></li>
                  <li><a href="{{route('keVideoTutorial')}}">Video Tutorial</a></li>
                  </ul>


                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{route('keProfile')}}">Profil</a></li>
                  <li><a href="{{URL::route('Logout')}}">Logout</a></li>
                  

                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          </div>

      </tr>
.kuning {color:#ed3237}
<style type="text/css">
p{
  text-align: center;
  color: :#ed3237;

}
</style>


<br><br><br>
<tr>
    <h1 align ="center" style="color:#ed3237; font-family: Century Gothic; ">Selamat Datang {{auth()->user()->username}}</h1>
    <!--<img src="{{route('image', ['folder' => 'fotoprofiluser', 'filename' => auth()->user()->foto_profile])}}">-->
  <h1 align ="center" style="color:#ed3237; font-family: Century Gothic; ">Pilih Tutorial Anda !</h1>
</tr>
  <tr>
    <div class="row">
      <div class="col-xs-6 col-md-3">


        <td>
        <a href="{{ route('keDribbling') }}"class="thumbnail">
          <img src="assets/drible.jpg" width="260" height="280"  >
          <p>Driblling Tutorial</p>
        </a>
        </td>

        <td>
        <a href="{{ route('kePivot') }}" class="thumbnail">
          <img src="assets/pivot.jpg" width="260" height="280"   >
          <p align ='center'>Pivot Tutorial</p>
        </a>
        </td>

        <td>
        <a href="{{ route('kePassing') }}" class="thumbnail">
          <img src="assets/catch.jpg" width="260" height="280"  >
          <p align ='center'>Passing & Catching Tutorial</p>
        </a>
        </td>

        <td>
        <a href="{{ route('keRebound') }}" class="thumbnail">
          <img src="assets/rebound.jpg" width="260" height="280"   >
          <p align ='center'>Rebound Tutorial</p>
        </a>
        </td>

        <td>
        <a href="{{ route('keShooting') }}" class="thumbnail">
          <img src="assets/shooting.jpg"width="260" height="280"  >
          <p align ='center'>shooting Tutorial</p>
        </a>
        </td>

        <td>
        <a href="{{ route('keRule') }}" class="thumbnail">
          <img src="assets/rule.jpg"width="260" height="280"  >
          <p align ='center'>Rule Basketball</p>
        </a>
        </td>

      </div>

    </div>
  </tr>
</table>
@yield('contain')
</body>
</html>
