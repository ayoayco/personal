<nav class="<?php //if($page == "home") echo "hidden-xs";?> navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?id=home">AYO AYCO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($page == "about") echo "class='active'";?>><a href="?id=about">About</a></li>
        <li <?php if($page == "timeline") echo "class='active'";?>><a href="?id=timeline">Timeline</a></li>
        <li <?php if($page == "portfolio") echo "class='active'";?>><a href="?id=portfolio">Portfolio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
			  <li><a href="http://blog.ayoayco.com">Blog</a></li>
			  <li><a href="http://ayoayco.blogspot.com">The Absorbing Man</a></li>
			  <li><a href="http://twitter.com/theabsorbingman">Twitter</a></li>
            <!--li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li-->
          </ul>
        </li>
      </ul>
      <!--form class="navbar-form navbar-right" method="post" action="?id=contact">
        <div class="input-group">
          <input id="msg" name="msg" type="text" class="form-control" placeholder="Leave a message..." required />
          <span class="input-group-btn"><button type="submit" class="btn btn-default">Send!</button></span>
        </div>
      </form-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>