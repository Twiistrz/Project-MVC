<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div>
				<h1>Users</h1>
			</div>
			<hr />
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title">Add User</h2>
						</div>
						<form action="<?=HTTPHOST;?>user/create/" method="post">
							<div class="panel-body">
								<div class="form-group">
									<input name="username" type="text" class="form-control" placeholder="Username">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password">
								</div>
								<select name="role" class="form-control">
									<option value="default" selected>Default</option>
									<option value="admin">Admin</option>
									<option value="developer">Developer</option>
								</select>
							</div>
							<div class="panel-footer">
								<button type="submit" class="btn btn-primary"><i class="fa fa-user-plus">&nbsp;</i>Add</button>	
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th width="100px">Action</th>
									<th>ID</th>
									<th>Username</th>
									<th>Role</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($this->userList as $key => $value): ?>
								<tr>
									<td>
										<a href="<?=HTTPHOST;?>user/edit/<?=$value['user_id'];?>/" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
										<a <?=($value['user_id'] != 1) ? 'href="'.HTTPHOST.'user/delete/'.$value['user_id'].'/"' : false;?> class="btn btn-danger"<?=($value['user_id'] == 1) ? 'disabled' : false;?>>
											<i class="fa fa-fw fa-trash"></i>
										</a>
									</td>
									<td><?=$value['user_id'];?></td>
									<td><?=$value['user_name'];?></td>
									<td><?=strtoupper($value['user_role']);?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>