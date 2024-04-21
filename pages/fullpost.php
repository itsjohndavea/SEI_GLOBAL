<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php include("includes/lang.php");?>
<?php $SearchQueryParameter = $_GET["id"]; ?>
<?php
if(isset($_POST["Submit"])){
  $Name    = $_POST["CommenterName"];
  $Email   = $_POST["CommenterEmail"];
  $Comment = $_POST["CommenterThoughts"];
  date_default_timezone_set("Asia/Karachi");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);

  if(empty($Name)||empty($Email)||empty($Comment)){
    $_SESSION["ErrorMessage"]= "All fields must be filled out";
    Redirect_to("fullpost.php?id={$SearchQueryParameter}");
  }elseif (strlen($Comment)>500) {
    $_SESSION["ErrorMessage"]= "Comment length should be less than 500 characters";
    Redirect_to("fullpost.php?id={$SearchQueryParameter}");
  }else{
    // Query to insert comment in DB When everything is fine
    global $ConnectingDB;
    $sql  = "INSERT INTO comments(datetime,name,email,comment,approvedby,status,post_id)";
    $sql .= "VALUES(:dateTime,:name,:email,:comment,'Pending','OFF',:postIdFromURL)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt -> bindValue(':dateTime',$DateTime);
    $stmt -> bindValue(':name',$Name);
    $stmt -> bindValue(':email',$Email);
    $stmt -> bindValue(':comment',$Comment);
    $stmt -> bindValue(':postIdFromURL',$SearchQueryParameter);
    $Execute = $stmt -> execute();
    //var_dump($Execute);
    if($Execute){
      $_SESSION["SuccessMessage"]="Comment Submitted Successfully";
      Redirect_to("fullpost.php?id={$SearchQueryParameter}");
    }else {
      $_SESSION["ErrorMessage"]="Something went wrong. Try Again !";
      Redirect_to("fullpost.php?id={$SearchQueryParameter}");
    }
  }
} //Ending of Submit Button If-Condition
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEI - Post</title>
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
          .comment {
          display: flex;
          align-items: center;
          margin-bottom: 20px;
          background-color: #f5f5f5;
          padding:10px;
        }
        
        .comment img {
          width: 50px;
          height: 50px;
          margin-right: 10px;
          margin-left:10px;
        }
        
        .comment-content {
          flex: 1;
        }
        
        .commenter-name {
          margin: 0;
          font-size: 18px;
        }
        
        .comment-text {
          margin: 5px 0;
          font-size: 16px;
        }
        
        .comment-date {
          margin: 0;
          font-size: 14px;
          color: #777;
        }

  </style>

</head>
<body>
<?php require_once("includes/header.php"); ?>
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
                <a href="./blog?page=1" class="nav-item nav-link fw-bold active"><?= __('Blog')?></a>
                <a href="./distributor" class="nav-item nav-link fw-bold"><?= __('Find Distributor')?></a>
                <div class="nav-item fw-bold dropdown">
 
                    <a href="#" class="nav-link fw-bold"  data-bs-toggle="dropdown"><?= __('en')?><img src="<?= __('logo')?>" width="35" height="26" alt=""></i></a>
                    <!-- <div class="dropdown-menu fade-up custom-menu">
                        <a href="fullpost?id=<?php echo $PostId; ?>" class="dropdown-item fw-bold">EN<img src="../img/us.png" width="35" height="26"></a>
                        <a href="fullpost?id=<?php echo $PostId; ?>" class="dropdown-item fw-bold">TH<img src="../img/thai.png" width="35" height="26"></a>
                        <a href="fullpost?id=<?php echo $PostId; ?>" class="dropdown-item fw-bold">JP<img src="../img/ja.png" width="35" height="26"></a>
                    </div> -->

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
    <div class="container">
      <div class="row mt-4">
        <div class="col-sm-8 ">
        
        <br>
          
          <?php
           echo ErrorMessage();
           echo SuccessMessage();
           ?>
          <?php
          global $ConnectingDB;
          // SQL query when Searh button is active
          if(isset($_GET["SearchButton"])){
            $Search = $_GET["Search"];
            $sql = "SELECT * FROM posts
            WHERE datetime LIKE :search
            OR title LIKE :search
            OR category LIKE :search
            OR post LIKE :search";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':search','%'.$Search.'%');
            $stmt->execute();
          }
          // The default SQL query
          else{
            $PostIdFromURL = $_GET["id"];
            if (!isset($PostIdFromURL)) {
              $_SESSION["ErrorMessage"]="Bad Request !";
              Redirect_to("index.php?page=1");
            }
            $sql  = "SELECT * FROM posts  WHERE id= '$PostIdFromURL'";
            $stmt =$ConnectingDB->query($sql);
            $Result=$stmt->rowcount();
            if ($Result!=1) {
              $_SESSION["ErrorMessage"]="Bad Request !";
              Redirect_to("index.php?page=1");
            }

          }
          while ($DataRows = $stmt->fetch()) {
            $PostId          = $DataRows["id"];
            $DateTime        = $DataRows["datetime"];
            $PostTitle       = $DataRows["title"];
            $Category        = $DataRows["category"];
            $Admin           = $DataRows["author"];
            $Image           = $DataRows["image"];
            $PostDescription = $DataRows["post"];
          ?>
          <div class="card">
            <img src="uploads/<?php echo htmlentities($Image); ?>" class="img-fluid card-img-top" />
            <div class="card-body">
              <h4 class="card-title fw-bold"><?php echo htmlentities($PostTitle); ?></h4>
              <small class="text-muted"><?= __('Category')?>: <span class="text-dark"> <a href="index.php?category=<?php echo htmlentities($Category); ?>"> <?php echo htmlentities($Category); ?> </a></span> & Written by <span class="text-dark"> <a href="Profile.php?username=<?php echo htmlentities($Admin); ?>"> <?php echo htmlentities($Admin); ?></a></span> On <span class="text-dark"><?php echo htmlentities($DateTime); ?></span></small>
            <hr>
              <p class="card-text">
                <?php echo nl2br($PostDescription); ?></p>
            </div>
          </div>
          <br>
          <?php   } ?>
          <!-- Comment Part Start -->
          <!-- Fetching existing comment START  -->
          <span class="color: dark;"><?= __('Comments')?></span>
          <br><br>
        <?php
        global $ConnectingDB;
        $sql  = "SELECT * FROM comments
         WHERE post_id='$SearchQueryParameter' AND status='ON'";
        $stmt =$ConnectingDB->query($sql);
        while ($DataRows = $stmt->fetch()) {
          $CommentDate   = $DataRows['datetime'];
          $CommenterName = $DataRows['name'];
          $CommentContent= $DataRows['comment'];
        ?>
  <div>
    <div class="comment">
      <img src="../img/comment.png" alt="" width="10%">
      <div class="comment-content">
        <h5 class="commenter-name"><?php echo $CommenterName; ?></h5>
        <p class="comment-text"><?php echo $CommentContent; ?></p>
        <p class="comment-date"><?php echo $CommentDate;  ?></p>
      </div>
    </div>
  </div>
  <hr>
  <?php } ?>
          <div>
            <form class="" action="fullpost.php?id=<?php echo $SearchQueryParameter ?>" method="post">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="FieldInfo text-dark"><?= __('Share your thoughts about this post')?></h5>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input class="form-control" type="text" name="CommenterName" placeholder="Name" value="">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input class="form-control" type="text" name="CommenterEmail" placeholder="Enter you email" value="">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <textarea name="CommenterThoughts" class="form-control" rows="6" cols="80"></textarea>
                    </div>
                  <br>
                  <div class="">
                    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card mt-4">
            <div class="card-body">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100065259631442&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header bg-primary text-light">
              <h2 class="lead fw-bold">Categories</h2>
              </div>
              <div class="card-body">
                <?php
                global $ConnectingDB;
                $sql = "SELECT * FROM category ORDER BY id desc";
                $stmt = $ConnectingDB->query($sql);
                while ($DataRows = $stmt->fetch()) {
                  $CategoryId = $DataRows["id"];
                  $CategoryName=$DataRows["title"];
                 ?>
                <a href="index.php?category=<?php echo $CategoryName; ?>"> <span class="heading"> <?php echo $CategoryName; ?></span> </a><br>
               <?php } ?>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h2 class="lead fw-bold"><?= __('Recent Posts')?></h2>
            </div>
            <div class="card-body">
              <?php
              global $ConnectingDB;
              $sql= "SELECT * FROM posts ORDER BY id desc LIMIT 0,5";
              $stmt= $ConnectingDB->query($sql);
              while ($DataRows=$stmt->fetch()) {
                $Id     = $DataRows['id'];
                $Title  = $DataRows['title'];
                $DateTime = $DataRows['datetime'];
                $Image = $DataRows['image'];
              ?>
              <div class="media">
                <a href="fullpost?id=<?php echo htmlentities($Id) ; ?>"><img src="uploads/<?php echo htmlentities($Image); ?>" class="d-block img-fluid align-self-start"  width="400" height="400" alt=""></a>
                <div class="media-body ml-2">
                <a style="text-decoration:none; font-style: italic; " href="fullpost?id=<?php echo htmlentities($Id) ; ?>">  <h6 class="lead fw-bold"><?php echo htmlentities($Title); ?></h6> </a>
                  <p class="small"><?php echo htmlentities($DateTime); ?></p>
                </div>
              </div>
              <hr>
              <?php } ?>
            </div>
          </div>
          <br>
          <!-- LOGIN ADMIN -->
          <!-- <div class="card">
            </div>
            <div class="card-body">
              <a href="login.php" type="button" class="btn btn-danger btn-block text-center text-white mb-4" name="button">Login</a>
              </div>
            </div>
          </div> -->
          <br>
        </div>
    </div>
    </div>
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

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script src="../js/media.js"></script>
<script>
  $('#year').text(new Date().getFullYear());
</script>
</body>
</html>
<?php //require_once("footer.php");?> 
