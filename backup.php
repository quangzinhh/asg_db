<?php
  include_once('views/main/navbar.php');
?>
<section class="background-radial-gradient overflow-hidden">
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

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 ">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Choose Bosch <br />
          <span style="color: hsl(218, 81%, 75%)">Choose your success</span>
        </h1>
      </div>
        
      <div class="col-lg-6 mb-5 mb-lg-0 my-5 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="index.php?page=main&controller=login&action=index">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" required id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Username</label>
                </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" required id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <?php

					if (isset($err))
					{
						echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
						unset($err);
					}
					?>

              <!-- Submit button -->
              <button type="submit" value="Login" class="btn btn-primary btn-block mb-4">
                Log in
              </button>
            </form>
            <!-- Register buttons -->
            <div class="text-center">
                <p style="display: inline-block;">Don't have account yet?</p> <a href="index.php?page=main&controller=register&action=index">Sign up now</a>
              </div>
              <!-- Admin login button -->
              <div class="text-center">
                <a href="index.php?page=admin&controller=login&action=index">Login as Admin</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once('views/main/footer.php');
?>