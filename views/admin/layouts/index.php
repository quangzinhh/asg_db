<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('views/admin/header.php'); ?>


<?php
require_once('views/admin/content_layouts.php'); ?>

<!-- Service Start -->
<div class="content-wrapper">
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
					<h1 class="mb-0">Chào mừng bạn đến trang của quản trị viên</h1>
				</div>
				<div class="row g-5">
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-user-graduate text-white"></i>
							</div>
							<h4 class="mb-3">Danh sách Admin</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=admin&action=index">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-comments text-white"></i>
							</div>
							<h4 class="mb-3">Bình luận đánh giá</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=comments&action=index">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-users-cog text-white"></i>
							</div>
							<h4 class="mb-3">Liên hệ khách hàng</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=user&action=index">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-cube text-white"></i>
							</div>
							<h4 class="mb-3">Quản lý sản phẩm</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=products&action=index"">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-file text-white"></i>
							</div>
							<h4 class="mb-3">Quản lý tin tức</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=news&action=index">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
						<div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
							<div class="service-icon">
								<i class="fas fa-newspaper text-white"></i>
							</div>
							<h4 class="mb-3">Danh sách chi nhánh</h4>
							<a class="btn btn-lg btn-primary rounded" href="index.php?page=admin&controller=company&action=index">
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->
	</div>
</div>

<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
</body>

</html>