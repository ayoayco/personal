<div class="container">
  <form class="form-signin" role="form" method="post" action="?id=<?php echo $_GET['id'];?>">
    <h1 class="form-signin-heading text-center">Prove you're Ayo.</h1><br />
      <input type="password" id="password" name="password" autofocus="autofocus" class="form-control" placeholder="What's the Password?" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Let's Go!</button>
      <a href="?id=home" class="btn btn-lg btn-danger btn-block">I Give Up</a>
  </form>
</div> <!-- /container -->