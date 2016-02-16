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
      <a href="?id=timeline"><img id="profile-pic" src="assets/images/hmm2-2.jpg" class="img-responsive img-circle" data-toggle="tooltip" data-placement="right" title="Click my face! Get more info!" /></a>
      <h1>Hi, I'm Ayo.</h1>
      <p>
        <span class="glyphicon glyphicon-ok initialism"></span> Kung Fu! <span class="glyphicon glyphicon-ok initialism"></span> Parkour! <span class="glyphicon glyphicon-ok initialism"></span> Dancing!<br />
        I don't know any of those.<br />
        But I'm fond of Apps built for the Web!
      </p>
      <p>Check out <a href="?id=timeline">my Work Experince</a></p
      <p>...or <a href="http://blog.ayoayco.com">my blog</a> for more updates.</p>
      <div id="home-btns" class="text-center">
        <h3 data-toggle="tooltip" data-placement="top" title='Here are some places in the Web where you can connect with me.'>Connect with me...</h3>
        <p>
        <a href="https://facebook.com/ayosJournal" target="_blank" class="btn btn-primary" role="button"><span class="badge"><i class="fa fa-facebook"></i></span> Facebook</a>
        <a href="https://twitter.com/theAbsorbingMan" target="_blank" class="btn btn-info" role="button"><span class="badge"><i class="fa fa-twitter"></i></span> Twitter</a>
        <a href="https://github.com/ayoayco" target="_blank" class="btn btn-success" role="button"><span class="badge"><i class="fa fa-github-alt"></i></span> Github</a>
        <!--a href="#" class="btn btn-success btn-sm" role="button">Music <span class="badge"><?php echo $musicexp;?></span></a>
        <a href="#" class="btn btn-danger btn-sm" role="button">Love <span class="badge"><?php echo $loveexp;?></span></a-->
        </p>
      </div>
    </div>

    <div class="welcome col-md-3 text-center hidden-xs hidden-sm">
    </div>
  </div>



</div>