<div class="container">
	<div class="row">
		<h1 class="text-center"><i class="fa fa-pencil"></i> Add a Life Moment</h1>
		<p class="text-center">New life moment? Add it!</p>
		<form method='post' action='addcontroller.php' class="form-horizontal" role="form">
			<div class="col-md-8 padding-30">
				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
				      <input id="title" name="title" class="form-control" placeholder="Title" maxlength="8" />
				      <textarea id="body" name="body" class="form-control" rows="10" placeholder="Body..."></textarea>
				    </div>
				  </div>

				  <div class="form-group">
				      <button type="submit" class="btn btn-primary">Add Moment!</button>
				      <a href="?id=timeline" class="btn btn-danger">Cancel</a>
				  </div>
			</div>
			<div class="col-md-4 padding-30">
				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
				      <input id="month-day" name="month-day" class="form-control" placeholder="Month and Day" maxlength="15" />
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
				      <input id="year" name="year" class="form-control" placeholder="Year" maxlength="4" />
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
				      <input id="context" name="context" class="form-control" placeholder="Context" maxlength="8" />
				    </div>
				  </div>
			</div>
		</form>
	</div>
</div>