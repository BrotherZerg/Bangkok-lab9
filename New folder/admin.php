<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<?php
	session_start();
	include 'connection.php';


	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM uxsurvey ";
	$query .= "ORDER BY created_at DESC";


	$result = mysqli_query($connection, $query);

?>

<!doctype html>
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

<body>
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
          <a class="navbar-brand" href="index.html">UX Design Process</a>
          <a class="signout" href="logout.php">Sign Out</a>
        </div>

       </div>
    </div>

  </header>

	<section id="tablebody">
		<div class="container">
	<table class= "table table-striped">
    <!--Table head-->
			<thead>
    		<tr>
		    	<th  style="width: 5%;">ID</th>
		    	<th  style="width: 10%;">First name</th>
		    	<th  style="width: 10%;">Last name</th>
		    	<th  style="width: 16%;">Email</th>
		    	<th id="table-q1"  style="width: 15%;">Software</th>
		    	<th id="table-q2"  style="width: 8%;">Helpfulness</th>
		    	<th id="table-q3"  style="width: 20%;">Feedback</th>
					<th  style="width: 6%;">Edit</th>
					<th  style="width: 10%;">Delete</th>
    		</tr>
			</thead>
			<tbody>
<?php
	// 3. Use returned data (if any)
	while($uxsurvey = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr id="<?php echo $uxsurvey["ID"]; ?>">
			<th><?php echo $uxsurvey["ID"]; ?></th>
			<td><?php echo $uxsurvey["first_name"]; ?></td>
			<td><?php echo $uxsurvey["last_name"]; ?></td>
			<td><?php echo $uxsurvey["email"]; ?></td>
			<td><?php echo $uxsurvey["software"]; ?></td>
			<td><?php echo $uxsurvey["helpful"]; ?></td>
			<td><?php echo $uxsurvey["recommendation"]; ?></td>
			<td><a class="update" data-id="<?php echo $uxsurvey["ID"] ?>" data-fname="<?php echo $uxsurvey["first_name"] ?>"
				data-lname="<?php echo $uxsurvey["last_name"] ?>" data-email="<?php echo $uxsurvey["email"] ?>"
				data-recs="<?php echo $uxsurvey["recommendation"] ?>" data-helpful="<?php echo $uxsurvey["helpful"] ?>"
				data-software="<?php echo $uxsurvey["software"] ?>" href="#">Edit</a></td>
			<td><a class="delete" data-container="<?php echo $uxsurvey["ID"] ?>" href="#">Delete</a></td>
			<!-- confirm code from https://stackoverflow.com/questions/9139075/how-to-show-a-confirm-message-before-delete -->
		</tr>

<?php } ?>
	</tbody>
	</table>
	<!-- delete success message -->
	<div id="delete-msg"></div>

	 <!-- Thank you message for the update form-->
	 <section id="thank-message-container" class="hide">
      <div class="container">
        <h2 id="thank-message"></h2>
      </div>
	</section>

	 <!-- Error messages-->
	 <section id="error-msg-fname" class="hide">
      <div class="container">
        <h2>Your first name is required!</h2>
      </div>
	</section>
	<section id="error-msg-lname" class="hide">
      <div class="container">
        <h2>Your last name is required!</h2>
      </div>
	</section>
	<section id="error-msg-email" class="hide">
      <div class="container">
        <h2>Your email is required!</h2>
      </div>
	</section>
	<!-- update form -->

	 <section id="survey" class="hide">
      <div class="container">
  			<h2 id="title-edit"></h2>
  			<form method="post" action="update.php">
          <div class="row">
            <div class="col-sm-4 mx-auto">
      				<label for="fname">First Name: </label>
      				<input type="text" name="fname" id="fname" required><br>
            </div>
            <div class="col-sm-4 mx-auto">
              <label for="lname">Last Name: </label>
              <input type="text" name="lname" id="lname"><br>
            </div>
            <div class="col-sm-4 mx-auto">
    				      <label for="email">Email: </label>
    				      <input type="email" name="email" id="email" required><br><br>
            </div>
          </div>
  				<!--Checkboxes-->
          <div class="row">
            <div class="col-md-4 mx-auto">
              What design software do you use? <br>
            </div>
            <div class="col-md-4 mx-auto">
              <input type="checkbox" class="software" name="software[]" value="balsamiq" id="balsamiq">
              <label for="balsamiq">Balsamiq</label><br>

              <input type="checkbox" class="software" name="software[]"value="sketch" id="sketch">
              <label for="sketch">Sketch</label><br>

              <input type="checkbox" class="software" name="software[]"value="illustrator" id="illustrator">
              <label for="illustrator">Adobe Illustrator</label><br>

              <input type="checkbox" class="software" name="software[]" value="invision" id="invision">
              <label for="invision">Invision</label><br>

              <input type="checkbox" class="software" name="software[]"value="another" id="another">
              <label for="another">Another app</label><br>

              <input type="checkbox" class="software" name="software[]" value="none" id="none">
              <label for="none">I don't use any design software</label><br><br>
            </div>
            <div class="col-md-4 mx-auto">
            </div>
          </div>

          <div class="row">
    				<!--Radio Buttons-->
    				<div class="col-md-4 mx-auto">
    				      The information on this page was helpful: <br>
            </div>
            <div class="col-md-4 mx-auto">
    				<input type="radio" class="helpful" name="helpful" value="1" id="radio1">
    				<label for="radio1">1-Strongly Disagree</label><br>

    				<input type="radio" class="helpful" name="helpful" value="2"  id="radio2">
    				<label for="radio2">2-Disagree</label><br>

    				<input type="radio" class="helpful" name="helpful" value="3"  id="radio3">
    				<label for="radio3">3-Neutral</label><br>

    				<input type="radio" class="helpful" name="helpful" value="4"  id="radio4">
    				<label for="radio4">4-Agree</label><br>

    				<input type="radio" class="helpful" name="helpful" value="5"  id="radio5">
    				<label for="radio5">5-Strongly Agree</label><br><br>
          </div>
          <div class="col-md-4">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
  				<label for="recs">Do you have any recommendations for our site? </label><br>
  				<textarea name="recs" id="recs" rows="8" cols="80"></textarea><br><br>
        </div>
        </div>
  				<input data-forupdate='whatever' class="btn-lg text-white" type="submit" value="Submit" id="submit-no-reload">
  			</form>
      </div>
	</section><!--survey-->

	<br>
	<a href="index.php" class="btn-lg text-white">Back to the previous form</a>
	</div>
	</section>


  
<!--footer -->
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>Copyright &copy; 2017 - This webpage is created by Team Bangkok
              <br>
                Here is a reference we used for assignment 9:
                <a href="http://urcsc174.org/bangkok/CSC174_Lab08_UserSurvey/">CSC174_Lab08_UserSurvey</a></li>

                <a href="login.php" class="button">Login</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>
    <script src="js/delete.js"></script>

    <script src="js/click-handling.js"></script>
    <script src="js/update-form.js"></script>
    <script src="js/hover-tip.js"></script>

  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
