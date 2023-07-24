<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BOSCH COMPANY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="https://www.logolynx.com/images/logolynx/94/94174906fca1b19e84305fa6f5160ddb.png" rel="icon">

   
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
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

        <div class="card bg-glass my-5">
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
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
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




