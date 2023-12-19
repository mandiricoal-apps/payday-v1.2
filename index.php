<!DOCTYPE html>
<html lang="en">
<head>
	<title>PayDay v1.2</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="manifest" href="assets/js/web.webmanifest">
	<link rel="apple-touch-icon" href="assets/images/favicon.png">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
	<link rel="stylesheet" href="assets/css/vertical-layout-light/loader.css">
	<!-- Animate -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!-- Swall2 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<section class="ml-4 mr-4">
							<center><img width="180" src="assets/images/logos.png" alt="" class="img-responsive animate__animated animate__pulse" /></center><br>
							<form id="sign_in" method="POST" action="view/home.php?v=dashboard" class="animate__animated animate__pulse" onsubmit="return validateForm()">
								<div class="mt-3">
									<input type="text" name="userid" class="form-control form-control-sm" id="userid" placeholder="User ID">
								</div>
								<div class="mt-3">
									<input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Password">
								</div>
								<div class="mt-3">
									<div class="my-2 d-flex justify-content-between align-items-center">
										<div class="form-group pt-2 custom-control custom-checkbox">
											&nbsp;<input type="checkbox" class="custom-control-input" id="showProfile" onclick="showPass()">
											<label class="custom-control-label" for="showProfile" style="color: #282f3a;font-size: 15px;">Show password</label>
										</div>
										<div class="form-group">
											<a href="#" class="auth-link text-black" style="font-size: 15px;">Forgot password?&nbsp;</a>
										</div>
									</div>
									<button type="submit" name="submit" id="submit" class="btn btn-info btn-block"><b>SIGN IN</b></button>
								</div>
							</form>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<div class="floating-container" >
		<div class="floating-button"><img src='assets/images/icon/outline/import.svg'/></div>
		<!-- <div class="element-container">
			<a href="google.com"> 
				<span class="float-element tooltip-left"><i class="material-icons">phone</i>
				</span>
			</a>
			<span class="float-element">
				<i class="material-icons">email
				</i>
			</span>
			<span class="float-element">
				<i class="material-icons">chat</i>
			</span>
		</div> -->
	</div>

	<!-- Modal -->
	<div class="modal" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog" role="document">
			<div class="modal-content round animate__animated animate__flipInY">
				<img src="assets/images/update.jpg" width="100%">
				<div class="modal-body">
					<center>
						<p>UPDATE VERSION</p><br><h4>PayDay v1.2</h4><br>
						<p>Hi! There, We improves performance, features,<br>User Interface, and better user experience</p>
					</center><br><br>
					<a href="#" class="btn btn-info mr-2 form-control round">Download</a><br><br>
					<button data-dismiss="modal" class="btn mr-2 form-control round">Already updated ? Skip</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		//Form Validation
		function validateForm() {
			var userid = document.getElementById("userid").value;
			var password = document.getElementById("password").value;

			if (userid === "" || password === "") {
				var errorMessage = "";
				if (userid === "") {
					errorMessage = "User ID is required!";
				} else {
					errorMessage = "Password is required!";
				}

				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: errorMessage,
					timer: 1200,
					showConfirmButton: false,
					showClass: {
						popup: `
						animate__animated
						animate__zoomInDown
						animate__faster
						`
					},
					hideClass: {
						popup: `
						animate__animated
						animate__bounceOut
						animate__faster
						`
					}
				});

				return false;
			}

			return true;
		}

		//Toast Alert
		document.getElementById('toast-success').addEventListener('click', function () {
			Swal.fire({
				icon: 'success',
				title: 'Success',
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 2000

			});
		});
		document.getElementById('toast-error').addEventListener('click', function () {
			Swal.fire({
				icon: 'error',
				title: 'Failed',
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 2000
			});
		});

		//Modal Update
		$(window).on('load', function() {
			$('#update').modal('show');
		});

		//Password Show
		function showPass() {
			var x = document.getElementById("password");
			x.type = (x.type === "password") ? "text" : "password";
		}
	</script>


	<style>
		.container-fluid.page-body-wrapper.full-page-wrapper .content-wrapper {
			background-image: url('assets/images/bg.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}
		#userid,
		#password,
		.btn,
		.form-check-input {
			border-radius: 18px;
		}

		@import url("https://fonts.googleapis.com/css?family=Roboto");
		@-webkit-keyframes come-in {
			0% {
				-webkit-transform: translatey(100px);
				transform: translatey(100px);
				opacity: 0;
			}
			30% {
				-webkit-transform: translateX(-50px) scale(0.4);
				transform: translateX(-50px) scale(0.4);
			}
			70% {
				-webkit-transform: translateX(0px) scale(1.2);
				transform: translateX(0px) scale(1.2);
			}
			100% {
				-webkit-transform: translatey(0px) scale(1);
				transform: translatey(0px) scale(1);
				opacity: 1;
			}
		}
		@keyframes come-in {
			0% {
				-webkit-transform: translatey(100px);
				transform: translatey(100px);
				opacity: 0;
			}
			30% {
				-webkit-transform: translateX(-50px) scale(0.4);
				transform: translateX(-50px) scale(0.4);
			}
			70% {
				-webkit-transform: translateX(0px) scale(1.2);
				transform: translateX(0px) scale(1.2);
			}
			100% {
				-webkit-transform: translatey(0px) scale(1);
				transform: translatey(0px) scale(1);
				opacity: 1;
			}
		}
		* {
			margin: 0;
			padding: 0;
		}

		html, body {
			background: #eaedf2;
			font-family: 'Roboto', sans-serif;
		}

		.floating-container {
			position: fixed;
			width: 100px;
			height: 100px;
			bottom: 0;
			right: 0;
			margin: 35px 25px;
		}
		.floating-container:hover {
			height: 300px;
		}
		.floating-container:hover .floating-button {
			box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
			-webkit-transform: translatey(5px);
			transform: translatey(5px);
			-webkit-transition: all 0.3s;
			transition: all 0.3s;
		}
		.floating-container:hover .element-container .float-element:nth-child(1) {
			-webkit-animation: come-in 0.4s forwards 0.2s;
			animation: come-in 0.4s forwards 0.2s;
		}
		.floating-container:hover .element-container .float-element:nth-child(2) {
			-webkit-animation: come-in 0.4s forwards 0.4s;
			animation: come-in 0.4s forwards 0.4s;
		}
		.floating-container:hover .element-container .float-element:nth-child(3) {
			-webkit-animation: come-in 0.4s forwards 0.6s;
			animation: come-in 0.4s forwards 0.6s;
		}
		.floating-container .floating-button {
			position: absolute;
			width: 65px;
			height: 65px;
			background: #2cb3f0;
			bottom: 0;
			border-radius: 50%;
			left: 0;
			right: 0;
			margin: auto;
			color: white;
			line-height: 65px;
			text-align: center;
			font-size: 23px;
			z-index: 100;
			box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
			cursor: pointer;
			-webkit-transition: all 0.3s;
			transition: all 0.3s;
		}
		.floating-container .float-element {
			position: relative;
			display: block;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			margin: 15px auto;
			color: white;
			font-weight: 500;
			text-align: center;
			line-height: 50px;
			z-index: 0;
			opacity: 0;
			-webkit-transform: translateY(100px);
			transform: translateY(100px);
		}
		.floating-container .float-element .material-icons {
			vertical-align: middle;
			font-size: 16px;
		}
		.floating-container .float-element:nth-child(1) {
			background: #42A5F5;
			box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
		}
		.floating-container .float-element:nth-child(2) {
			background: #4CAF50;
			box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
		}
		.floating-container .float-element:nth-child(3) {
			background: #FF9800;
			box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
		}
	</style>

	<!-- Script -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>
