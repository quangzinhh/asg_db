</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar-->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links-->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a class="nav-link" href="index.php?page=admin&controller=layouts&action=index">Home</a>
				</li>
			</ul>
			<!-- Right navbar links-->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search-->
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a class="nav-link" href="index.php?page=admin&controller=login&action=logout">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar-->
		<!-- Main Sidebar Container-->
		<aside class="main-sidebar sidebar-primary-primary elevation-4">


			<a href="index.php?page=admin&controller=layouts&action=index" class="brand-link" >
				<img class="brand-image" src="https://lspmks.co.id/wp-content/uploads/2020/10/traveloka_logo.png" alt="dulichviet Logo" style="width: 200px" >
				<span class="brand-text font-weight-light" style="margin-left: 5px;"><strong></strong></span>
			</a>
			<!-- Sidebar-->
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<?php
					echo ('
							<div class="info" style="margin:auto;">
								<a href="#" class="d-block style="color:#000000;">
									Xin chào 
						'
						. $_SESSION["user"] .
						' </a>
							</div>
						');

					?>
					
				</div>

				<!-- Sidebar Menu-->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!--Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
						<?php
							if($_SESSION["user"] == "admin"){
								echo '
									<li class="nav-item">
										<a class="nav-link" href="#">
											<i class="nav-icon fas fa-plane"> </i>
											<p>Địa điểm du lịch</p>
										</a>
									</li>
								';
							}
						
						?>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="nav-icon fas fa-comments"></i>
								<p>Nhà cung cấp dịch vụ</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="nav-icon fas fa-users-cog"></i>
								<p>Liên hệ khách hàng</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=products&action=index">
								<i class="nav-icon fas fa-clipboard"></i>
								<p>Quản lý Tour</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="nav-icon fa fa-user" aria-hidden="true"></i>
								<p>Quản lý nhân viên</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=company&action=index">
								<i class="nav-icon fa fa-building" aria-hidden="true"></i>
								<p>Danh sách chi nhánh</p>
							</a>
						</li>
					</ul>
					<!-- Content Wrapper. Contains page content-->
				</nav>
			</div>
		</aside>