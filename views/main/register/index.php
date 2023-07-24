<?php
  include_once('views/main/navbar.php');
?>
<div style="height: 3em;"></div>
<section class="bg-image"
  style="background-image: radial-gradient(650px circle at 0% 0%,
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
          ">
		  <div style="height: 4em;"></div>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

				<form action="index.php?page=main&controller=register&action=submit" method="POST" class="login100-form validate-form">
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email <span style="color: red;">*</span></span>
						<input class="form-control form-control-lg" type="text" name="email">
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password <span style="color: red;">*</span></span>
						<input class="form-control form-control-lg" type="password" name="pass">
					</div>

					<div class="form-row">
						<div class="col">
							<div class="wrap-input100 validate-input" data-validate="Fname is required">
								<span class="label-input100">First Name <span style="color: red;">*</span></span>
								<input class="form-control  form-control-lg" type="text" name="fname">
							</div>
						</div>
						<div class="col">
							<div class="wrap-input100 validate-input" data-validate="Lname is required">
								<span class="label-input100">Last Name <span style="color: red;">*</span></span>
								<input class="form-control form-control-lg" type="text" name="lname">
							</div>
						</div>
					</div>

			
					<div class="wrap-input100 validate-input" data-validate="Age is required">
						<span class="label-input100">Age <span style="color: red;">*</span></span>
						<input class="form-control form-control-lg" type="text" name="age">
					</div>

					<div class="wrap-input100 validate-input">
					<span class="label-input100">Phone number <span style="color: red;">*</span></span>
						<input class="form-control form-control-lg" type="text" name="phone">
					</div>

					<div class="form-check" style="padding-left: 0;">
						<div class="row">
							<label class="col-md-3 col-form-label">Gender</label>	
						</div>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="1">
						<label class="form-check-label">Male</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="0">
						<label class="form-check-label">Female</label>
					</div>
					
					<div class="d-flex justify-content-center mt-3">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style="display: block; color: white !important"> Register</button>
                </div>
				
					<p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php?page=main&controller=login&action=index"
                    class="fw-bold text-body"><u>Login here</u></a></p>
					
				</form>

				
				</div>
				</div>
				
          </div>
        </div>
      </div>
	  
    </div>
	
  </div>
  <div style="height: 5em;"></div>
</section>


<?php
  include_once('views/main/footer.php');
?>