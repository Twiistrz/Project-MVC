<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Login Page</h2>
				</div>
				<form action="<?=HTTPHOST;?>login/login/" method="post">
					<div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-fw fa-user text-primary"></i></span>
								<input name="username" type="text" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-lock text-primary"></i></span>
							<input name="password" type="password" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<button type="submit" class="btn btn-primary btn-block">Log in&nbsp;<i class="fa fa-sign-in"></i></button>	
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="<?=HTTPHOST;?>forgotpassword/" class="btn btn-link btn-block">Forgot Password?</a>	
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>