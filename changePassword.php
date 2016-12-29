<div class="container">
		<div class="row text-center" style="margin-bottom: 20px;">
			<h1><i class="fa fa-pencil"></i> Change your Password</h1>
		</div>
		<form method='post' action='changecontroller.php' class="form-horizontal" role="form">
			<div class="row">
				<div class="col-md-4  col-md-offset-4">
					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-arrow-right"></i></div>
					      <input type="password" id="oldpw" name="oldpw" class="form-control" placeholder="Old password" maxlength="15" />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-arrow-right"></i></div>
					      <input onKeyUP="checkPw()" type="password" id="newpw" name="newpw" class="form-control" placeholder="New password" maxlength="30" />
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-arrow-right"></i></div>
					      <input onKeyUP="checkPw2()" type="password" id="newpw2" name="newpw2" class="form-control" placeholder="Confirm new password" maxlength="30" />
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