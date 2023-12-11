<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('public/') ?>images/favicon.ico">

	<!-- plugin css -->
	<link href="<?= base_url('public/') ?>libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
		rel="stylesheet" type="text/css" />

	<!-- preloader css -->
	<link rel="stylesheet" href="<?= base_url('public/') ?>css/preloader.min.css" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="<?= base_url('public/') ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
		type="text/css" />
	<!-- Icons Css -->
	<link href="<?= base_url('public/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?= base_url('public/') ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

	<?php if(isset($dataTables)) { ?>
	<link href="<?= base_url('public/') ?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url('public/') ?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
		rel="stylesheet" type="text/css" />

	<!-- Responsive datatable examples -->
	<link href="<?= base_url('public/') ?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
		rel="stylesheet" type="text/css" />

	<?php } ?>
</head>

<body data-topbar="dark">

	<div id="layout-wrapper">


		<?php $this->load->view('partials/topbar'); ?>


		<?php $this->load->view('partials/sidebar'); ?>
