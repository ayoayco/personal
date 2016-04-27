<?php
  $webexp = 4;
  $visualartsexp = 3;
  $musicexp = 7;
  $literatureexp = 6;
  $loveexp = ":)";
?>
<div id="home-container" class="container" role="main">
  <div class="row">
    <div class="welcome col-md-3 text-center">
      <a href="?id=timeline"><img id="profile-pic" src="assets/images/hmm2-2.jpg" class="img-responsive img-circle" data-toggle="tooltip" data-placement="right" title="Click my face! Get more info!" /></a>
      <h1>Ayo Ayco</h1>
      <p>
        <span class="glyphicon glyphicon-ok initialism"></span> Kung Fu! <span class="glyphicon glyphicon-ok initialism"></span> Parkour! <span class="glyphicon glyphicon-ok initialism"></span> Dancing!<br />
        I don't know any of those.<br />
        But I'm fond of Apps built for the Web!
      </p>
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

    <div class="welcome col-md-9 text-center">
        <div class="row">
          <div id="life-moments-intro" class="col-md-6 col-md-offset-3 text-center">
            <h1><i class="fa fa-leaf"></i> Experience and Projects</h1>
            <p>
              Here lies the technical experience and projects I have gained so far.<br />Also, you can <a href="documents/Ayco_CV.pdf">download my CV</a>. :)
            </p>
            <?php if(isset($_SESSION['okay'])) echo '<a href="?id=add" class="btn btn-primary">Add a Project</a>'; ?>
          </div>
        </div>
        <div class="timeline animated">

            <?php
              @include('dbconnect.php');
              $sql = "SELECT * FROM timeline_post SORT ORDER BY id DESC";
              $result = mysql_query($sql) or die("Cannot execute query!");
              while ($rows = mysql_fetch_array($result)){
            ?>  

                <div class="timeline-row">
                  <div class="timeline-time">
                    <small><?php echo $rows['month-day'];?></small><?php echo $rows['year'];?>
                  </div>
                  <div class="timeline-icon">
                    <div class="bg-<?php echo $rows['context'];?> text-<?php echo $rows['context'];?>">
                      <i class="fa fa-<?php echo $rows['icon'];?>"></i>
                    </div>
                  </div>
                  <div class="panel timeline-content">
                    <div class="panel-body">
                      <?php if(isset($_SESSION['okay'])){?>
                        <div class="post-actions"><a href="delete.php?id=<?php echo $rows['id']?>" class="text-danger"><i class="fa fa-times"></i></a></div>
                      <?php }?>
                      <h2><?php echo $rows['title'];?></h2>
                      <p>
                        <?php echo $rows['body'];?>
                      </p>
                    </div>
                  </div>
                </div>

            <?php } ?>
        </div>
        <div style="height: 30px;">
        </div>
      <script src="js/timeline.js"></script>
    </div>
  </div>
</div>