<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
			<div>
				<h1>Dashboard</h1>

				<form id="randomInsert" action="<?=HTTPHOST;?>dashboard/ajaxInsert/" method="post">
					<div class="input-group">
						<input type="text" name="text" class="form-control" placeholder="Add Some Shit Ajax will do all of it">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">Submit</button>	
						</span>
					</div>
				</form>
			</div>
			<hr />
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
						<tr>
							<th width="40px">Action</th>
							<th>ID</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody id="listInsert"></tbody>
				</table>
			</div>
		</div>
	</div>
</div>