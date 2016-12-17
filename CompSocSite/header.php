<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Web site Nci Computing Society ">
        <meta name="The WebPanthers Team" content="Project web aplication">
        <title><?php echo titulos();?></title>
        <link href="css/webpanthers.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                    <a class="navbar-brand" href="?page=home">NCI Computer Society</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="?page=about">About Us</a>
                        </li>
                        
                        <li>
                            <a href="?page=event">Events</a>
                        </li>
                        <li>
                            <a href="?page=contact">Contact</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer Support <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="?page=blog">Blog</a>
                                </li>
                                <li>
                                    <a href="?page=forum">Forum</a>
                                </li>
                                <li>
                                    <a href="?page=resouces">Resouces</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=member">Member</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <script src="js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/validate_email.js"></script>
    </body>
</html>