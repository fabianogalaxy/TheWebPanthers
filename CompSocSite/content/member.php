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
    <head>
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
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark" role="navigation" style="background-color: #2a0744; ">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">NCI Computer Society</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="../index.php?page=contact">Contact</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer Support <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="forum.php">Forum</a>
                                </li>
                                <li>
                                    <a href="resorces.php">Resouces</a>

                                </li>
                            </ul>
                        </li></ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">   
                        <li>
                            <a>Member Score: <?php echo $userRow['score']; ?></a>
                        </li>
                    </ul> <ul class="dropdown-menu">
                                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                            </ul>
                </div>
            </div>
        </nav>

        <div id="wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i>MASTER COMPUTING QUIZ</h4>
                            </div>
                            <div class="panel-body">
                                <p>Computer quiz with questions about pc computer hardware, software and specifications, see how many you can answer correctly on the first try! Online questions about OS software code and specs. Share your score with the others members.  </p>
                                <a href="./content/quiz.php" class="btn btn-default">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><em class="fa fa-fw fa-check"></em> We have a BLOG</h4>
                            </div>
                            <div class="panel-body">
                                <p>Whether it's breaking tech news, an insider's point of view, or irreverent humor ... in the country started making their writers blog alongside their standard news stories. ... Find out more about Computer Science/IT.<br><br></p>
                                <a href="./content/blog.php" class="btn btn-default">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-compass"></i>Forum</h4>
                            </div>
                            <div class="panel-body">
                                <p> All help you can get from us here we share and help. Join our forum.</p>
                                <a href="./content/forum.php" class="btn btn-default">More</a>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; WebPanthers 2016</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php ob_end_flush(); ?>