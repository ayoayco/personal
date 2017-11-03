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
        <!--li <?php //if($page == "about") echo "class='active'";?>><a href="?id=about">About</a></li-->
        <li><a targe="_blank" href="http://blog.ayoayco.com">Blog</a></li>
        <li><a target="_blank" href="http://absorbingdesign.com">Design Studio</a></li>
        <?php
        if(isset($_SESSION['okay'])){
        ?><li id="addNavItemButton" data-toggle="tooltip" data-placement="right" title='Add link'><a href="#"><i class="fa fa-plus"></i></a></li>
        <?php } ?>
        <!--li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
    			  <li><a href="http://blog.ayoayco.com">Blog</a></li>
    			  <li><a href="http://ayoayco.blogspot.com">The Absorbing Man</a></li>
    			  <li><a href="http://twitter.com/theabsorbingman">Twitter</a></li>
            <li class="divider"></li>
            <li><a href="">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="">One more separated link</a></li>
          </ul>
        </li-->
      </ul>
      <?php
        if(isset($_SESSION['okay'])){
      ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a style="cursor: pointer" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>&nbsp;&nbsp;Options</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="?id=changepw"><i class="fa fa-edit"></i>&nbsp;&nbsp;Change Password</a></li>
              <li><a href="?id=editurl"><i class="fa fa-globe"></i>&nbsp;&nbsp;Edit URL</a></li>
              <li><a href="logout.php?id=<?php echo $_GET['id'];?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a></li>
            </ul>
          </li>
        </ul>
      <?php } else { ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a id="login-link" class="btn" role="button" style="height: 50px;"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Log in</a></li>
        </ul>
        <form id="login-form" class="navbar-form navbar-right" method="post" action="?id=home">
          <div class="input-group">
            <span class="input-group-btn"><a class="btn btn-danger" id="hide"><i class="fa fa-times"></i></a></span>
            <input id="password" name="password" type="password" autofocus="autofocus" class="form-control" placeholder="Password..." required />
            <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Log in</button></span>
          </div>
        </form>
      <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>