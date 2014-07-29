<div class="container">
  <div class="timeline animated">
  

    <div id="life-moments-intro" class="col-md-6 col-md-offest-4 text-center">
      <h1>Life Moments</h1>
      <p>
        Haaay... Life... Such a wonderful gift! Seriously.
      </p>
    </div>

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
                <h2><?php echo $rows['title'];?></h2>
                <p>
                  <?php echo $rows['body'];?>
                </p>
              </div>
            </div>
          </div>

      <?php } ?>
    
    <script src="js/timeline.js"></script>
    <div style="margin:30px;"></div>
</div>
</div>