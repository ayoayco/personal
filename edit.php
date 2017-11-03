<?php
    $projID = $_GET['projID'];

    @include('dbconnect.php');
    $sql = "SELECT * FROM `timeline_post` WHERE `id` = '".$projID."'";
    $result = mysql_query($sql) or die("Cannot execute query!");
    $rows = mysql_fetch_array($result);
?>



<div class="container">
		<div class="row text-center" style="margin-bottom: 20px;">
			<h1><i class="fa fa-pencil"></i> Edit a Project</h1>
		</div>
		<form method='post' action='editcontroller.php?projID=<?php echo $projID?>' class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-8 side-padding-30">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
					      <input id="title" name="title" class="form-control" placeholder="Title" maxlength="200" value='<?php echo $rows['title'];?>' />
					      <textarea id="body" name="body" class="form-control" rows="10" placeholder="Body..."><?php echo $rows['body'];?></textarea>
					    </div>
					  </div>
				</div>
				<div class="col-md-4 side-padding-30">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
					      <input id="month-day" name="month-day" class="form-control" placeholder="Month and Day" maxlength="15" value='<?php echo $rows['month-day'];?>' />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
					      <!--input id="year" name="year" class="form-control" placeholder="Year" maxlength="4" /-->

					      <select id="year" name="year" class="form-control">
                                <option value="<?php echo $rows['year'];?>"><?php echo $rows['year'];?></option>
						      <?php
						      	$y = date("Y");
						      	for($i=$y;$i>=2005;$i--)
						      		echo "<option>".$i."</option>";
						      ?>
						   </select>

					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-star"></i></div>
					      <input id="icon" name="icon" class="form-control" placeholder="Icon" maxlength="30" value='<?php echo $rows['icon'];?>' />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-question-circle"></i></div>
					      <select id="context" name="context" class="form-control" placeholder="Context" maxlength="8">
					      	<option value="<?php echo $rows['context'];?>"><?php echo $rows['context'];?></option>
					      	<option value="success">success (green)</option>
					      	<option value="info">info (blue)</option>
					      	<option value="warning">warning (orange)</option>
					      	<option value="danger">danger (red)</option>
					      </select>
					    </div>
					  </div>
					<div class="form-group">
						      <button type="submit" class="btn btn-primary">Edit Moment!</button>
						      <a href="?id=home" class="btn btn-danger">Cancel</a>
					</div>
				</div>
			</div>
		</form>
</div>