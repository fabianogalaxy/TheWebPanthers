<?php
ob_start();
session_start();
require_once 'dbconnect.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
    --<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Web site Nci Computing Society ">
        <meta name="The WebPanthers Team" content="Project web aplication">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome - <?php echo $userRow['userName']; ?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"  />
        <link rel="stylesheet" href="../css/webpanthers.css" type="text/css" />
        <link href="../css/webpanthers.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>-->
    <body>

      
        <div id="wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i>MASTER COMPUTING QUIZ Hi <?php echo $userRow['userName']; ?></h4>
                            </div>
                            <div class="panel-body">
                                <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXX XXXX XXXX XXXXXXX XXXX XXXXX XXXX  </p>
                                <a href="../index.php?page=member" class="btn btn-default">Member Area</a>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>

        </div>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/validate_email.js"></script></body>


</body>
</html>
<?php ob_end_flush(); ?>