<?php include("includes/lang.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEI - About Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="../favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
    .row-t{
        border: none;
    }
    @media (max-width: 990px) {
    .logo{
        width:210px;        
        
    }
    }
    .custom-menu{
    min-width:10px;
  
    }
</style>
   
</head>

<body>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
  <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
  </div>
</div>
<?php include("includes/header.php");?>
<nav class="navbar navbar-expand-lg bg-white navbar-light  sticky-top p-0">
        <a href="./home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img class="logo" src="../img/3.png" width="300" height="60" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 50px;">
            <div class="navbar-nav ms-auto p-4 p-lg-0" >
                <a href=""></a>
                <a href="./home" class="nav-item nav-link fw-bold"><?= __('Home')?></a>
                <!-- Dromdowns -->
                <div class="nav-item fw-bold dropdown">
                    <a href="#" class="nav-link fw-bold" data-bs-toggle="dropdown"><?= __('About')?></a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="./sei" class="dropdown-item fw-bold"><?= __('About SEI')?></a>
                        <a href="./company" class="dropdown-item fw-bold"><?= __('About Company')?></a>
                    </div>
                </div>
                <div class="nav-item fw-bold dropdown">
                    <a href="#" class="nav-link fw-bold" data-bs-toggle="dropdown"><?= __('Pages')?></a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="./service" class="dropdown-item fw-bold"><?= __('Services')?></a>
                        <a href="./product" class="dropdown-item fw-bold"><?= __('Products')?></a>
                    </div>
                </div>
                <a href="./media" class="nav-item nav-link fw-bold"><?= __('Media')?></a>
                <a href="./blog?page=1" class="nav-item nav-link fw-bold"><?= __('Blog')?></a>
                <a href="./distributor" class="nav-item nav-link fw-bold"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
 
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt=""></i></a>
                    <div class="dropdown-menu fade-up custom-menu">
                        <a href="company?lang=en" class="dropdown-item fw-bold">EN<img src="../img/us.png" width="35" height="26"></a>
                        <a href="company?lang=th" class="dropdown-item fw-bold">TH<img src="../img/thai.png" width="35" height="26"></a>
                        <a href="company?lang=jp" class="dropdown-item fw-bold">JP<img src="../img/ja.png" width="35" height="26"></a>
                    </div>

                </div>
               
                <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                  <small class="fa fa-map-marker-alt text-primary me-2"></small>
                  <small>6-9 Sanwachyou Chuo-ku Niigata City Japan</small>
               </span>
                <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                  <small class="far fa-envelope text-primary me-2"></small>
                  <small>sei.informationph@gmail.com</small>
                </span>
                <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                  <small  class="fa fa-phone-alt text-primary me-2  fw-bold"></small>
                    <small class="">+81(0)252418200</small> 
                </span>
                <span id="socials-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                <a class="btn-sm-square me-1" style="background: #3B5998;color: white; text-decoration: none;" href="https://www.facebook.com/profile.php?id=100065259631442"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-sm-square me-1" style="background: #55ACEE; color: white; text-decoration: none;" href=""><i class="fab fa-twitter "></i></a>
                    <a class="btn-sm-square me-1" style="background: #25D366; color: white; text-decoration: none;" href=""><i class="fab fa-whatsapp"></i></a>
                    <a  class="btn-sm-square me-0" style="background: #f09433; 
                        background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
                        background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                        background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);color:white; text-decoration: none;" href=""><i class="fab fa-instagram"></i></a>
                </span> 
                </div>
            </div>
        </div>
    </div>
</nav>
<header id="company">
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <span><h1 class="h2 section-title animated slideInDown text-white active text-uppercase fw-bold"><?= __('About Company')?></h1>
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase text-white">
                        <li class="breadcrumb-item text-white" ><a href="./home" class="a-text text-uppercase"><?= __('Home')?></a></li>
                        <li class="breadcrumb-item text-white text-uppercase"><?= __('Pages')?></li>
                        <li class="breadcrumb-item text-white active  fw-bold text-uppercase" aria-current="page"><?= __('About Company')?></li>
                    </ol>
                </nav>
          </div>
    </div>
</div>
</header>
<section id="greetings">
<div class="col-lg-12">
  <div class="row">
      <h2 class="text-center"><?= __('Greetings')?></h2>
  </div> 
<div class="container-xxl">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase mb-5 fw-bolder"></h6>
              </div>
            <div class="row g-5">
                <div class="col-lg-6 col-sm-12 pt-4">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <span class="fa-2x" style="font-family:'Times New Roman', Times, serif;">
                            <?= __('"I want to date you for a long time, so I wont cut corners"')?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="mb-4 fa-1x">
                    <?= __('Being a specialist in automobile coating with years of expertise, we may need up to a week to give the finest quality service for our clients vehicles. "We try to cultivate a good ang long-lasting relationships with our clients and their treasured vehicles, which is why we do not accept rushed jobs.')?>
                    </p>
                    <p style="font-style: oblique;float: right; font: bold;">
                    Chief Executive Director Kazuaki Morikawa
                    </p>
                </div>
            </div>
      </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
          <div class="row g-6">
                <div class="col-lg-12 col-sm-12 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute w-100 h-100" src="../img/company1.png" style="object-fit: cover;" alt="">
                    </div>
              </div>
          </div>
    </div>
</div>
</section>
<section id="company-profile">
<div class="col-lg-12">
      <div class="row">
      <h2 class="text-center"><?= __('Company Profile')?></h2>
       </div> 
<div class="col-lg-12 col-sm-12">
    <table class="table table-hover container">
        <thead>
          <tr>
            <th scope="col">Ilios Niigata Co., Ltd.</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?= __('Address')?></th>
            <td>6-9 Sanwanchyou, Chuo-ku, Niigata City, 950-0081</td>
            
          </tr>
          <tr>
            <th scope="row"><?= __('Contact Number')?></th>
            <td>TEL: 025-241-7300 <br>
                FAX: 025-241-8200</td>
          </tr>
          <tr>
            <th scope="row"><?= __('Established')?></th>
            <td>January 30, 1996</td>
          </tr>
        
          <tr>
            <th scope="row"><?= __('Capital')?></th>
            <td>JPY</td>
          </tr>
          <tr>
            <th scope="row"><?= __('Regular holiday')?></th>
            <td><?= __('Irregular holidays')?></td>
          </tr>
          <tr>
            <th scope="row"><?= __('Business hours')?></th>
            <td>9:00-18:00</td>
          </tr>
        </tbody>
      </table>
    </div>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13337.96616251275!2d139.04190464603383!3d37.922464484478304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4c9f0390ac4eb%3A0xb17154d34fbcf00c!2sNiigata%20City%20Hotel!5e0!3m2!1sen!2sph!4v1679401219563!5m2!1sen!2sph" width="85%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe></center>
</div>
</section>
<section id="notation">
<div class="col-lg-12">
    <div class="row">
    <h2 class="text-center" style="margin-bottom: 100px;margin-top: 100px;"><?= __('Notation based on the Act on Specified Commercial Transactions')?></h2>
   </div> 
<table class="table container">
    <tbody>
      <tr>
        <th scope="row" class="row-t"><?= __('Shop name')?></th>
        <td  class="table-active">Ilios Niigata</td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Seller name')?></th>
        <td>Ilios Niigata Co., Ltd.</td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Representative name')?></th>
        <td class="table-active">Kazuaki Morikawa</td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Location')?></th>
        <td>6-9JP Sanwanchyou, Chuo Ward, Niigata City, Niigata Prefecture 950-0081</td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Inquiry')?></th>
        <td  class="table-active"><?= __('Please contact us from the inquiry form.')?></td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Product selling price')?></th>
        <td><?= __('Product prices are displayed on each product screen.')?></td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('How to purchase products')?></th>
        <td  class="table-active"><?= __('You can reach out to our distributor for further assistance.')?></td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Product delivery time')?></th>
        <td><?= __('Product shipping dates are listed on each product page.')?></td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Non-product costs')?></th>
        <td  class="table-active"><?= __('Shipping and handling charges will be added to the purchase price.')?></td>
      </tr>
      <tr>
        <th scope="row" class="row-t"><?= __('Special Terms for Returns and Cancellations')?></th>
        <td><?= __('We cannot accept returns or exchanges unless the product is damaged during shipping.')?></td>
      </tr>
    </tbody>
  </table>
</section>
<section id="contact">
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="row g-4">
        <div class="col-lg-8 col-md-6">
            <h1 class="mb-4 fw-bold"><?= __('Have a pre-purchase inquiry?')?></h1>
            <p class="mb-0"><?= __('Our team is available to assist you, Please feel free to contact us at the provided number for any concerns or inquiries.')?>
            </p>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+81(0)252418200</h3>
                <a href="./distributor" style="text-decoration: none;" class="btn btn-secondary py-3 px-5  fw-bold"><?= __('Distributor')?><i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
  </div>
</div>
</section>
<?php include("includes/footer.php");?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>   
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="../js/main.js"></script>
</body>
</html>
