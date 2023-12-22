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
						<span class="nav-link menu-title">Roles Managemenet</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=users'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/user.svg" class=""></i>
							<span class="menu-title">User Roles</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=log'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-code.svg" class=""></i>
							<span class="menu-title">Log Activity</span>
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

	
	<div class="container stage">
		<div class="container">
			<div class="tabbar tab-style1">
				<ul class="flex-center">
					<li class="home active" data-where="home"><span class="material-icons-outlined">
						home
					</span></li>
					<li class="products" data-where="products"><span class="material-icons-outlined">
						shopping_bag
					</span></li>
					<li class="services" data-where="services"><span class="material-icons-outlined">
						plumbing
					</span></li>
					<li class="about" data-where="about"><span class="material-icons-outlined">
						business
					</span></li>
					<li class="help" data-where="help"><span class="material-icons-outlined">
						help_outline
					</span></li>
					<li class="follow"> </li>
				</ul>
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

	

<style>
	@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
	@import url("https://fonts.googleapis.com/icon?family=Material+Icons+Outlined");

	:root {
		--accent-color: #1fa8f5;
		--accent-color-fg: #fefefe;
		--backdrop-color: #89d4fe;
		--app-content-background-color: #c0d8ec;
		--inset-shadow: rgba(7, 43, 74, 0.3);
		--outset-shadow: rgba(223, 240, 255, 0.25);
		--clay-box-shadow: rgba(7, 43, 74, 0.3);
		--clay-background-color: #c0d8ec;
		--clay-fg-color: #444;
	}

	body {
		background-color: var(--backdrop-color);
		font-size: 10px;
		font-family: "Roboto", sans-serif;
	}

	.flex-center {
		display: flex;
		justify-content: space-around;
		align-items: center;
	}

	.container {
		padding: 1rem 1rem 1.5rem;
	}

	.stage {
		max-width: 400px;
		width: 400px;
		margin: 0 auto;
	}

	.home.active {
		color: var(--accent-color);
	}
	.home-style {
		--app-content-background-color: #c0d8ec;
	}

	.products.active {
		--outset-shadow: rgba(247, 167, 103, 0.45);
		--inset-shadow: rgba(149, 62, 8, 0.45);
		--clay-box-shadow: rgba(211, 69, 20, 0.4);
		--clay-background-color: #d34514;
		--clay-fg-color: #f1f2f3;
		color: #690c0c;
	}
	.products-style {
		--app-content-background-color: #d36e5a;
	}

	.services.active {
		--outset-shadow: rgba(255, 159, 40, 0.45);
		--inset-shadow: rgba(88, 54, 13, 0.45);
		--clay-box-shadow: rgba(88, 54, 13, 0.4);
		--clay-background-color: #ed9426;
		--clay-fg-color: #f1f2f3;
		color: #cf5c0f;
	}
	.services-style {
		--app-content-background-color: #ed9426;
	}

	.about.active {
		--outset-shadow: rgba(93, 255, 85, 0.45);
		--inset-shadow: rgba(28, 78, 26, 0.45);
		--clay-box-shadow: rgba(28, 78, 26, 0.4);
		--clay-background-color: #4dd146;
		--clay-fg-color: #f1f2f3;
		color: #4dd146;
	}
	.about-style {
		--app-content-background-color: #4dd146;
	}

	.help.active {
		--outset-shadow: rgba(230, 230, 230, 0.45);
		--inset-shadow: rgba(81, 81, 81, 0.45);
		--clay-box-shadow: rgba(81, 81, 81, 0.4);
		--clay-background-color: #a3a3a3;
		--clay-fg-color: #f1f2f3;
		color: #783896;
	}
	.help-style {
		--app-content-background-color: #a3a3a3;
	}

	.tabbar {
		background-color: var(--app-content-background-color);
		border-bottom-left-radius: 1rem;
		border-bottom-right-radius: 1rem;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		height: 120px;
		display: flex;
		flex-direction: column;
		box-sizing: content-box;
		position: relative;
		overflow: hidden;
		transition: background-color 0.4s;
	}
	.tabbar ul,
	.tabbar li {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
	.tabbar ul {
		position: absolute;
		bottom: 0;
		width: 100%;
		background-color: #f9f8fa;
		align-self: flex-end;
		justify-content: center;
		height: 50px;
	}
	.tabbar li {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 1rem;
		margin-right: 5px;
		transition: all 0.4s;
		background-color: #f9f8fa;
		width: 60px;
		height: 60px;
		position: relative;
		color: #888;
		cursor: pointer;
	}
	.tabbar li:last-child {
		margin-right: 0;
	}

	.tab-style1 ul {
		justify-content: center;
	}
	.tab-style1 li {
		display: flex;
		justify-content: center;
		align-items: center;
		top: 1px;
		left: 0;
		width: 60px;
		height: 50px;
		transition: top 0.2s ease-out, width 0.4s, border-radius 0.4s, box-shadow 0.4s;
	}
	.tab-style1 li.follow {
		position: absolute;
		border-radius: 100%;
		content: " ";
		width: 60px;
		height: 60px;
		border: 10px solid var(--app-content-background-color);
		background-color: var(--app-content-background-color);
		top: -3rem;
		transition: left 0.4s ease-in, background-color 0.4s, border-color 0.4s;
	}
	.tab-style1 li.follow:before, .tab-style1 li.follow:after {
		content: " ";
		position: absolute;
		top: 27px;
		right: -27px;
		border-top: 11px solid var(--app-content-background-color);
		background-color: #f9f8fa;
		width: 20px;
		height: 20px;
		box-sizing: border-box;
		transition: border-color 0.4s;
	}
	.tab-style1 li.follow::after {
		border-top-left-radius: 100%;
	}
	.tab-style1 li.follow:before {
		left: -27px;
		right: unset;
		border-top-right-radius: 100%;
	}
	.tab-style1 li:nth-child(1).active ~ .follow {
		left: 12px;
	}
	.tab-style1 li:nth-child(2).active ~ .follow {
		left: 75px;
	}
	.tab-style1 li:nth-child(3).active ~ .follow {
		left: 140px;
	}
	.tab-style1 li:nth-child(4).active ~ .follow {
		left: 205px;
	}
	.tab-style1 li:nth-child(5).active ~ .follow {
		left: 270px;
	}
	.tab-style1 .active {
		z-index: 100;
		width: 60px;
		height: 60px;
		top: -2rem;
		border-radius: 100%;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	.tab-style2 ul {
		justify-content: center;
	}
	.tab-style2 li {
		border-top-left-radius: 100%;
		border-top-right-radius: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		top: 1px;
		left: 0;
		width: 60px;
		height: 50px;
	}
	.tab-style2 .active {
		width: 60px;
		height: 60px;
		top: -1rem;
	}
	.tab-style2 .active span {
		font-size: 2rem;
	}
	.tab-style2 .active:before, .tab-style2 .active:after {
		position: absolute;
		content: " ";
		width: 13px;
		height: 13px;
		border-bottom: 4px solid #f9f8fa;
		top: 8px;
	}
	.tab-style2 .active:before {
		border-bottom-right-radius: 100%;
		left: -7px;
	}
	.tab-style2 .active:after {
		border-bottom-left-radius: 100%;
		right: -7px;
	}

	.tab-style3 li {
		top: -8px;
		width: 60px;
		height: 35px;
		background-color: transparent;
		padding-top: 3px;
	}
	.tab-style3 li.follow {
		position: absolute;
		top: 0;
		display: flex;
		border-top: 3px solid #333;
		width: 60px;
		height: 1px;
		transition: all 0.3s ease-out;
	}
	.tab-style3 li:nth-child(1).active ~ .follow {
		left: 20px;
		z-index: 20;
	}
	.tab-style3 li:nth-child(2).active ~ .follow {
		left: 88px;
		z-index: 20;
	}
	.tab-style3 li:nth-child(3).active ~ .follow {
		left: 149px;
		z-index: 20;
	}
	.tab-style3 li:nth-child(4).active ~ .follow {
		left: 216px;
		z-index: 20;
	}
	.tab-style3 li:nth-child(5).active ~ .follow {
		left: 283px;
		z-index: 20;
	}

	.tab-style4 li {
		width: 60px;
		height: 40px;
		flex-direction: column;
		overflow: hidden;
	}
	.tab-style4 li span {
		position: relative;
		top: 3px;
		transition: top 0.4s ease-out, font-size 0.2s ease-out;
		text-shadow: inset 2px 2px 4px var(--clay-box-shadow);
	}
	.tab-style4 li:after {
		width: 100%;
		height: 10px;
		text-transform: uppercase;
		text-align: center;
		font-size: 8px;
		font-weight: bold;
		position: relative;
		bottom: -30px;
		opacity: 0;
		transition: bottom 0.2s ease-out, opacity 0.4s ease-out;
	}
	.tab-style4 li.active:after {
		opacity: 1;
		bottom: 2px;
		text-shadow: inset 2px 2px 8px var(--clay-box-shadow);
	}
	.tab-style4 li:nth-child(1):after {
		content: "home";
	}
	.tab-style4 li:nth-child(2):after {
		content: "products";
	}
	.tab-style4 li:nth-child(3):after {
		content: "services";
	}
	.tab-style4 li:nth-child(4):after {
		content: "company";
	}
	.tab-style4 li:nth-child(5):after {
		content: "help";
	}
	.tab-style4 .active span {
		font-size: 1.1rem;
		top: -4px;
	}

	.tab-style5 ul {
		justify-content: center;
	}
	.tab-style5 li {
		display: flex;
		justify-content: center;
		align-items: center;
		top: 1px;
		left: 0;
		width: 60px;
		height: 50px;
		transition: top 0.4s ease-out, border-radius 0.4s ease-out, box-shadow 0.4s ease-out;
	}
	.tab-style5 .active {
		width: 60px;
		height: 60px;
		border-radius: 100%;
		top: -1rem;
		background-color: var(--clay-background-color);
		box-shadow: 1px 2px 4px 0 var(--clay-box-shadow), 2px 4px 8px 0 var(--clay-box-shadow), inset 2px 2px 8px var(--outset-shadow), inset -2px -2px 8px var(--inset-shadow);
		color: var(--clay-fg-color);
	}
	.tab-style5 .active span {
		font-size: 2rem;
	}
</style>

<script>
	const uls = document.querySelectorAll("ul");

	uls.forEach((ul) => {
		const resetClass = ul.parentNode.getAttribute("class");
		const lis = ul.querySelectorAll("li");

		lis.forEach((li) => {
			li.addEventListener("click", (e) => {
				e.preventDefault();
				e.stopPropagation();
				const target = e.currentTarget;

				if (
					target.classList.contains("active") ||
					target.classList.contains("follow")
					) {
					return;
			}

			ul.parentNode.setAttribute(
				"class",
				`${resetClass} ${target.getAttribute("data-where")}-style`
				);

			lis.forEach((item) => clearClass(item, "active"));

			setClass(target, "active");
		});
		});
	});

	function clearClass(node, className) {
		node.classList.remove(className);
	}

	function setClass(node, className) {
		node.classList.add(className);
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