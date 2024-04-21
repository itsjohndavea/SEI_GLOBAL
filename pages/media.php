<?php include("includes/lang.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEI - Media</title>
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
    <link href="../css/image.css " rel="stylesheet">
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
<?php include("includes/header.php")?>
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
                        <a href="./service" class="dropdown-item fw-bold"><?= __('Services')?></a>
                        <a href="./product" class="dropdown-item fw-bold"><?= __('Products')?></a>
                    </div>
                </div>
                <a href="./media" class="nav-item nav-link fw-bold active"><?= __('Media')?></a>
                <a href="./blog?page=1" class="nav-item nav-link fw-bold"><?= __('Blog')?></a>
                <a href="./distributor" class="nav-item nav-link fw-bold"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
 
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt=""></i></a>
                    <div class="dropdown-menu fade-up custom-menu">
                        <a href="media?lang=en" class="dropdown-item fw-bold">EN<img src="../img/us.png" width="35" height="26"></a>
                        <a href="media?lang=th" class="dropdown-item fw-bold">TH<img src="../img/thai.png" width="35" height="26"></a>
                        <a href="media?lang=jp" class="dropdown-item fw-bold">JP<img src="../img/ja.png" width="35" height="26"></a>
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
<header id="media">
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <span><h1 class="h2 section-title animated slideInDown text-white active text-uppercase fw-bold"><?= __('Media')?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase text-white">
                    
                    <li class="breadcrumb-item text-white"><a href="./home" class="a-text text-uppercase "><?= __('Home')?></a></li>
                    <li class="breadcrumb-item text-white text-uppercase"><?= __('Pages')?></li>
                    <li class="breadcrumb-item text-white active fw-bold text-uppercase" aria-current="page"><?= __('Media')?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</header>
<section id="gallery">
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-xxl">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5 fw-bold text-uppercase text-primary" style=" font-weight: bolder;"><?= __('media gallery')?></h1>
                </div>
                <h1 class="mb-5 fw-bold text-uppercase text-secondary" style=" font-weight: bolder;"><?= __('Photos')?></h1>
        
          
              <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <picture>
                    <source type="image/webp" srcset="../img/media1.webp">
                    <img src="../img/media1.jpg" class="img-fluid" alt="image" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <picture>
                    <source type="image/webp" srcset="../img/media2.webp">
                    <img src="../img/media2.jpg" class="img-fluid" alt="image" loading="lazy" >
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <picture>
                    <source type="image/webp" srcset="../img/media3.webp">
                    <img src="../img/media3.jpg" class="img-fluid" alt="image" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-6"> 
                    <picture>
                    <source type="image/webp" srcset="../img/media4.webp">
                    <img src="../img/media4.JPG" class="img-fluid" alt="image" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <picture>
                    <source type="image/webp" srcset="../img/media5.webp">
                    <img src="../img/media5.JPG" class="img-fluid " alt="image" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <picture>
                    <source type="image/webp" srcset="../img/media6.webp">
                    <img src="../img/media6.JPG" class="img-fluid" alt="image" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media7.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media8.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media9.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media10.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media11.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media12.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="../img/media13.JPG" class="img-fluid" alt="image" loading="lazy" >
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="../img/media14.JPG" class="img-fluid " alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media15.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media16.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media17.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="../img/media18.JPG" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media19.jpg" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media20.jpg" class="img-fluid" alt="image" loading="lazy">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="../img/media21.jpg" class="img-fluid" alt="image" loading="lazy">
                </div>
              </div>
            </div>
          </div>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl">
            <div class=" wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px;">
                
                <h1 class="mb-3 fw-bold text-uppercase fw-bold text-secondary"><?= __('Videos')?>s</h1>
            </div>
          <div class="row ">
            <div class="col-sm-6 mt-3 ">
          
              <div class="ratio ratio-16x9">
                <iframe  src="https://www.youtube.com/embed/gpBUg3pZN6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-sm-6 mt-3">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/fs_8klCrhHE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
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
                <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+81(0)252418200</h3>
                <a href="./distributor" style="text-decoration: none;" class="btn btn-secondary py-3 px-5  fw-bold"><?= __('Distributor')?><i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
  </div>
</div>
</section>
<?php include("includes/footer.php")?>
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
   <script src="../js/media.js"></script>
</body>
</html>
