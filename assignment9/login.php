<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: admin.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CSC174 | Assignment 9 | Team Bangkok</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/slippry.css">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/color/default.css">

  <script src="assets/js/modernizr.custom.js"></script>
</head>

<body id="page-top">

  <header>
    
    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">UX Design Process</a>
        </div>

      </div>
    </div>
    
  </header>
  
  <div class="container">
      <h1 class="


      ">Administrator Log-in</h1>
      <p>Please fill in your credentials to login.</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <label>Username:<sup>*</sup></label>
              <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
              <span class="help-block"><?php echo $username_err; ?></span>
          </div>

          <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <label>Password:<sup>*</sup></label>
              <input type="password" name="password" class="form-control">
              <span class="help-block"><?php echo $password_err; ?></span>
          </div>

          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Submit">
          </div>
          
      </form>
  </div>    


      <div class="container">
      <button><a href="signup.php">Create Admin Account</a></button>
      </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Team Bangkok, 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom JavaScript for this theme -->
      <script src="js/scrolling-nav.js"></script>
      <script src="js/submit-form.js"></script>

</body>
</html>
