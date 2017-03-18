<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-3">
			<div>
				<h1>User</h1>
			</div>
			<hr />
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Edit User</h2>
				</div><!--/.panel-heading-->
				<?php if($this->user == false): ?>
				<div class="panel-body">
					<div class="alert alert-warning">
						<i class="fa fa-fw fa-exclamation-triangle">&nbsp;</i>You cannot edit a user that doesnt exist
					</div><!--/.alert-->
				</div><!--/.panel-body-->
				<?php else: ?>
				<form action="<?=HTTPHOST;?>user/editSave/<?=$this->user['user_id'];?>/" method="post">
					<div class="panel-body">
						<div class="form-group">
							<input name="username" type="text" class="form-control" placeholder="Username" value="<?=$this->user['user_name'];?>">
						</div>
						<div class="form-group">
							<input name="password" type="password" class="form-control" placeholder="Password">
							<label class="small text-muted">Leave the password blank if dont want to change.</label>
						</div>
						<select name="role" class="form-control">
							<option value="default" <?=($this->user['user_role'] == 'default') ? 'selected' : false;?>>Default</option>
							<option value="admin" <?=($this->user['user_role'] == 'admin') ? 'selected' : false;?>>Admin</option>
							<option value="developer" <?=($this->user['user_role'] == 'developer') ? 'selected' : false;?>>Developer</option>
						</select>
					</div><!--/.panel-body-->
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary">Update</button>	
					</div><!--/.panel-footer-->
				</form>
				<?php endif; ?>
			</div><!--/.panel-->
		</div>
	</div><!--/.row-->
</div><!--/.container-->