<!DOCTYPE html>
	<html>
	<head>
		<title>{{ $hlmn }}</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/fontAwesome.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="icon" type="icon" href="img/gurita.png">
		<link rel="stylesheet" type="text/css" href="css/w3school.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
	</head>
	<body>



		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
			body {
				font-size: .875rem;
			}

			.feather {
				width: 16px;
				height: 16px;
				vertical-align: text-bottom;
			}

	/*
	 * Sidebar
	 */

	 .sidebar {
	 	position: fixed;
	 	top: 0;
	  /* rtl:raw:
	  right: 0;
	  */
	  bottom: 0;
	  /* rtl:remove */
	  left: 0;
	  z-index: 100; /* Behind the navbar */
	  padding: 48px 0 0; /* Height of navbar */
	  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
	}

	@media (max-width: 767.98px) {
		.sidebar {
			top: 5rem;
		}
	}

	.sidebar-sticky {
		position: relative;
		top: 0;
		height: calc(100vh - 48px);
		padding-top: .5rem;
		overflow-x: hidden;
		overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
	}

	.sidebar .nav-link {
		font-weight: 500;
		color: #333;
	}

	.sidebar .nav-link .feather {
		margin-right: 4px;
		color: #727272;
	}

	.sidebar .nav-link.active {
		color: #2470dc;
	}

	.sidebar .nav-link:hover .feather,
	.sidebar .nav-link.active .feather {
		color: inherit;
	}

	.sidebar-heading {
		font-size: .75rem;
		text-transform: uppercase;
	}

	/*
	 * Navbar
	 */

	 .navbar-brand {
	 	padding-top: .75rem;
	 	padding-bottom: .75rem;
	 	font-size: 1rem;
/*	 	background-color: rgba(0, 0, 0, .25);*/
	 	box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
	 }

	 .navbar .navbar-toggler {
	 	top: .25rem;
	 	right: 1rem;
	 }

	 .navbar .form-control {
	 	padding: .75rem 1rem;
	 	border-width: 0;
	 	border-radius: 0;
	 }

	 .form-control-dark {
	 	color: #fff;
	 	background-color: rgba(255, 255, 255, .1);
	 	border-color: rgba(255, 255, 255, .1);
	 }

	 .form-control-dark:focus {
	 	border-color: transparent;
	 	box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
	 }

	 pre {
	 	font-weight: bold;
	 }

	</style>

</head>
<body>

	<header class="navbar sticky-top flex-md-nowrap p-0 shadow" style="background: #000000">
		<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="letter-spacing: 0.5px;font-family: courier;font-weight: bold;color: red;font-size: 1.35rem;"><img src="img/gurita.png" height="40"> Skillfull</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
		</button>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" style="opacity: 0;">
		<div class="navbar-nav">
			<div class="nav-item text-nowrap">
				<a class="nav-link px-3"></a>
			</div>
		</div>
	</header>

	@include("komponen.navbar")
	@yield("dashboard")


	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		@yield("content")

		

	</main>
	
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>