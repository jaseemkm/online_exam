
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Online Examination </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
    <div id="gtco-subscribe">
  		<div class="gtco-container">
  			<div class="row animate-box">
  				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
  					<h2>LOGIN</h2>
  					<p>Do It Once, Do It Right. Get It Over With!</p>
  				</div>
  			</div>
  			<div class="row animate-box">
  				<div class="col-md-8 col-md-offset-2">
  					<form method ="POST" action="/student_login" class="form-inline">
              {{ csrf_field() }}
  						<div class="col-md-6 col-sm-6">
  							<div class="form-group">
  								<input type="text" class="form-control" name="studentname"  placeholder="student Name"><br><br>
                 <input type="password" class="form-control" name="rollnumber" placeholder="RollNumber">
          <div class="col-md-6 col-sm-6">
            <br><button type="submit" name="submit" class="btn btn-default btn-block">Login</button>
          </div>
					</div>

  					</form>
  				</div>
  			</div>
  		</div>
  	</div>


    	<!-- jQuery -->
    	<script src="js/jquery.min.js"></script>
    	<!-- jQuery Easing -->
    	<script src="js/jquery.easing.1.3.js"></script>
    	<!-- Bootstrap -->
    	<script src="js/bootstrap.min.js"></script>
    	<!-- Waypoints -->
    	<script src="js/jquery.waypoints.min.js"></script>
    	<!-- Carousel -->
    	<script src="js/owl.carousel.min.js"></script>
    	<!-- countTo -->
    	<script src="js/jquery.countTo.js"></script>

    	<!-- Stellar Parallax -->
    	<script src="js/jquery.stellar.min.js"></script>

    	<!-- Magnific Popup -->
    	<script src="js/jquery.magnific-popup.min.js"></script>
    	<script src="js/magnific-popup-options.js"></script>

    	<!-- Datepicker -->
    	<script src="js/bootstrap-datepicker.min.js"></script>


    	<!-- Main -->
    	<script src="js/main.js"></script>

    	</body>
    </html>
