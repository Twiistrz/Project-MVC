<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Model-View-Controller</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=HTTPHOST;?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=HTTPHOST;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=HTTPHOST;?>assets/css/bootstrap.lumen.css">
	<link rel="stylesheet" type="text/css" href="<?=HTTPHOST;?>assets/css/fontawesome.min.css">
	<script type="text/javascript" src="<?=HTTPHOST;?>assets/js/jquery.min.js"></script>
	<?php if(isset($this->js)):
	foreach($this->js as $js): ?>
	<script type="text/javascript" src="<?=HTTPHOST.$js;?>"></script>
	<?php endforeach;
	endif; ?>
</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?=HTTPHOST;?>" class="navbar-brand">
					<img src="<?=HTTPHOST;?>assets/img/logo.png" class="img-responsive" alt="Model-View-Controller" width="45px">
				</a>
			</div><!--//.navbar-header-->

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?=HTTPHOST;?>">Home</a></li>
					<li><a href="<?=HTTPHOST;?>help/">Help</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(Session::get('loggedIn') == true): ?>

					<li><p class="navbar-text">Signed in as <?=Session::get('name');?></p></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?=HTTPHOST;?>dashboard/"><i class="fa fa-fw fa-tachometer text-primary">&nbsp;</i>Dashboard</a></li>
							<?php if(Session::get('role') == 'developer'): ?>
							<li><a href="<?=HTTPHOST;?>user/"><i class="fa fa-fw fa-users text-primary">&nbsp;</i>Users</a></li>
							<?php endif; ?>
							<li role="separator" class="divider"></li>
							<li><a href="<?=HTTPHOST;?>dashboard/logout/"><i class="fa fa-fw fa-sign-out text-warning">&nbsp;</i>Log out</a></li>
						</ul>
					</li>
					<?php else: ?>
					<li><a href="<?=HTTPHOST;?>login/"><i class="fa fa-fw fa-sign-in text-primary">&nbsp;</i>Log in</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div><!--//.container-->	
	</nav><!--//.navbar-->

