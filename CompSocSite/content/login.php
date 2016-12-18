<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  
  if (isset($_SESSION['user']) != "") {
      header("Location: ./content/login");
      exit;
  }
  
  $error = false;
  
  if (isset($_POST['btn-login'])) {
  
      $email = trim($_POST['email']);
      $email = strip_tags($email);
      $email = htmlspecialchars($email);
  
      $pass = trim($_POST['pass']);
      $pass = strip_tags($pass);
      $pass = htmlspecialchars($pass);
  
      if (empty($email)) {
          $error = true;
          $emailError = "Please enter your email address.";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error = true;
          $emailError = "Please enter valid email address.";
      }
  
      if (empty($pass)) {
          $error = true;
          $passError = "Please enter your password.";
      }
  
     
      if (!$error) {
  
          $password = hash('sha256', $pass); 
  
          $res = mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
          $row = mysqli_fetch_array($res);
          $count = mysqli_num_rows($res); 
  
          if ($count == 1 && $row['userPass'] == $password) {
              $_SESSION['user'] = $row['userId'];
              header("Location: ../index.php?page=member");
          } else {
              $errMSG = "Incorrect Credentials, Try again...";
          }
      }
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LOGIN COMPSOC</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="../css/webpanthers.css" type="text/css" />
  </head>
  <body>
    <div class="container">
      <div class="login-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
          <div class="col-md-12">
              <div class="col-md-12">
            <div class="login-header">
              <h1><b>Login</b></h1>
            </div>
            <div class="form-group">
              <hr />
            </div>
            <?php
              if (isset($errMSG)) {
                  ?>
            <div class="form-group">
              <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?> </div>
            </div>
            <?php
              }
              ?>      
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span> 
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span> 
              </div>
            </div>
            <div class="form-group">
              <hr />
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="btn-login">Login</button></div>
                <hr/> <hr/>
                 <div class="col-md-4">
                     <a href="register.php" class="btn btn-primary" style="color:yellow;">Sign Up Here!</a></div>
                                <div class="col-md-4"><div style="color:red;" class="btn btn-primary">  
             <input class="send_btn" type="reset" /></a> </div> </div>
                <div class="col-md-4">
                     <a href="../index.php" class="btn btn-primary" style="color:yellow;">Home NCI</a></div>
            
                
                
 
                
                
                
                <hr>
                <hr>
              </div>
          </div> 
        </form>
      </div>
        </div>
      <hr>
      
      
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright &copy; WebPanthers 2016</p>
      </div>
    </div>
  </div>
</footer>
            <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/validate_email.js"></script>
            <script src="js/panthers.js"></script>
    
  </body>
</html>
<?php ob_end_flush(); ?>