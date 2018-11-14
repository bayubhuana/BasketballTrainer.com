@extends('v_Tutorial')

@section('title')
Dribbling
@endsection

@section('contain')
<br></br>

<style type="text/css">

    .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}

</style>

<table><tr>
  <h1 align = "center">Dribbling Tutorial</h1>
</tr>
<tr>
  <td></td>
  <td>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <p class ="justify">
    Dribbling is one of the most fundamental skills that must be learned. Not only is it important
     to learn how to dribble well, but it is important to know when, and when not, to dribble. One
     player who over-dribbles can kill a team's offensive motion and momentum. To become a good
     dribbler and ball handler, you must practice dribbling as often as you can, using both hands.
     This article discusses this basic fundamental and several dribble moves.<br></br>
     <p class="left">You may dribble:</p>
     <p class="left">1. To advance the ball up the court.</p>
     <p class="left">2. To drive to the hoop.</p>
     <p class="left">3. To get open for a shot.</p>
     <p class="left">4. To open up a passing lane, to have a better chance of completing a pass.</p>
     <p class="left">5. To get out of a trap.</p>
     <p class="left">6. To kill the clock at the end of a game</p>
     <p class="left" style="font-weight: bold;">  A. How to Dribble</p>
     <p class="center"><img src="assets/driblec2.gif" width="120" height="180" id="driblec1"></p>
    <p class="center" style="font-weight: bold;">Drible With Fingertips </p>
     <p class="Justify">  Use your fingertips, not the palms of your hands..
                        Basketball is played on the tips of your fingers and the balls of
                        your feet. Use your forearm and wrist to bounce the ball. Don't look at the ball...
                        keep your head up and eyes forward. You must learn to use either hand. So when doing drills,
                        always work both hands.
     </p><br></br>
     <p class="left" style="font-weight: bold;"> B. Control Dribble  (when the defender is up close on you)</p>
     <p class="Justify"> When a defender is guarding you closely, you should use the "control dribble". Keep
                         in a somewhat crouched, bent over position. Keep your body between the ball and
                         the defender. Keep the ball low to the floor, behind and close to your body.
                         Keep your other arm straight out in front of you, as a guard against the defender.
      </p>
<br></br>
      <p class="left" style="font-weight: bold;"> C. Crossover Dribble </p>
      <p class="Justify">
        Simply, the crossover dribble has you switch dribbling from one hand to the other,
        by bouncing the ball in front of you across to the other side. Then the other hand
        picks up the ball and you are now dribbling with the opposite hand. You can use
        this dribble to quickly change your direction on the court. For example, you could be on the point,
        dribbling with your right hand to the right wing, then suddenly crossover the dribble to the left and drive up the lane.
       </p>

       <form class="center" action="{{route('LatihanDribbling')}}">
         <input name="Submit" value="Exercise Dribbling Now!" type="Submit" class="btn btn-warning" >
       </form>


   </td>
 </tr><br></br>

    </p>
  </div>
  </div>
</td>
</tr>


@endsection
