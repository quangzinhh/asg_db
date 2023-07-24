<?php
include_once('views/main/navbar.php');
?>
  <main id='main'>

  <div class="container-fluid py-5 wow fadeInUp my-5" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
           
        <div class="row content" data-aos="fade-up">
        <?php
          foreach ($companies as $company)
          {
            echo '
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Phone</h5>
                            <h5 class="text-primary mb-0">(84 28) 6258 3690</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email</h5>
                            <h5 class="text-primary mb-0">bosch-infoteam@vn.bosch.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                        <h5 class="mb-2">'. $company->name .'</h5>
                            <h5 class="text-primary mb-0">' . $company->address . '</h5>
                        </div>
                    </div>
                </div>
            </div>

            ';
          }
        ?>
        </div>
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1196686672038!2d106.6372868746315!3d10.802145658719622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752930ebbcc32b%3A0x3440b0ff9dbbc07e!2sBosch%20Global%20Software%20Technologies!5e0!3m2!1svi!2s!4v1681936178138!5m2!1svi!2s"
                        frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Contact Section ======= -->
    </section>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
  </main><!-- End #main -->
<?php
include_once('views/main/footer.php');
?>