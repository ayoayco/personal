<?php
  $webexp = 4;
  $visualartsexp = 3;
  $musicexp = 7;
  $literatureexp = 6;
  $loveexp = ":)";
?>
<div id="home-container" class="container" role="main">
  <div class="row">

      <!--form id="home-msg" class="hidden-md hidden-lg hidden-sm" method="post" action="?id=contact">
        <div class="input-group">
          <input id="msg" name="msg" type="text" class="form-control" placeholder="Leave a message..." required />
          <span class="input-group-btn"><button type="submit" class="btn btn-default">Send!</button></span>
        </div>
      </form-->

    <div class="welcome col-md-3 text-center hidden-xs hidden-sm">
    </div>

    <div class="welcome col-md-6 text-center">
      <a href="?id=about"><img id="profile-pic" src="assets/images/hmm2-2.jpg" class="img-responsive img-circle" data-toggle="tooltip" data-placement="right" title="Click my face! Get more info!" /></a>
      <h1>Hi, I'm Ayo.</h1>
      <p>
        <span class="glyphicon glyphicon-ok initialism"></span> Kung Fu! <span class="glyphicon glyphicon-ok initialism"></span> Parkour! <span class="glyphicon glyphicon-ok initialism"></span> Dancing!<br />
        I don't know any of those.<br />
        But I'm fond of Apps built for the Web!<br />
        I sleep a lot, too. Sometimes.
      </p>
      <p>That's it, I guess.</p>
      <p>Check out <a href="?id=portfolio" id="some-stuff" data-toggle="tooltip" data-placement="top" title="Projects I have completed">some stuff</a> I've done!</p>
      <div id="home-btns" class="text-center">
        <h3 data-toggle="tooltip" data-placement="top" title='"Experience points are generally awarded for the completion of quests, overcoming obstacles and opponents, and for successful role-playing."'>Experience Points...</h3>
        <p>
        <a href="#" class="btn btn-primary btn-sm" role="button">Web <span class="badge"><?php echo $webexp;?></span></a>
        <a href="#" class="btn btn-warning btn-sm" role="button">Visual Arts <span class="badge"><?php echo $visualartsexp;?></span></a>
        <a href="#" class="btn btn-success btn-sm" role="button">Music <span class="badge"><?php echo $musicexp;?></span></a>
        <a href="#" class="btn btn-info btn-sm" role="button">Literature <span class="badge"><?php echo $literatureexp;?></span></a>
        <a href="#" class="btn btn-danger btn-sm" role="button">Love <span class="badge"><?php echo $loveexp;?></span></a>
        </p>
      </div>
    </div>

    <div class="welcome col-md-3 text-center hidden-xs hidden-sm">
    </div>
  </div>



</div>