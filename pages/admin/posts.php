<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
//echo $_SESSION["TrackingURL"];
Confirm_Login(); ?>
<?php
// Fetching the existing Admin Data Start
$AdminId = $_SESSION["UserId"];
global $ConnectingDB;
$sql  = "SELECT * FROM admins WHERE id='$AdminId'";
$stmt =$ConnectingDB->query($sql);
while ($DataRows = $stmt->fetch()) {
  $ExistingName     = $DataRows['aname'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="favicon.ico" rel="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Posts</title>
</head>
<body>
    <!-- NAVBAR -->
  <div style="height:10px; background:#27aae1;"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="dashboard" class="nav-link"> <i class="fas fa-user text-success"></i> <?php echo $ExistingName; ?></a>
        </li>
        <li class="nav-item">
          <a href="dashboard" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="posts" class="nav-link active">Posts</a>
        </li>
        <li class="nav-item">
          <a href="categories" class="nav-link">Categories</a>
        </li>
        <!--<li class="nav-item">-->
        <!--  <a href="admins" class="nav-link">Manage Admins</a>-->
        <!--</li>-->
        <li class="nav-item">
          <a href="comments" class="nav-link">Comments</a>
        </li>
        <li class="nav-item">
          <a href="../blog?page=1" class="nav-link" target="_blank">Live Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="logout" class="nav-link text-danger">
          <i class="fas fa-user-times"></i> Logout</a></li>
      </ul>
      </div>
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1><i class="fas fa-blog" style="color:#27aae1;"></i> Blog Posts</h1>
          </div>
          <div class="col-lg-4 mb-2">
            <a href="addnewpost" class="btn btn-primary btn-block">
              <i class="fas fa-edit"></i> Add New Post
            </a>
          </div>
          <div class="col-lg-4 mb-2">
            <a href="categories" class="btn btn-info btn-block">
              <i class="fas fa-folder-plus"></i> Add New Category
            </a>
          </div>
          <!--<div class="col-lg-3 mb-2">-->
          <!--  <a href="admins" class="btn btn-warning btn-block">-->
          <!--    <i class="fas fa-user-plus"></i> Add New Admin-->
          <!--  </a>-->
          <!--</div>-->
          <div class="col-lg-4 mb-2">
            <a href="comments" class="btn btn-success btn-block">
              <i class="fas fa-check"></i> Approve Comments
            </a>
          </div>

        </div>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- Main Area -->
    <section class="container py-2 mb-4">
      <div class="row">
        <div class="col-lg-12">
          <?php
           echo ErrorMessage();
           echo SuccessMessage();
           ?>
          <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Date&Time</th>
              <th>Author</th>
              <th>Banner</th>
              <th>Comments</th>
              <th>Action</th>
              <th>Live Preview</th>
            </tr>
            </thead>
                    <?php
                    global $ConnectingDB;
                    $sql  = "SELECT * FROM posts ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    $Sr = 0;
                    while ($DataRows = $stmt->fetch()) {
                      $Id        = $DataRows["id"];
                      $DateTime  = $DataRows["datetime"];
                      $PostTitle = $DataRows["title"];
                      $Category  = $DataRows["category"];
                      $Admin     = $DataRows["author"];
                      $Image     = $DataRows["image"];
                      $PostText  = $DataRows["post"];
                      $Sr++;
                    ?>
  <tbody>
        <tr>
          <td>
              <?php echo $Sr; ?>
          </td>
          <td>
              <?php
                  if(strlen($PostTitle)>20){$PostTitle= substr($PostTitle,0,18).'..';}
                   echo $PostTitle;
               ?>
           </td>
           <td>
              <?php
                  if(strlen($Category)>8){$Category= substr($Category,0,8).'..';}
                   echo $Category ;
               ?>
           </td>
           <td>
              <?php
                  if(strlen($DateTime)>11){$DateTime= substr($DateTime,0,11).'..';}
                     echo $DateTime ;
              ?>
          </td>
          <td>
              <?php
                  if(strlen($Admin)>6){$Admin= substr($Admin,0,6).'..';}
                     echo $Admin ;
               ?>
          </td>
              <td><img src="../uploads/<?php echo $Image ; ?>" width="170px;" height="50px"</td>
              <td>
                  <?php $Total = ApproveCommentsAccordingtoPost($Id);
                  if ($Total>0) {
                    ?>
                    <span class="badge badge-success">
                      <?php
                    echo $Total; ?>
                    </span>
                      <?php  }  ?>
                <?php $Total = DisApproveCommentsAccordingtoPost($Id);
                if ($Total>0) {
                                ?>
                  <span class="badge badge-danger">
                    <?php
                  echo $Total;  ?>
                  </span>
                    <?php  }    ?>
              </td>
              <td>
                <a href="editpost?id=<?php echo $Id; ?>"><span class="btn btn-warning">Edit</span></a>
                <a href="deletepost?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a>
              </td>
              <td>
                <a href="../fullpost?id=<?php echo $Id; ?>" target="_blank"><span class="btn btn-primary">Live Preview</span></a>
              </td>
                </tr>
                </tbody>
        <?php } ?>   <!--  Ending of While loop -->
          </table>
        </div>
      </div>
    </section>
    <!-- Main Area End -->

    <!-- FOOTER -->
  
    <!-- FOOTER END-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $('#year').text(new Date().getFullYear());
</script>
</body>
</html>
