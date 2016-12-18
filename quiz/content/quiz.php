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
<head>
    <meta charset="utf-8">
    <title>Quiz Builder</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="../css/webpanthers.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row quiz">
            <div id ="output"></div>
        </div>
        <div class="row">
            <div class="col-sm-6"><div id="btnPre" class="btn btn-primary pull-left">Prev</div></div>
            <div class="col-sm-6"><div id="btnNxt" class="btn btn-primary pull-right">Next</div></div>
        </div>
    </div>
    <script src= "../js/quiz.js"> </script>
    <script>
        function quiz(){
            var score=document.getElementById("score").innerHTML;
            window.location.href="send.php?score="+score;
            
        }
    
    </script>
    
    </body>
</html>