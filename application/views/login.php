<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="LoginPOS"/>
		<meta name="author" content="Dedi Ananto"/>

		
		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="<?php echo base_url("assets/img/ico/favicon.png");?>">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("assets/img/ico/favicon-144.png");?>">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("assets/img/ico/favicon-114.png");?>">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("assets/img/ico/favicon-72.png");?>">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url("assets/img/ico/favicon-57.png");?>">
		
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>" type="text/css">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css");?>" type="text/css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery -->
		<script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js");?>"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js");?>"></script>
		<script src="<?php echo base_url("assets/js/TweenLite.min.js");?>"></script>
		<script src="<?php echo base_url("assets/js/login.js");?>"></script>
	</head>
	<body>
		<div class="container">
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">                                
							<div class="row-fluid user-row">
								<h3 class="text-center"><b>OpensourcePOS</b></h3>
							</div>
						</div>
						<div class="panel-body">
							<div class="text-warning"><?php echo validation_errors(); ?></div>
							<?php echo form_open('login') ?>
								<fieldset>
									<label class="panel-login">
										<div class="login_result"></div>
									</label>
									<?php echo form_input(array(
									'name'=>'username',
									'id'=>'username',
									'class'=>'form-control',
									'placeholder' => $this->lang->line('login_username'))); 
									echo form_password(array(
									'name'=>'password',
									'id' => 'password',
									'class'=>'form-control',
									'placeholder' => $this->lang->line('login_password')));
									?>
									<br></br>
									<input class="btn btn-lg btn-warning btn-block" type="submit" name="loginButton" value="Login »">
								</fieldset>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
