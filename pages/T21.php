<?php include("includes/lang.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEI - T21</title>
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
            <img class="logo" src="../img/3.png" width="260" height="60" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 50px;">
            <div class="navbar-nav ms-auto p-4 p-lg-0" >
                <a href=""></a>
                <a href="./home" class="nav-item nav-link fw-bold"><?= __('Home')?></a>
                
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
                        <a href="./service" class="dropdown-item fw-bold active"><?= __('Services')?></a>
                        <a href="./product" class="dropdown-item fw-bold"><?= __('Products')?></a>
                    </div>
                </div>
                <a href="./media" class="nav-item nav-link fw-bold"><?= __('Media')?></a>
                <a href="./blog?page=1" class="nav-item nav-link fw-bold"><?= __('Blog')?></a>
                <a href="./distributor" class="nav-item nav-link fw-bold"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
 
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt=""></i></a>
                    <div class="dropdown-menu fade-up custom-menu">
                        <a href="T21?lang=en" class="dropdown-item fw-bold">EN<img src="../img/us.png" width="35" height="26"></a>
                        <a href="T21?lang=th" class="dropdown-item fw-bold">TH<img src="../img/thai.png" width="35" height="26"></a>
                        <a href="T21?lang=jp" class="dropdown-item fw-bold">JP<img src="../img/ja.png" width="35" height="26"></a>
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
<header id="header">
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <span><h1 class="h2 section-title animated slideInDown text-white active text-uppercase fw-bold"><?= __('SEI T21')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase text-white">
                        <li class="breadcrumb-item text-white " ><a href="./home" class="a-text text-uppercase"><?= __('Home')?></a></li>
                        <li class="breadcrumb-item text-white text-uppercase"><?= __('Pages')?></li>
                        <li class="breadcrumb-item text-white active  fw-bold text-uppercase" aria-current="page"><?= __('SEI T21')?></li>
                    </ol>
                </nav>
            </div>
      </div>
</div>
</header>
<section id="t21">
<div class="container py-5">
      <div class="row g-5">
              <div class="col-lg-6">
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                              <p><i class="fa fa-arrow-left-long ms-3"></i><a href="../pages/product" class="h6 animated slideInDown fw-bold" style="text-decoration: none;"> Back</a></p>
                            </div>
                          </div>
                            <div class="d-flex">
                                <div class="bg-light d-flex align-items-center justify-content-center mt-1">
                                    <h1><span class="fw-bold text-secondary d-flex"><?= __('SEI T21')?></span></h1>
                                </div>
                            </div>
                        </div>
                          <div class="ps-3">
                            <span>
                              <?= __('The coupling technology "SILICONE ALKOXY OLIGOMER" offers solvent-free surface protection with a rich and smooth finish, making application easy. Silex4F is a glass component with the highest concentration of 4 functional groups that provides flexible strength, crack resistance, and a balance of hardness and flexibility. Despite being solvent-free, it is easy to apply and wipe, with stable quality and supply from Japan. The coating forms an inorganic glass film with a strong bond to the painted surface, providing both hardness and flexibility. The small molecule size (4 functional group oligomer) and cross-linking enhance the bond strength between the coating surface and the substrate, resulting in a long life cycle.')?>
                              
                              <br><br><?= __('As it is difficult to bond with organic dirt and stains, it is easy to wash off oil, tar, bird droppings, handprints, dust, and other contaminants with water. The inorganic glass backbone and organic functional side-chain structure make it difficult for corrosion and inorganic dirt (water spots, ion deposits) to adhere. It provides long-term protection for painted surfaces with high resistance to UV rays, heat, oil, water, and chemicals. It is an alcohol-based solvent, which is gentle on painted surfaces, the human body, and the environment. The optimized curing rate ensures comfortable workability. It begins to harden in 20 minutes during winter and 10 minutes during summer, reaching a hardness of 2H after 24 hours and 7H after 7 days.')?>
                            </span>
                        </div>
                          <div class="ps-3">
                            <span>
                            </span>
                            <a href="#!" class="h4 animated slideInDown fw-bold"  onclick="window.location.href='mailto:sei.informationph@gmail.com?subject=SEI 2601 Product Inquiry&body=Please provide more information about this product:' "
                            style="text-decoration: none;"><?= __('Click here to inquire')?><i class="fa fa-arrow-right-long ms-3"></i></a>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 carousel-image  " src="../img/PR3.jpg" alt="">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 carousel-image" src="../img/PR1.2.jpg" alt="">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
        </div>
</div>
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
                <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+81-(0)252417260</h3>
                <a href="tel:+81-(0)252417260" style="text-decoration: none;" class="btn btn-secondary py-3 px-5  fw-bold"><?= __('Distributor')?><i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
  </div>
  </div>
  </section>
  <section id="other-products">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h1 class="mb-5 fw-bold text-uppercase text-primary" style="font-weight: bolder;"><?= __('Other Products')?></h1>
        </div>
        <div class="row d-flex justify-content-between align-items-end"> 
          <div class="container py-5">
              <div class="row">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                      <h2 class="mb-5 fw-bold text-secondary" style="text-align: left;">Series 2600</h2>
                  </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
                  <div class="card" style="border-radius: 15px;">
                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                      data-mdb-ripple-color="light">
                      <img src="../img/PR2.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                      <a href="#!"><div class="mask"></div></a>
                    </div>
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h4 class="text-dark fw-bolder">SEI 2601</h4>
                          <p class=""><?= __('Click down below for more details and inquiry')?></p>
                        </div>
                        <div>
                          <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                        <a href="../pages/2601" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
                  <div class="card" style="border-radius: 15px;">
                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                      data-mdb-ripple-color="light">
                      <img src="../img/PR1.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                      <a href="#!"><div class="mask"></div></a>
                    </div>
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h4 class="text-dark fw-bolder">SEI 2631</h4>
                          <p class=""><?= __('Click down below for more details and inquiry')?></p>
                        </div>
                        <div>
                          <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                        <a href="../pages/2631" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="container py-5">
              <div class="row">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                      <h2 class="mb-5 fw-bold text-secondary" style="text-align: left;" >T2000 Series</h2>
                  </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
                  <div class="card" style="border-radius: 15px;">
                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                      data-mdb-ripple-color="light">
                      <img src="../img/PR3.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                      <a href="#!"><div class="mask"></div></a>
                    </div>
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h4 class="text-dark fw-bolder">SEI T21</h4>
                          <p class=""><?= __('Click down below for more details and inquiry')?></p>
                        </div>
                        <div>
                          <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                        <a href="../pages/T21" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
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

