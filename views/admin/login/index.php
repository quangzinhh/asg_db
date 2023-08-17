<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TRAVELOKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="public/img/layouts/0_travelkola_logo.png" rel="icon">

</style>
</head>
<body>
<?php
  include_once('views/main/navbar.php');
?>
<section class="background-radial-gradient overflow-hidden">

<div class="container-fluid  px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card my-5" style="background-color: #E0FEFE">
          <div class="card-body px-4 py-5 px-md-5">
				<form action="index.php?page=admin&controller=login&action=check" method="post">
				<div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Admin account <span style="color: red">*</span></label>
                    <input type="text" name="username" required id="form3Example3" class="form-control" />
                </div>
				<div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password <span style="color: red">*</span></label>
                <input type="password" name="password" required id="form3Example4" class="form-control" />
              </div>
			  <button type="submit" value="Login" class="btn btn-primary btn-block mb-4">
                Log in
              </button>
			  <div class="text-center">
                <a href="index.php?page=main&controller=login&action=index">Back to login as user</a>
              </div>
				</form>
				
			</div>
		</div>
	</div>
	<div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 70%)">
          Welcome back <br />
          <span style="color: hsl(218, 81%, 75%)">Login as administrator</span>
        </h1>
      </div>
    </div>
  </div>
</section>

<?php
  include_once('views/main/footer.php');
?>




