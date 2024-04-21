<?php include('includes/lang.php');?>
<?php include('includes/db.php');?>
<?php include('includes/functions.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEI - Carcare System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="msvalidate.01" content="416A88A49F175FFE55F65BF1BF491684" />
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./lib/animate/animate.min.css" rel="stylesheet">
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

  <style>

    .custom-menu{
      min-width:10px;
    }
    .custom-title{
      letter-spacing: 0.3rem;
      font-size:3.0rem;
      text-shadow: 5px;
    }
    @media (max-width: 990px) {
    .logo{
        width:210px;        
        
    }
    .custom-title{
      letter-spacing: 0.3rem;
      font-size:2.0rem;
    }

    }
  </style>
</head>
<body>
<section id="spinner">
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</section>
<?php include("includes/header.php")?>
 <nav class="navbar navbar-expand-lg bg-white navbar-light  sticky-top p-0">
        <a href="./pages/home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img class="logo" src="./img/3.png" width="300" height="60" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 50px;">
            <div class="navbar-nav ms-auto p-4 p-lg-0" >
                <a href=""></a>
                <a href="./pages/home" class="nav-item nav-link fw-bold"><?= __('Home')?></a>
                <div class="nav-item fw-bold dropdown">
                    <a href="#" class="nav-link fw-bold" data-bs-toggle="dropdown"><?= __('About')?></a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="./pages/sei" class="dropdown-item fw-bold"><?= __('About SEI')?></a>
                        <a href="./pages/company" class="dropdown-item fw-bold"><?= __('About Company')?></a>
                    </div>
                </div>
                <div class="nav-item fw-bold dropdown">
                    <a href="#" class="nav-link fw-bold" data-bs-toggle="dropdown"><?= __('Pages')?></a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="./pages/service" class="dropdown-item fw-bold "><?= __('Services')?></a>
                        <a href="./pages/product" class="dropdown-item fw-bold"><?= __('Products')?></a>
                    </div>
                </div>
                <a href="./pages/media" class="nav-item nav-link fw-bold"><?= __('Media')?></a>
                <a href="./pages/blog?page=1" class="nav-item nav-link fw-bold"><?= __('Blog')?></a>
                <a href="./pages/distributor" class="nav-item nav-link fw-bold"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt="flag"></a>
                    <div class="dropdown-menu fade-up custom-menu">
                        <a href="index?lang=en" class="dropdown-item fw-bold">EN<img src="./img/us.png" width="35" height="26"></a>
                        <a href="index?lang=th" class="dropdown-item fw-bold">TH<img src="./img/thai.png" width="35" height="26"></a>
                        <a href="index?lang=jp" class="dropdown-item fw-bold">JP<img src="./img/ja.png" width="35" height="26"></a>
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


<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="w-100" playsinline autoplay loop muted loading="lazy">
          <source src="./img/carousel-vid.mp4" type="video/mp4" loading="lazy">
        </video>
        <div class="carousel-caption d-flex align-items-center">
          <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <div class="col-10 col-lg-7 text-center text-lg-start">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="./img/carousel-bg-1.jpg" alt="Image">
        <div class="carousel-caption d-flex align-items-center">
          <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <div class="col-10 col-lg-7 text-center text-lg-start">
                <p class="h5 fw-bold section-text animated slideInDown text-uppercase custom-title">Expert Car
                  Protection</p>
                <div class="col-lg-8 d-none d-lg-flex animated zoomIn">

                </div>
                <p class="section-text animated slideInDown">
                  SEI's expert car coating service provides ultimate protection for your ride.
                  <br>Trust the experts today!
                </p>
                <a href="./pages/sei" class="btn btn-secondary py-3 px-5 animated slideInDown">Learn More<i
                    class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="./img/carousel-bg-2.jpg" alt="Image">
        <div class="carousel-caption d-flex align-items-center">
          <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <div class="col-10 col-lg-7 text-center text-lg-start">
                <p class="fw-bold section-text animated slideInDown text-uppercase custom-title">Confidently coated
                  premium cars</p>
                <div class="col-lg-8 d-none d-lg-flex animated zoomIn">

                </div>
                <p class="section-text animated slideInDown">
                  Protect your car with SEI's premium coating services and enjoy confident driving. Trust SEI!
                </p>
                <a href="./pages/sei" class="btn btn-secondary py-3 px-5 animated slideInDown">Learn More<i
                    class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
</div>



<section id="our-product">
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="text-center">
    </div>
    <div class="row d-flex justify-content-between align-items-end"> 
      <div class="container py-5">
          <div class="row">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;text-align: center;"><?= __('Latest Products')?></h1>
              </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR2-removebg.png" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bolder">SEI 3001</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/3001" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR1-removebg.png" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bolder">SEI 3031</h4>
                    </div>
                    <div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/3031" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR3-removebg.png" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bolder">SEI T21</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/T21" class="h4 animated slideInDown fw-bold" style="text-decoration: none;"><?= __('More details')?><i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about">
      <div class="container-fluid fact bg-dark my-3 py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="./img/media22.jpg" style="object-fit: cover;" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold text-uppercase text-secondary" style="letter-spacing: 0.1em; font-weight: bolder;"><?= __('About Us')?></h2>
                    <p class="mb-4" style="text-size-adjust: 100px;color:white;"><?= __('IRIOSU NIIGATA Co., Ltd is a Japanese company that values honesty and offers high-quality glass coating products that have undergone rigorous testing to withstand severe weather conditions. Our shop is located in Niigata, which faces severe weather conditions. Through our website, we provide comprehensive information on purchasing the product and a customer support section. We aim to collaborate and share our knowledge and technology to address misunderstandings about glass coatings due to formulation errors while prioritizing customer satisfaction.')?></p>
                    <a href="./pages/sei" class="btn btn-primary py-3 px-5  fw-bold"><?= __('Read More')?><i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="vdo">
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl">
            <div class=" wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px;">
             <div class="row ">
            <div class="col-sm-12 mt-3 ">
              <video width="100%" controls playsinline>
                <source src="./img/vdo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="features">
<h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;text-align: center;"><?= __('Why should you choose us')?></h1>
 <div class="row">
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid  fa-medal fa-4x"></i>
   <h3><?= __('Reputation')?></h3>
   <p><?= __('We gave you a quality work and satisfaction with our work.')?></p>
 </div>
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid fa-building-circle-check  fa-4x"></i>
   <h3><?= __('Experience and Expertise')?></h3>
   <p><?= __('As a experience business for many years we gave you a satisfactory.')?></p>
 </div>
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid fa-tools fa-4x"></i>
   <h3><?= __('Range of Services.')?></h3>
   <p><?= __('We gave a wide range of services for your car.')?></p>
 </div>
</div>
 <div class="row">
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid  fa-arrow-alt-circle-up fa-4x"></i>
   <h3><?= __('High-quality Services')?></h3>
   <p><?= __('We provided top-notch quality services for your vehicle.')?></p>
 </div>
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid fa-money-bills  fa-4x"></i>
   <h3><?= __('Convenience')?></h3>
   <p><?= __('We protects your vehicle paint from damage caused by UV rays, debris, and other environmental factors, ultimately extending its lifespan and maintaining its value.')?></p>
 </div>
 <div class="feature-box col-lg-4">
   <i class="icon fa-solid fa-check-circle fa-4x"></i>
   <h3><?= __('Pricing')?></h3>
   <p><?= __('We offer excellent service and competitive pricing for your vehicle.')?></p>
 </div>
</div>
</section>
<section id="fact">
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2  fw-bold" data-toggle="counter-up" >30</h2>
                    <p class="text-white mb-0 fw-bold"><?= __('Years of Experience')?></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">90</h2>
                    <p class="text-white mb-0 fw-bold"><?= __('Expert Workers')?></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0 fw-bold"><?= __('Satisfied Clients')?></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">1500</h2>
                    <p class="text-white mb-0 fw-bold"><?= __('Projects completed')?> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-post">
<div class="container">
<div class="row g-4">
<div class="col-lg-12 col-md-12">
<h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;text-align:center;"><?= __('Latest News')?></h1>
<div class="row flex-row col-sm-12 ml-2">
              <?php
              global $ConnectingDB;
              $sql= "SELECT * FROM posts ORDER BY id desc LIMIT 3";
              $stmt= $ConnectingDB->query($sql);
              while ($DataRows=$stmt->fetch()) {
                $PostId          = $DataRows["id"];
                $DateTime        = $DataRows["datetime"];
                $PostTitle       = $DataRows["title"];
                $Category        = $DataRows["category"];
                $Admin           = $DataRows["author"];
                $Image           = $DataRows["image"];
                $PostDescription = $DataRows["post"];
                $CategoryId = $DataRows["id"];
                $CategoryName=$DataRows["title"];
                
              ?>
              <div class="col-lg-4">
                <div class="card flex-column">
                <div class="card-body h-100" >
                <a href="./fullpost?id=<?php echo htmlentities($PostId) ; ?>"><img src="./pages/uploads/<?php echo htmlentities($Image); ?>" style="height: 250px;" class="d-block card-img-top" alt=""></a>
                <a style="text-decoration:none;" href="./pages/fullpost?id=<?php echo htmlentities($PostId) ; ?>"> <?php
                  $words = explode(" ", $PostTitle);
                  $short_title = implode(" ", array_slice($words, 0, 4));
                  ?>
                  <h4 class="card-title"><?php echo htmlentities($short_title); ?></h4> </a>
                <p class="small"><?php echo htmlentities($DateTime); ?><span style="float:right;" class="badge badge-dark text-dark"><?=__('Comments')?>:
                 <?php echo ApproveCommentsAccordingtoPost($PostId);?>
              </span></p>
              
              <hr>
              <p class="card-text" style="height: 120px;">
  
                <?php if (strlen($PostDescription)>150) { $PostDescription = substr($PostDescription,0,150)."...";} echo htmlentities($PostDescription); ?></p>
              <a href="./pages/fullpost?id=<?php echo $PostId; ?>" style="float:right; text-decoration:none;">
                <span class="btn btn-primary py-3 px-5 fw-bold animated slideInDown" style="" ><?= __('Read More')?></span>
              </a>
                </div>
              </div>
              </div>
          <?php } ?>
</section>
<br>
<section id="contact">
 <div class="container-xxl py-5">
  <div class="container">
    <div class="text-center">
      <h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;"><?= __('Connect with us')?></h1>
    </div>
      <div class="row g-4">
          <div class="col-12">
              <div class="row gy-4">
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase  fw-bold"><i class="fa fa-contact-card text-primary me-2"></i><?= __('Contact Number')?></h5>
                          <p class="m-0"><a href="tel:+81(0)252418200" style="text-decoration: none;" target="_blank">+81(0)252418200</a></p>
                          <p class="m-0" style="color:white;">&nbsp;</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase fw-bold"><i class="fa fa-envelope-open text-primary me-2"></i><?= __('Email Address')?></h5>
                          <p class="m-0"><a  href="mailto:sei.informationph@gmail.com" style="text-decoration: none;" target="_blank">sei.informationph@gmail.com</a></p>
                          <p class="m-0" style="color:white;">&nbsp;</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase fw-bold"><i class="fa fa-location-arrow text-primary me-2"></i><?= __('Location')?></h5>
                          <p class="m-0"><a href="https://goo.gl/maps/k8DVuLoMgBU4X9Wp9" style="text-decoration: none;" target="_blank">6-9 Sanwachyou Chuo-ku Niigata City Japan</a></p>
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
    <div class="row g-4">
        <div class="col-lg-8 col-md-6">
            <h1 class="mb-4 fw-bold"><?=__('Have a pre-purchase inquiry?')?></h1>
            <p class="mb-0"><?= __('Our team is available to assist you, Please feel free to contact us at the provided number for any concerns or inquiries.')?></p>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+81(0)252418200</h3>
                <a href="./pages/distributor" style="text-decoration: none;" class="btn btn-secondary py-3 px-5  fw-bold"><?= __('Distributor')?><i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
      </div>
  </div>
</div>
</div>
</section>
<?php include("./includes/footer.php");?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/wow/wow.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/waypoints/waypoints.min.js"></script>
    <script src="./lib/counterup/counterup.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/tempusdominus/js/moment.min.js"></script>
    <script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>

