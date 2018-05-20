<div id="home-container" class="container" role="main">
  <div class="row">
    <div class="welcome col-md-3 text-center">
      <img id="profile-pic" src="assets/images/hmm2-2.jpg" class="img-responsive img-circle" data-toggle="tooltip" data-placement="right" title="Hello!" />
      <h1>Ayo Ayco</h1>
        <h4>Software Engineer</h4>
      <p>
        <span class="glyphicon glyphicon-ok initialism"></span> Kung Fu!
        <span class="glyphicon glyphicon-ok initialism"></span> Parkour!
        <span class="glyphicon glyphicon-ok initialism"></span> Dancing!<br />
        I can't do any of those,<br />
        But I'm fond of Apps built for the Web!
      </p>
      <div id="home-btns" class="text-center">
        <div>
          <a href="https://github.com/ayoayco" target="_blank" class="btn btn-default" role="button"><span class="badge"><i class="fa fa-github-alt"></i></span> Github</a>
          <a href="https://www.linkedin.com/in/ayoayco/" target="_blank" class="btn btn-primary" role="button"><span class="badge"><i class="fa fa-linkedin"></i></span> LinkedIn</a>
        </div>
    <?php require('skills.php'); ?>
    <?php require('speaking.php'); ?>
      </div>
    </div>

    <div class="welcome col-md-9">
        <div class="row">
          <div id="life-moments-intro" class="col-md-6 col-md-offset-3 text-center">
            <h2><i class="fa fa-leaf"></i> Experience and Projects</h2>
            <p>
              Achievements unlocked!
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
                        <div class="post-actions">
                          <a data-toggle="tooltip" data-placement="top" title='Delete' href="delete.php?projID=<?php echo $rows['id']?>" class="text-danger"><i class="fa fa-times"></i></a>&nbsp;
                          <a data-toggle="tooltip" data-placement="top" title='Edit' href="?id=edit&projID=<?php echo $rows['id']?>" class="text-success"><i class="fa fa-pencil"></i></a>
                        </div>
                      <?php }?>
                      <h2 class="text-center"><?php echo $rows['title'];?></h2>
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
