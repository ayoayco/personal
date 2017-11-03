<?php
    @include('dbconnect.php');
    $sql = 'SELECT * FROM `options` WHERE `option` = "url"';
    $result = mysql_query($sql) or die("Cannot execute query!");
    $rows = mysql_fetch_array($result);
?>

<div class="container">
		<div class="row text-center" style="margin-bottom: 20px;">
			<h1><i class="fa fa-pencil"></i> Edit Home URL</h1>
		</div>
		<form method='post' action='editurlcontroller.php' class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-4  col-md-offset-4">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-arrow-right"></i></div>
					      <input id="newurl" name="newurl" class="form-control" value="<?php echo $rows['value']?>" />
					    </div>
					  </div>

					<div class="form-group" style="margin-left: 50px;">
						      <button style="margin-bottom: 5px; width: 250px;" type="submit" class="btn btn-primary">Let's go!</button><br />
						      <a style="width: 250px;" href="?id=home" class="btn btn-danger">Cancel</a>
					</div>
				</div>
			</div>
		</form>
</div>