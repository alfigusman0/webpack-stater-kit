<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Title</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Icon -->

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">
	<?php $this->load->view($css); ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/skins/all-skins.min.css') ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue-light sidebar-mini">

	<div class="wrapper">
		<!-- Main Header -->
		<header class="main-header">
			<!-- Logo -->
			<a href="<?= base_url('Welcome'); ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>WEB</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>WEB</b>APP</span>
			</a>
			<!-- Header Navbar -->
			<?php $this->load->view('layout/navbar'); ?>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view('layout/sidebar'); ?>

		<!-- Content Wrapper. Contains page content -->
		<?php $this->load->view($content); ?>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<?php $this->load->view('layout/footer'); ?>
	</div>
	<!-- ./wrapper -->

	<!-- Modal -->
	<?php $this->load->view($modal); ?>

	<!-- Javascript -->
	<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<?php $this->load->view($javascript); ?>
	<script src="<?= base_url('assets/js/jquery.slimscroll.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/fastclick.js'); ?>"></script>
	<script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>
</body>

</html>