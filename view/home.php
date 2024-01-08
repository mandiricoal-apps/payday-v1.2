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
			<div style="background: #99d4f6;" class="navbar-menu-wrapper d-flex align-items-center justify-content-end mcolor pr-2">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"></button>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
							<img src="../assets/images/icon/linear/notification.svg" class="" />
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
							<img src="../assets/images/icon/linear/logout.svg" class="" />
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- SIDEBAR -->
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas animate__animated animate__fadeInLeft" id="hidebar_sidebar">
				<ul class="nav">
					<style>
						.sidebar .nav .nav-item.active > .nav-link {
							background: #99d4f6;
							position: relative;
						}
					</style>
					<!-- <li class="nav-item ml-3">
						<img src="https://img.freepik.com/premium-vector/young-smiling-man-adam-avatar-3d-vector-people-character-illustration-cartoon-minimal-style_365941-687.jpg" width="120px">
					</li> -->
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=dashboard'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/chart-21.svg" class=""></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="">
						<span class="nav-link menu-title">Personal Information</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=profile'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/user.svg" class=""></i>
							<span class="menu-title">Profile</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" data-toggle="modal" data-target="#modalPayslip">
							<i class="menu-icon"><img src="../assets/images/icon/linear/dollar-circle.svg" class=""></i>
							<span class="menu-title">Payslip</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" onClick="window.location='home.php?v=attendance'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/calendar-2.svg" class=""></i>
							<span class="menu-title">Attendance</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=leave'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/airplane.svg" class=""></i>
							<span class="menu-title">Leave</span>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v='">
							<i class="menu-icon"><img src="../assets/images/icon/linear/health.svg" class=""></i>
							<span class="menu-title">Medical</span>
						</a>
					</li> --><br>

					<li class="">
						<hr>
						<span class="nav-link menu-title">Menu</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=dochistory'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
							<span class="menu-title">Document Approval <span style="color:red;">●</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=timesheet&act=add'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
							<span class="menu-title">Daily Timesheet</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=assesment&act=check'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
							<span class="menu-title">Self Assesment Covid</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=wfo&act=add'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
							<span class="menu-title">WFO</span>
						</a>
					</li><br>

					<li class="">
						<hr>
						<span class="nav-link menu-title">Menu Admin</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=mroles'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/user.svg" class=""></i>
							<span class="menu-title">Roles Management 
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=mdocument'">
								<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
								<span class="menu-title">Document Approval
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=minfo'">
									<i class="menu-icon"><img src="../assets/images/icon/linear/document-text.svg" class=""></i>
									<span class="menu-title">Information Update
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=mreport'">
										<i class="menu-icon"><img src="../assets/images/icon/linear/chart-1.svg" class=""></i>
										<span class="menu-title">Report 
										</a>
									</li>

					<!-- <li class="">
						<hr>
						<span class="nav-link menu-title">Account</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-expanded="false" aria-controls="ui-basic" href="#" onClick="window.location='home.php?v=setting'">
							<i class="menu-icon"><img src="../assets/images/icon/linear/setting.svg" class=""></i>
							<span class="menu-title">Setting</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" aria-expanded="false" aria-controls="ui-basic" id="logout" onclick="logout()" href="">
							<i class="menu-icon"><img src="../assets/images/icon/linear/logout.svg" class=""></i>
							<span class="menu-title">Sign Out</span>
						</a>
					</li> -->
				</ul>
			</nav>

			<!-- MAIN -->
			<div class="loader-info" id="loaderhome" style="margin: auto;"></div>
			<div class="main-panel p-3" style="display:none;" id="myhome">
				<?php include 'routes.php'; ?>

				<!-- MODAL PAYSLIP -->
				<div class="modal fade" id="modalPayslip" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-top" role="document">
						<div class="modal-content" style="border-radius: 15px;">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Payslip</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form method="post" action="home.php?v=payslip" id="formPayslip" class="needs-validation" novalidate>
								<div class="modal-body py-1">
									<div class="card border round mb-3" style="background-color: rgba(36, 138, 253, 0.2);">
										<div class="card-body">
											<div class="d-flex">
												<div class="p-2">
													<h4><b>Perhatian !</b></h4>
													<p class="card-text">Data yang ditampilkan sesuai dengan data sistem SAP, jika ada ketidaksesuaian data silahkan hubungi tim HR.</p>
												</div>
												<div class="ml-auto p-2">
													<h5><img src="../assets/images/icon/linear/info-circle.svg" alt="profile"></h5>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group my-1">
										<label for="nama">Period :</label>
										<input name="periode" type="month" class="form-control round" value="<?= date('Y-m') ?>" required>
										<small class="text-danger my-1" style="display: none;">Please fill out this field!</small>
									</div>
									<div class="form-group my-1">
										<label for="nama">Password :</label>
										<input type="password" class="form-control round" id="passProfile" name="password" placeholder="Password" required>
										<!-- <small class="text-danger my-1" style="display: none;">Please fill out this field!</small> -->
										<div class="custom-control custom-checkbox pt-2">
											&emsp;<input type="checkbox" class="custom-control-input" id="showProfile" onclick="showPassProfile()">
											<label class="custom-control-label" for="showProfile" style="color: #282f3a;">Show Password</label>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-basic border round w-25" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-sm btn-info round w-25">Submit</button>
								</div>
							</form>
							<!-- Script JavaScript untuk validasi form -->
							<script>
								document.getElementById("formPayslip").addEventListener("submit", function(event) {
									var form = event.target;
									var fields = form.querySelectorAll("input[required], textarea[required]");

									fields.forEach(function(field) {
										var small = field.nextElementSibling;
										if (!field.checkValidity()) {
											small.style.display = "block";
										} else {
											small.style.display = "none";
										}
									});
									if (form.checkValidity() === false) {
										event.preventDefault();
										event.stopPropagation();
									}
									form.classList.add('was-validated');
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.mandiricoal.co.id/" target="_blank">mandiricoal.co.id</a></span>
				<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i>Fueling the Bright Future</i></span>
			</div>
		</footer>
	</div>

	<!-- Custom Style -->
	<style>
		.btn.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .ajax-upload-dragdrop .fc button.ajax-file-upload, .fc .ajax-upload-dragdrop button.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc button.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper button.swal2-styled, .wizard > .actions a.btn-sm {
			font-size: 0.812rem;
			border-radius: 15px;
			height: auto;
		}
		@media (max-width: 500px) {
			#hidebar {
				display: none;
			}

			#hidebar_sidebar {
				display: none;
			}

			#sidebarx {
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