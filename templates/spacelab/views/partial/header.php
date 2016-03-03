<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company').' -- '.$this->lang->line('common_powered_by').' Loginpos' ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
	<link rel="stylesheet" href="assets/adminlte/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			page. However, you can choose any other skin. Make sure you
			apply the skin class to the body tag so the changes take effect.
	-->
	<link rel="stylesheet" href="assets/adminlte/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="css/ospos.css" />
	<link rel="stylesheet" type="text/css" href="css/ospos_print.css" media="print" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php if ($this->input->cookie('debug') == "true" || $this->input->get("debug") == "true") : ?>
		<!-- start js template tags -->
		<script type="text/javascript" src="js/jQuery-2.2.0.min.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.4.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.ajax_queue.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.autocomplete.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.bgiframe.min.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.color.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.form-3.51.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.jkey-1.1.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.metadata.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.tablesorter-2.20.1.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.staticrow.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.validate-1.13.1-min.js" language="javascript"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" language="javascript"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.js" language="javascript"></script>
		<script type="text/javascript" src="js/common.js" language="javascript"></script>
		<script type="text/javascript" src="js/date.js" language="javascript"></script>
		<script type="text/javascript" src="js/imgpreview.full.jquery.js" language="javascript"></script>
		<script type="text/javascript" src="js/jasny-bootstrap.js" language="javascript"></script>
		<script type="text/javascript" src="js/manage_tables.js" language="javascript"></script>
		<script type="text/javascript" src="js/nominatim.autocomplete.js" language="javascript"></script>
		<script type="text/javascript" src="js/phpjsdate.js" language="javascript"></script>
		<script type="text/javascript" src="js/swfobject.js" language="javascript"></script>

		<!-- end js template tags -->
	<?php else : ?>
		<!-- start minjs template tags -->
		<script type="text/javascript" src="dist/opensourcepos.min.js?rel=d2178e43ec" language="javascript"></script>
		<!-- end minjs template tags -->       
	<?php endif; ?>

	<script type="text/javascript">
		// live clock
	
		function clockTick() {  
			setInterval('updateClock();', 1000);  
		}

		// start the clock immediatly
		clockTick();

		var now = new Date(<?php echo time() * 1000 ?>);

		function updateClock() {
			now.setTime(now.getTime() + 1000);
			
			document.getElementById('liveclock').innerHTML = phpjsDate("<?php echo $this->config->item('dateformat').' '.$this->config->item('timeformat') ?>", now);
		}
	</script>
	<script src="assets/adminlte/js/app.min.js"></script>
	<style type="text/css">
		html {
			overflow: auto;
		}
	</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	<!-- Main Header -->
	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo site_url(); ?>" class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini"><img src="<?php echo base_url('assets/img/lp1.png');?>"/></span>
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg"><img src="<?php echo base_url('assets/img/lp2.png');?>"/></span>
		</a>
		
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
		  <!-- Sidebar toggle button-->
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
		  <!-- Navbar Right Menu -->
		  <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			  <!-- Messages: style can be found in dropdown.less-->
			  <li class="dropdown messages-menu">
				<!-- Menu toggle button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <i class="fa fa-envelope-o"></i>
				  <span class="label label-success">4</span>
				</a>
				<ul class="dropdown-menu">
				  <li class="header">You have 4 messages</li>
				  <li>
					<!-- inner menu: contains the messages -->
					<ul class="menu">
					  <li><!-- start message -->
						<a href="#">
						  <!-- Message title and timestamp -->
						  <h4>
							Support Team
							<small><i class="fa fa-clock-o"></i> 5 mins</small>
						  </h4>
						  <!-- The message -->
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					  <!-- end message -->
					</ul>
					<!-- /.menu -->
				  </li>
				  <li class="footer"><a href="#">See All Messages</a></li>
				</ul>
			  </li>
			  <!-- /.messages-menu -->

			  <!-- Notifications Menu -->
			  <li class="dropdown notifications-menu">
				<!-- Menu toggle button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <i class="fa fa-bell-o"></i>
				  <span class="label label-warning">10</span>
				</a>
				<ul class="dropdown-menu">
				  <li class="header">You have 10 notifications</li>
				  <li>
					<!-- Inner Menu: contains the notifications -->
					<ul class="menu">
					  <li><!-- start notification -->
						<a href="#">
						  <i class="fa fa-users text-aqua"></i> 5 new members joined today
						</a>
					  </li>
					  <!-- end notification -->
					</ul>
				  </li>
				  <li class="footer"><a href="#">View all</a></li>
				</ul>
			  </li>
			  <!-- Tasks Menu -->
			  <li class="dropdown tasks-menu">
				<!-- Menu Toggle Button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <i class="fa fa-flag-o"></i>
				  <span class="label label-danger">9</span>
				</a>
				<ul class="dropdown-menu">
				  <li class="header">You have 9 tasks</li>
				  <li>
					<!-- Inner menu: contains the tasks -->
					<ul class="menu">
					  <li><!-- Task item -->
						<a href="#">
						  <!-- Task title and progress text -->
						  <h3>
							Design some buttons
							<small class="pull-right">20%</small>
						  </h3>
						  <!-- The progress bar -->
						  <div class="progress xs">
							<!-- Change the css width attribute to simulate progress -->
							<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							  <span class="sr-only">20% Complete</span>
							</div>
						  </div>
						</a>
					  </li>
					  <!-- end task item -->
					</ul>
				  </li>
				  <li class="footer">
					<a href="#">View all tasks</a>
				  </li>
				</ul>
			  </li>
			  <!-- real time clock -->
			  <li>
				<a href="javascript:void(0)" id="liveclock"><?php echo date($this->config->item('dateformat') . ' ' . $this->config->item('timeformat'));?></a>
			  </li>
			  <li>
				<a href="<?php echo site_url('home/logout');?>" alt="<?php echo $this->lang->line("common_logout");?>" title="<?php echo $this->lang->line("common_logout");?>"><i class="fa fa-sign-out"></i></a>
			  </li>
			  <!-- Control Sidebar Toggle Button -->
			  <!--<li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-comments"></i></a>
			  </li>-->
			</ul>
		  </div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar no-print">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
				  <img src="<?php echo base_url('uploads/company_logo.png');?>" class="img-circle" alt="">
				</div>
				<div class="pull-left info">
				  <p><?php echo $this->config->item('company');?></p>
				  <!-- Status -->
				  <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> <?php echo $user_info->first_name." ".$user_info->last_name?></a>
				</div>
			</div>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<!-- Optionally, you can add icons to the links -->
				<?php foreach($allowed_modules->result() as $module): 
				$array_menu = array('users','tag','tags','briefcase','bar-chart','archive','shopping-bag','user','gift','cog');
				switch($module->module_id){
					case "customers":$menu_icon="fa-users";break;
					case "items":$menu_icon="fa-tag";break;
					case "item_kits":$menu_icon="fa-tags";break;
					case "suppliers":$menu_icon="fa-briefcase";break;
					case "reports":$menu_icon="fa-bar-chart";break;
					case "receivings":$menu_icon="fa-archive";break;
					case "sales":$menu_icon="fa-shopping-basket";break;
					case "employees":$menu_icon="fa-user";break;
					case "giftcards":$menu_icon="fa-gift";break;
					case "config":$menu_icon="fa-cog";break;
					default:$menu_icon="fa-link";
				}
				?>
				<li class="<?php echo $module->module_id == $this->uri->segment(1)? 'active': ''; ?>">
					<a href="<?php echo site_url("$module->module_id");?>" title="<?php echo $this->lang->line("module_".$module->module_id) ?>" class="menu-icon">
						<i class="fa <?php echo $menu_icon;?>"></i> 
						<span><?php echo $this->lang->line("module_".$module->module_id) ?></span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		<!-- /.sidebar-menu -->
		</section>
	<!-- /.sidebar -->
	</aside>
	<div class="content-wrapper">
		<!-- <section class="content-header">
		  <h1>
			Dashboard
			<small>Control panel</small>
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		  </ol>
		</section> -->
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row"> 