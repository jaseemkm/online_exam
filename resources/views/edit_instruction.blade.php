
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ABC online examination</title>
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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div class="gtco-loader"></div>

		<div id="page">
		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="home.php">Admin Only <em>.</em></a></div>
					</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li class="has-dropdown">
									<a href="#">Manage questions</a>
									<ul class="dropdown">
										<li><a href="qstn.html">Add Qn</a></li>
										<li><a href="delq.php">Remove/Edit Qn</a></li>
										<li><a href="instruction.html">Add insructions</a></li>
										<li><a href="eeditinst.html">Edit insructions</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
								<a href="#">Type</a>
								<ul class="dropdown">
								<li><a href="type.php?type=easy">EASY</a></li>
								<li><a href="type.php?type=medium">MEDIUM</a></li>
								<li><a href="type.php?type=hard">HARD</a></li>
								</ul>
								<li><a href="logout.php">Logout</a></li>
							</li>
						</div>
					</div>
			</div>
		</nav>
	<div class="gtco-loader"></div>
	<div id="page">
	        <div id="gtco-subscribe">
      		<div class="gtco-container">
      			<div class="row animate-box">
      				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
      					<h2>Instruction</h2>
      					<p>Tee it high. Let it fly.</p>
      				</div>
      			</div>
      			<div class="row animate-box">
      				<div class="col-md-8 col-md-offset-">
								
								<form class="form-inline"  method="POST" action="/edit_instruction">
									{{ csrf_field() }}

									<input type="hidden" name='id' value="{{$instruction->id}}">
      						<div class="col-md-9 col-sm-3">
      							<div class="form-group">
      								<label for="email" class="sr-only">Email</label>
      							Enter the new instruction.
                    	<input type="textarea" class="form-control" name="instruction" value="{{$instruction->instruction}}">
      							</div>
      						</div>
      						<div class="col-md-6 col-sm-6">
      							<button type="submit" name="submit"class="btn btn-default btn-block" onclick="myFunction()">ADD</button>
      						</div>
      					</form>
      				</div>
      			</div>
      		</div>
      	</div>
  </body>
<script>
	function myFunction()
	 {alert("Instruction edited successfully");}
</script>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="../js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>

<!-- Datepicker -->
<script src="../js/bootstrap-datepicker.min.js"></script>


<!-- Main -->
<script src="../js/main.js"></script>

</body>
</html>
</html>
