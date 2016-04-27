<div class="container">
		<div class="row text-center" style="margin-bottom: 20px;">
			<h1><i class="fa fa-pencil"></i> Add a Project</h1>
			<p>New Project done? Add it!</p>
		</div>
		<form method='post' action='addcontroller.php' class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-8 side-padding-30">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
					      <input id="title" name="title" class="form-control" placeholder="Title" maxlength="200" />
					      <textarea id="body" name="body" class="form-control" rows="10" placeholder="Body..."></textarea>
					    </div>
					  </div>
				</div>
				<div class="col-md-4 side-padding-30">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
					      <input id="month-day" name="month-day" class="form-control" placeholder="Month and Day" maxlength="15" />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
					      <!--input id="year" name="year" class="form-control" placeholder="Year" maxlength="4" /-->

					      <select id="year" name="year" class="form-control">
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
					      <input id="icon" name="icon" class="form-control" placeholder="Icon" maxlength="30" />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-question-circle"></i></div>
					      <select id="context" name="context" class="form-control" placeholder="Context" maxlength="8">
					      	<option value="success">success (green)</option>
					      	<option value="info">info (blue)</option>
					      	<option value="warning">warning (orange)</option>
					      	<option value="danger">danger (red)</option>
					      </select>
					    </div>
					  </div>
					<div class="form-group">
						      <button type="submit" class="btn btn-primary">Add Moment!</button>
						      <a href="?id=timeline" class="btn btn-danger">Cancel</a>
					</div>
				</div>
			</div>
		</form>
</div>