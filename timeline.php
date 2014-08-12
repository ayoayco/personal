<div class="container">
  <div class="row">
    <div id="life-moments-intro" class="col-md-6 col-md-offset-3 text-center">
      <h1><i class="fa fa-leaf"></i> Life Moments</h1>
      <p>
        Haaay... Life... Such a wonderful gift!<br />Seriously.
      </p>
      <?php if(isset($_SESSION['okay'])) echo '<a href="?id=add" class="btn btn-primary">Add a Life Moment</a>'; ?>
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
                <i class="icon-<?php echo $rows['icon'];?>"></i>
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
    <div style="height: 30px;"></div>
</div>
    <script src="js/timeline.js"></script>