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
          <a class="navbar-brand" href="index.php">UX Design Process</a>
        </div>

       </div>
    </div>

  </header>




<!-- survey -->
		<section>
      <div class="container">
  			<h2>Feedback Survey</h2>
  			<form method="post" action="index.php">
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

              <input type="checkbox" class="software" name="software[]" value="sketch" id="sketch">
              <label for="sketch">Sketch</label><br>

              <input type="checkbox" class="software" name="software[]" value="illustrator" id="illustrator">
              <label for="illustrator">Adobe Illustrator</label><br>

              <input type="checkbox" class="software" name="software[]" value="invision" id="invision">
              <label for="invision">Invision</label><br>

              <input type="checkbox" class="software" name="software[]" value="another" id="another">
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
  				<input class="button" type="submit" value="Submit" id="submit-no-reload">
  			</form>
      </div><!--container-->
    </section><!--survey-->

 <!-- Thank you message -->
    <section id="thank-message-container" class="hide">
      <div class="container">
        <h2 id="thank-message"></h2>
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

  <script src="js/scrolling-nav.js"></script>
  <script src="js/submit-form.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>















