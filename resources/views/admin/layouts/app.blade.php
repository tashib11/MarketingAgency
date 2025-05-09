<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IDSB-Global</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		/* Make sure content area scrolls if too long */
		.wrapper {
			min-height: 100vh;
			display: flex;
			flex-direction: column;
		}

		.content-wrapper {
			flex: 1;
			padding-bottom: 20px;
		}

		.chart-container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}

		.chart-container canvas {
			max-width: 70%;
			max-height: 70%;
		}

		.additional-info {
			font-size: 1.2em;
			padding-bottom: 20px;
			text-align: center;
		}
	</style>

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- AdminLTE -->
	<link rel="stylesheet" href="{{ asset('admin-assets/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin-assets/plugins/summernote/summernote.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('admin-assets/css/blog.css') }}">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<div class="navbar-nav pl-2"></div>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
						<img src="{{ asset('admin-assets/img/avatar5.png') }}" class='img-circle elevation-2' width="40" height="40" alt="">
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
						<h4 class="h4 mb-0"><strong>Admin</strong></h4>
						<div class="mb-3">info@idsb.com</div>
						<div class="mt-4">
							<a href="{{ url("/") }}" class="btn btn-danger">Home</a>
						</div>
						<div class="dropdown-divider"></div>
						<a href="{{ url("/logout") }}" class="dropdown-item text-danger">
							<i class="fas fa-sign-out-alt mr-2"></i> <span class="btn btn-danger">Logout</span>
						</a>
					</div>
				</li>
			</ul>
		</nav>

		<!-- Sidebar -->
		@include('admin.layouts.sidebar')

		<!-- Page Content -->
		<div class="content-wrapper">
			@yield('content')
		</div>

		<!-- Footer -->
		<footer class="bg-light text-center py-3 mt-auto">
			<strong>&copy; 2025 IDSB-Global. All rights reserved.</strong>
		</footer>
	</div>

	<!-- JS Scripts -->
	<script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/adminlte.min.js') }}"></script>
	<script src="{{ asset('admin-assets/plugins/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/demo.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	@yield('scripts')
	@yield('pie')
</body>
</html>
