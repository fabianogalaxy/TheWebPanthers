<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  if (!isset($_SESSION['user'])) {
      header("Location: ./content/login.php");
      exit;
  }
  $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
  $userRow = mysqli_fetch_array($res);
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome -<?php echo $userRow['userName']; ?></title>
</head>
<body>
<ul class="nav nav-pills navbar-right">
  <li class="active"><a href="#">Hi <?php echo $userRow['userName']; ?></a></li>
  <li class="active"><a href="#">Emails <span class="badge">112</span></a></li>
  <li class="active"><a href="index.php?page=quiz">Your Score is <span class="badge"><?php echo $userRow['score']; ?></span></a></li>
  <li><a href="./content/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
</ul>
<div id="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-fw fa-check"></i>MASTER COMPUTING QUIZ</h4>
          </div>
          <div class="panel-body">
            <p>Computer quiz with questions about pc computer hardware, software and specifications, see how many you can answer correctly on the first try! Online questions about OS software code and specs. Share your score with the others members. </p>
            <a href="./content/quiz.php" class="btn btn-default">More</a> </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><em class="fa fa-fw fa-check"></em> We have a BLOG</h4>
          </div>
          <div class="panel-body">
            <p>Whether it's breaking tech news, an insider's point of view, or irreverent humor ... in the country started making their writers blog alongside their standard news stories. ... Find out more about Computer Science/IT.<br>
              <br>
            </p>
            <a href="./content/blog.php" class="btn btn-default">More</a> </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-fw fa-compass"></i>Forum</h4>
          </div>
          <div class="panel-body">
            <p> All help you can get from us here we share and help. Join our forum.</p>
            <a href="./content/forum.php" class="btn btn-default">More</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jqBootstrapValidation.js"></script> 
<script src="../js/validate_email.js"></script>
</body>
</body>
</html>
<?php ob_end_flush(); ?>