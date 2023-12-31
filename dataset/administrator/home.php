<!DOCTYPE html>
<html lang="en">

<head>
	<title>PayDay v1.2</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Datatables -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
	<link rel="stylesheet" href="../assets/css/vertical-layout-light/loader.css">
	<!-- Animate -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Swall2 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body onload="loader();">
	<div class="container-scroller">

		<!-- NAVBAR -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row mcolor">
			<div style="background: #99d4f6;" class="navbar-brand-wrapper d-flex align-items-center mcolor">
				<a class="navbar-brand brand-logo ml-4 animate__animated animate__jello" href="home.php?v=dashboard"><img src="../assets/images/logo_border.png">
				</a>
				<a class="navbar-brand brand-logo-mini ml-2 animate__animated animate__jello" href="home.php?v=dashboard"><img src="../assets/images/logo-mini.png">
				</a>
			</div>
			<div style="background: #99d4f6;" class="navbar-menu-wrapper d-flex align-items-center justify-content-end mcolor">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"></button>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
							<img src="../assets/images/icon/linear/notification.svg" alt="profile" class="" />
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
							<p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-success">
										<i class="ti-info-alt mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal">Application Error</h6>
									<p class="font-weight-light small-text mb-0 text-muted">
										Just now
									</p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-2 ml-1">
						<a class="nav-link count-indicator dropdown-toggle" id="logout"  onclick="logout()" href="" data-toggle="dropdown">
							<img src="../assets/images/icon/linear/logout.svg" alt="profile" class="" />
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- SIDEBAR -->
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas animate__animated animate__fadeInLeft" id="hidebar_sidebar">
				<ul class="nav">
					<li class="nav-item">
						<img src="https://img.freepik.com/premium-vector/young-smiling-man-adam-avatar-3d-vector-people-character-illustration-cartoon-minimal-style_365941-687.jpg" width="120px">
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=dashboard'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/chart-21.svg" class=""></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="">
						<span class="nav-link menu-title">User Management</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=users'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/user.svg" class=""></i>
							<span class="menu-title">Data User</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=admins'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/user.svg" class=""></i>
							<span class="menu-title">Data Admin</span>
						</a>
					</li>
					<li class="">
						<span class="nav-link menu-title">Master Data</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=roles'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document.svg" class=""></i>
							<span class="menu-title">Document Approval</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=info'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
							<span class="menu-title">Information Update</span>
						</a>
					</li>
				</ul>
			</nav>

			<!-- MAIN -->
			<div class="loader-info" id="loaderhome" style="margin: auto;"></div>
			<div class="main-panel p-3" style="display:none;" id="myhome">
				<?php include 'routes.php'; ?>

				<!-- MODAL PROFIL -->
				<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content round">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<b>Profile</b>
								<hr>
								<div class="alert alert-info alert-dismissible fade show round" role="alert">
									<strong>Perhatian !<br></strong> Data yang ditampilkan sesuai dengan data sistem SAP, jika ada ketidaksesuaian data silahkan hubungi tim HR.
								</div>
								<form method="POST" action="#" enctype="multipart/form-data" class="mb-3">
									<div class="form-group">
										<label >Your Password</label>
										<input name="password" type="password" id="passProfile" class="form-control round" placeholder="your password" required>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox mb-3">
											&emsp;<input type="checkbox" class="custom-control-input" id="showProfile" onclick="showPassProfile()">
											<label class="custom-control-label" for="showProfile" style="color: #282f3a;">Show Password</label>
										</div>
									</div>
									<button name="submit" type="submit" id="submit_password" class="btn btn-success mr-2 form-control round">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL PAYSLIP -->
				<div class="modal fade" id="payslip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content round">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<b>Payslip</b>
								<hr>
								<div class="alert alert-info alert-dismissible fade show round" role="alert">
									<strong>Perhatian !<BR></strong> Data yang ditampilkan sesuai dengan data sistem SAP, jika ada ketidaksesuaian data silahkan hubungi tim HR.
								</div>
								<form method="POST" action="#" enctype="multipart/form-data" class="mb-3">
									<div class="form-group">
										<label for="exampleInputUsername1">Periode</label>
										<input name="periode" type="month" class="form-control round" placeholder="your password" value="<?= date('Y-m') ?>" required>
									</div>
									<div class="form-group">
										<label >Your Password</label>
										<input name="password" type="password" id="passPayslip" class="form-control round" placeholder="your password" required>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox mb-3">
											&emsp;<input type="checkbox" class="custom-control-input" id="showPayslip" onclick="showPassPayslip()">
											<label class="custom-control-label" for="showPayslip" style="color: #282f3a;">Show Password</label>
										</div>
									</div>
									<button name="submits" type="submit" id="submit_passwords" class="btn btn-success mr-2 form-control round">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Custom Style -->
	<style>
		@media (max-width: 500px) {
			#hidebar {
				display: none;
			}

			#hidebar_sidebar {
				display: none;
			}
		}

		@media (max-width: 991px) {
			.navbar .navbar-menu-wrapper .navbar-toggler:yes(.navbar-toggler-right) {
				display: block;
			}
		}

		.sidebar .nav:not(.sub-menu)>.nav-item:hover>.nav-link,
		.sidebar .nav:not(.sub-menu)>.nav-item:hover[aria-expanded="true"] {
			background: #99d4f6;
			color: #fff;
		}

		.invert {
			filter: invert(100%);
		}

		.navbar .mcolor {
			background: #99d4f6;
		}

		.white {
			background: #fff;
		}

		.mcard {
			background: rgb(153 212 246 / 22%);
		}

		.center {
			text-align: center;
		}

		.round {
			border-radius: 18px 18px 18px 18px;
		}

		.table td {
			padding: 0.1rem 1rem;
		}

		tr.hide-table-padding td {
			padding: 0;
		}

		.expand-button {
			position: relative;
		}

		.accordion-toggle .expand-button:after {
			position: absolute;
			left: .75rem;
			top: 50%;
			transform: translate(0, -50%);
			content: '-';
		}

		.accordion-toggle.collapsed .expand-button:after {
			content: '+';
		}

		.grey {
			background-color: #f5f7ff
		}

		.text-right {
			text-align: right
		}

		.table th,
		.jsgrid .jsgrid-table th,
		.table td,
		.jsgrid .jsgrid-table td {
			line-height: 2;
		}

		.table td {
			padding-top: 5px;
		}

		@media (min-width: 760px) {
			#mobile-show {
				display: none;
			}
		}

		@media (max-width: 760px) {
			#mobile-hide {
				display: none;
			}
		}
		.table td img, .jsgrid .jsgrid-table td img {
			width: 25px;
			height: 25px;
		}
	</style>

	<!-- Datatables -->
	<style>
		div.dt-button-collection {
			width: 400px;
		}

		div.dt-button-collection button.dt-button {
			display: inline-block;
			width: 30%;
		}

		div.dt-button-collection button.buttons-colvis {
			display: inline-block;
			width: 49%;
		}

		div.dt-button-collection h3 {
			margin-top: 3px;
			margin-bottom: 3px;
			font-weight: 100;
			border-bottom: 1px solid rgba(150, 150, 150, 0.5);
			font-size: 1em;
			padding: 0 1em;
		}

		div.dt-button-collection h3.not-top-heading {
			margin-top: 10px;
		}

		div.dt-buttons>.dt-button,
		div.dt-buttons>div.dt-button-split .dt-button {
			background: #fff;
		}

		div.dataTables_wrapper div.dataTables_length select {
			width: 80px;
			height: 35px;
			border: 1px solid #fff;
			display: inline-block;
		}
	</style>

	<!-- Switch -->
	<style>
		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch input { 
			opacity: 0;
			width: 0;
			height: 0;
		}

		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
			background-color: #2196F3;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
	</style>

	<script>
		//Logout Confirmation
		function logout() {
			Swal.fire({
				title: 'Sign Out',
				text: 'Are you sure you want to sign out?',
				showDenyButton: true,
				confirmButtonColor: '#FF4747',
				denyButtonColor: '#ced4da',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location = "../controller/logout.php";
				}
			})
		};

		//Password Show (Profile)
		function showPassProfile() {
			var x = document.getElementById("passProfile");
			x.type = (x.type === "password") ? "text" : "password";
		}

		//Password Show (Payslip)
		function showPassPayslip() {
			var x = document.getElementById("passPayslip");
			x.type = (x.type === "password") ? "text" : "password";
		}
	</script>

	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="../assets/js/loader.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js>"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
</body>

</html>