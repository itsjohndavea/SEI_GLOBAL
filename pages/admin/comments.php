<?php require_once("includes/db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php $_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
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
  <title>Comments</title>
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
          <a href="posts" class="nav-link">Posts</a>
        </li>
        <li class="nav-item">
          <a href="categories" class="nav-link">Categories</a>
        </li>
        <!--<li class="nav-item">-->
        <!--  <a href="admins" class="nav-link">Manage Admins</a>-->
        <!--</li>-->
        <li class="nav-item">
          <a href="comments" class="nav-link active">Comments</a>
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
          <h1><i class="fas fa-comments" style="color:#27aae1;"></i> Manage Comments</h1>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->
    <!-- Main Area Start -->
    <section class="container py-2 mb-4">
      <div class="row" style="min-height:30px;">
        <div class="col-lg-12" style="min-height:400px;">
          <?php
           echo ErrorMessage();
           echo SuccessMessage();
           ?>
          <h2>Un-Approved Comments</h2>
          <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th>No. </th>
                <th>Date&Time</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Aprove</th>
                <th>Action</th>
                <th>Details</th>
              </tr>
            </thead>
          <?php
          global $ConnectingDB;
          $sql = "SELECT * FROM comments WHERE status='OFF' ORDER BY id desc";
          $Execute =$ConnectingDB->query($sql);
          $SrNo = 0;
          while ($DataRows=$Execute->fetch()) {
            $CommentId = $DataRows["id"];
            $DateTimeOfComment = $DataRows["datetime"];
            $CommenterName = $DataRows["name"];
            $CommentContent= $DataRows["comment"];
            $CommentPostId = $DataRows["post_id"];
            $SrNo++;
          ?>
          <tbody>
            <tr>
              <td><?php echo htmlentities($SrNo); ?></td>
              <td><?php echo htmlentities($DateTimeOfComment); ?></td>
              <td><?php echo htmlentities($CommenterName); ?></td>
              <td><?php echo htmlentities($CommentContent); ?></td>
              <td> <a href="approvecomments?id=<?php echo $CommentId;?>" class="btn btn-success">Approve</a>  </td>
              <td> <a href="deletecomments?id=<?php echo $CommentId;?>" class="btn btn-danger">Delete</a>  </td>
              <td style="min-width:140px;"> <a class="btn btn-primary"href="../fullpost?id=<?php echo $CommentPostId; ?>" target="_blank">Live Preview</a> </td>
            </tr>
          </tbody>
          <?php } ?>
          </table>
          <h2>Approved Comments</h2>
          <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th>No. </th>
                <th>Date&Time</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Approved by</th>
                <th>Revert</th>
                <th>Action</th>
                <th>Details</th>
              </tr>
            </thead>
          <?php
          global $ConnectingDB;
          $sql = "SELECT * FROM comments WHERE status='ON' ORDER BY id desc";
          $Execute =$ConnectingDB->query($sql);
          $SrNo = 0;
          while ($DataRows=$Execute->fetch()) {
            $CommentId         = $DataRows["id"];
            $DateTimeOfComment = $DataRows["datetime"];
            $CommenterName     = $DataRows["name"];
            $ApprovedBy        = $DataRows["approvedby"];
            $CommentContent    = $DataRows["comment"];
            $CommentPostId     = $DataRows["post_id"];
            $SrNo++;
          ?>
          <tbody>
            <tr>
              <td><?php echo htmlentities($SrNo); ?></td>
              <td><?php echo htmlentities($DateTimeOfComment); ?></td>
              <td><?php echo htmlentities($CommenterName); ?></td>
              <td><?php echo htmlentities($CommentContent); ?></td>
              <td><?php echo htmlentities($ApprovedBy); ?></td>
              <td style="min-width:140px;"> <a href="disapprovecomments?id=<?php echo $CommentId;?>" class="btn btn-warning">Dis-Approve</a>  </td>
              <td> <a href="deletecomments?id=<?php echo $CommentId;?>" class="btn btn-danger">Delete</a>  </td>
              <td style="min-width:140px;"> <a class="btn btn-primary"href="../fullpost?id=<?php echo $CommentPostId; ?>" target="_blank">Live Preview</a> </td>
            </tr>
          </tbody>
          <?php } ?>
          </table>
        </div>
      </div>
    </section>
   <!--  Main Area End -->
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
