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
<html lang="en">
<head> <script src= "../js/quiz.js"> </script>
    <meta charset="utf-8">
    <title>Quiz Builder</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="../css/quiz.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="background-color:black">
        <div class="row quiz "style="background-color:white";><div class="panel-body" >
            <div id ="output"  ></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><div id="btnPre" class="btn btn-primary pull-left">Prev</div></div>
            <div class="col-sm-6"><div id="btnNxt" class="btn btn-primary pull-right">Next</div></div>
        </div>
    </div>
    </div>
    
    <div class="container" >
        <div class="row quiz ">
            <div class="panel-body" >
     <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="btn btn-primary pull-right">
                          <a href="../index.php?page=member" style="color:yellow;">Member Area</a> 
                        </div>
                      </div>
    
    <ul class="nav nav-pills navbar-right">
  <li class="active"><a href="#">Hi <?php echo $userRow['userName']; ?></a></li>
  <li class="active"><a href="#">Emails <span class="badge">112</span></a></li>
  <li class="active"><a href="index.php?page=quiz">Your Score is <span class="badge"><?php echo $userRow['score']; ?></span></a></li>
  <li><a href="../content/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li> <hr/></div></div></div></div>
    
     <script src= "../js/quiz.js"> </script>
   
    
    <script>
        function quiz(){
            var score=document.getElementById("score").innerHTML;
            window.location.href="send.php?score="+score;
            
        }
                    
    </script>
    
    </body>
</html>