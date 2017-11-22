<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <title>UX Design Basics</title>
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href = "css/override.css" rel="stylesheet">
</head>


<body id="page-top">
  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">UX Design Process</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>      
    </div><!--container-->
  </nav>

  <!--<header class="bg-primary text-left">
    <div class="headersection">
      <h1>Survey</h1>
    </div>
  </header>-->


<!-- survey -->
		<section id="survey">
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
  				<input class="btn-lg text-white" type="submit" value="Submit" id="submit-no-reload">
  			</form>
      </div><!--container-->
    </section><!--survey-->

    <!-- Thank you message -->
    <section id="thank-message-container" class="hide">
      <div class="container">
        <h2 id="thank-message"></h2>
      </div>
    </section>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Team Bangkok, 2017</p>
        <button><a href="login.php">Admin Log-in</a></button>
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