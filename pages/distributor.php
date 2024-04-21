<?php include("includes/lang.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SEI - Distributors</title>
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
        .table{
            width:80%;
       
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
                <a href="./distributor" class="nav-item nav-link fw-bold active"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
 
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt=""></i></a>
                    <div class="dropdown-menu fade-up custom-menu">
                        <a href="distributor?lang=en" class="dropdown-item fw-bold">EN<img src="../img/us.png" width="35" height="26"></a>
                        <a href="distributor?lang=th" class="dropdown-item fw-bold">TH<img src="../img/thai.png" width="35" height="26"></a>
                        <a href="distributor?lang=jp" class="dropdown-item fw-bold">JP<img src="../img/ja.png" width="35" height="26"></a>
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
<header id="distributor">
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <span><h1 class="h2 section-title animated slideInDown text-white active text-uppercase fw-bold"><?= __('Find Distributor')?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase text-white">
                    <li class="breadcrumb-item text-white"><a href="./home" class="a-text text-uppercase"><?= __('Home')?></a></li>
                    <li class="breadcrumb-item text-white active text-uppercase" aria-current="page"><?= __('Pages')?></li>
                    <li class="breadcrumb-item text-white active  fw-bold text-uppercase" aria-current="page"><?= __('Distributor')?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</header>
<section id="map">
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center pb-2">
        <div id="map"><img src="../img/map_global.PNG" width="90%" height="500px" frameborder="0" scrolling="no" allowfullscreen loading="lazy"></img></div>
           </div>
    </div>
</div> 
</section>
<section id="table-distributor">
<center><div class="container table-responsive w-100">
<div class="row">
<div class="col-sm-12">
    <div class="col-sm-9">
    <input type="text" class="form-control float-end" id="search" placeholder="Search branch name..." style="width: 25%;">
<br>
<table class="table table-hover border-0">
    <thead>
    <th class="text-uppercase"><?= __('Branch')?></th>
    <th class="text-uppercase"><?= __('Location')?></th>
    <th class="text-uppercase"><?= __('Contact')?></th>
    </thead>
    <tbody>
    <tr onclick="changeCountry('SEI JAPAN')">
        <td >SEI JAPAN - Main</a></td>
        <td>6-9 Sanwachyou Chuo-ku Niigata City Japan</td>
        <td>
            Phone number: +81(0)252418200<br>
            Contact person: Mori <br>
            Email: sei.informationph@gmail.com</td>
       </tr>
    <tr onclick="changeCountry('SEI PHILIPPINES')">
        <td >SEI PHILIPPINES</td>
        <td> 175 Mayon Street corner Dapitan, Brgy. Sta. Teresita, Quezon City 1101</td>
        <td>
            Phone number: +639603463602 <br>
            Shop Name: store.seiph <br>
            Email: store.seiph@gmail.com</td>
       </tr>
       <tr onclick="changeCountry('SEI THAILAND')">
        <td>SEI THAILAND</td>
        <td>Pruksa Village B
            Moo 4 Khlong Sam Subdistrict
            Khlong Luang District, Pathum Thani Province 12120</td>
        <td>
            Phone number: +63909611874<br>
            Email: sei.informationph@gmail.com<br>
            </td>
         </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
</center>
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
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        const searchInput = document.getElementById("search");
        const rows = document.querySelectorAll("tbody tr");
        console.log(rows);
        searchInput.addEventListener("keyup", function (event) {
          const q = event.target.value.toLowerCase();
          rows.forEach((row) => {
            row.querySelector("td").textContent.toLowerCase().startsWith(q)
              ? (row.style.display = "table-row")
              : (row.style.display = "none");
          });
        });
      </script>
    <script>
            function changeCountry(country){
        
                var map = document.getElementById("map");

                switch(country) {
                case "SEI JAPAN":
                map.innerHTML = '<div class="container"><div class="row"><div class="col-sm-12 text-center pb-2"><div id="map"><img src="../img/map_japan.PNG" width="90%" height="500px" frameborder="0" scrolling="no" allowfullscreen loading="lazy"></img></div></div></div></div> ';
                break;
                case "SEI PHILIPPINES":
                map.innerHTML = '<div class="container"><div class="row"><div class="col-sm-12 text-center pb-2"><div id="map"><img src="../img/map_ph.PNG" width="90%" height="500px" frameborder="0" scrolling="no" allowfullscreen loading="lazy"></img></div></div></div></div> ';
                break;
                case "SEI THAILAND":
                map.innerHTML = '<div class="container"><div class="row"><div class="col-sm-12 text-center pb-2"><div id="map"><img src="../img/map_th.PNG" width="90%" height="500px" frameborder="0" scrolling="no" allowfullscreen loading="lazy"></img></div></div></div></div> ';
                break;
                default:
                    alert("NO COUNTRY");
            }
        }
    </script>
</body>
</html>
