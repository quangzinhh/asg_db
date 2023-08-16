<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOSCH COMPANY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="https://clipground.com/images/logo-traveloka-png-9.jpg" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./public/js/layouts/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/js/layouts/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./public/css/layouts/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./public/css/layouts/style.css" rel="stylesheet">
</head>

<body>
   
<?php
  include_once('views/main/navbar.php');
?>
    <!-- Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://content.coins.ph/wp-content/uploads/2017/03/traveloka-shop-tab-banner.jpg" alt="Image" style = "height: 700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Traveloka</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Du lịch cùng bạn bè và gia đình</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/9cf1f181333671.5dbfd18f39a9d.png" alt="Image" style = "height: 700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Traveloka</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Đặt vé nhanh chóng và tiện lợi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Lượt tải ứng dụng</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">50000000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Đối tác trên thế giới</h5>
                            <h1 class="mb-0" data-toggle="counter-up">75000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Số lượng sản phẩm</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">14</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h1 class="mb-0">Tại sao nên đặt chỗ với Traveloka?</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495008495760-d92160ea2b56fc1128cbdff93aa43774.png?tr=h-150,q-75,w-150" alt="" style="width: 80px; height: 80px;">
                            </div>
                            <h4>Giải pháp du lịch hoàn thiện</h4>
                            <p class="mb-5">Giải pháp toàn diện - giúp bạn tìm chuyến bay và khách sạn khắp Việt Nam và Đông Nam Á một cách tiết kiệm.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495008504598-6c1d5675c41e47eee0b27c59c07a2bbd.png?tr=h-150,q-75,w-150" alt="" style="width: 80px; height: 80px;">
                            </div>
                            <h4>Giá rẻ mỗi ngày</h4>
                            <p class="mb-0">Giá bạn thấy là giá bạn trả! Dễ dàng so sánh khi không cần phải trả thêm chi phí ẩn! </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="https://www.balidiscovery.com/wp-content/uploads/2020/08/traveloka1-768x644.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495008514239-c1d0a51538cd02053c9b1a6c567fe5b5.png?tr=h-150,q-75,w-150" alt="" style="width: 80px; height: 80px;">
                            </div>
                            <h4>Phương thức thanh toán an toàn và linh hoạt</h4>
                            <p class="mb-0">Giao dịch trực tuyến an toàn với nhiều lựa chọn như thanh toán tại cửa hàng tiện lợi, chuyển khoản ngân hàng, thẻ tín dụng đến Internet Banking. Không tính phí giao dịch.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495008521046-3cee046bb3ddb863398300f89d83c0f9.png?tr=h-150,q-75,w-150" alt="" style="width: 80px; height: 80px;">
                            </div>
                            <h4>Hỗ trợ khách hàng 24/7</h4>
                            <p class="mb-0">Đội ngũ nhân viên hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn trong từng bước của quá trình đặt vé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
          <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Đối tác hàng không</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568212919133-2482812716f8f0532738cb4518387a0d.png?tr=q-75,w-88" alt="" style="margin-top: 30%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2020/02/21/1582260108949-09348d284bb3fd1675614f43ab22a6d8.png?tr=q-75,w-88" alt="" style="margin-top: 35%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2022/05/31/1653980299757-6784a77ebf1ee7eb39aded22846ad2ce.png?tr=q-75,w-88" alt="" style="margin-top: 30%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/05/04/1620136036133-d74f19434de12f627b593e49a144ff6c.png?tr=q-75,w-88" alt="" style="margin-top: 40%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213291182-fd05076a8f71ea7f97ce37b307741c11.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213296422-f6b5db2bbfea2e7ee39bd7b2a7bb612f.png?tr=q-75,w-88" alt=""  style="margin-top: 10%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213462655-77c3422f91cface84d1833b02dda2ebd.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213465059-3c99fbdba33fa1ca0e86b737fc99c6ba.png?tr=q-75,w-88" alt="" style="margin-top: 25%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2020/09/29/1601371217702-a33be2e4dcf4e85af9a3739912cc17d5.png?tr=q-75,w-88" alt="" style="margin-top: 30%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213286490-40a57162d59a3cdfd871be63262c1153.png?tr=q-75,w-88" alt="" style="margin-top: 30%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213560420-c046c6e8dde662c947e67249ba88cade.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/05/04/1620137289663-ee02f85739a0b87ce702daadf6f3c0d5.png?tr=q-75,w-88" alt="" style="margin-top: 40%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/08/09/1628503297217-f74fe9efe3c7cd6b9af924f8142c61ac.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/09/11/1568213837211-1dca13fc088dcc4b3eb297930e26fb69.png?tr=q-75,w-88" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
          <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Đối tác khách sạn</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2022/10/26/1666769812521-2f9e73b3dfa37b1a8774517477bce6f3.png?tr=q-75,w-88" alt="" style="margin-top: 15%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517200921330-784c7f0f6798fdb7c3b14d23881d5090.jpeg?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517201226378-8affc1dfeeafe879121fc94652a7332f.png?tr=q-75,w-88" alt="" style="margin-top:-12%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517200871912-592258729faec3c08e23d4f7c8c0da07.png?tr=q-75,w-88" alt="" style="margin-top: 20%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200776552-f852b752ae88e7e0902fb0d3bfc41a00.png?tr=q-75,w-88" alt="" style="margin-top: 23%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517201056739-4030efe3d4ea793a40904f712cec37af.png?tr=q-75,w-88" alt="" style="margin-top: 25%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200809743-5dde6f77b2b13ac38a752953eb78e692.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200785889-c88f0b3d3f0c0711af02b5ecda331105.png?tr=q-75,w-88" alt="" style="margin-top: -5%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200796134-3e687ae7c1e145253ef72691f5f18318.png?tr=q-75,w-88" alt="" style="margin-top: 20%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200813329-e3ef4b6c35b64c4ec14d596f3306f239.png?tr=q-75,w-88" alt="">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517201184025-b629781230030dbfc28bcbfb127286f6.png?tr=q-75,w-88" alt="" style="margin-top: 5%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2018/01/29/1517201013000-1f5c98cc6081ca889e0ee99d4bdae1ce.png?tr=q-75,w-88" alt="" style="margin-top: 20%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200782803-92cd85419dd6440bbc1c7b8d5a061249.png?tr=q-75,w-88" alt="" style="margin-top: 20%">
                    <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/08/08/1502200819165-5bd89b99597e581e6917c18eb32695ca.png?tr=q-75,w-88" alt="" style="margin-top:-10%">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <?php
    include_once('views/main/footer.php');
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="./public/js/layouts/counterup/counterup.min.js"></script>
    <script src="./public/js/layouts/main.js"></script>
</body>

</html>
