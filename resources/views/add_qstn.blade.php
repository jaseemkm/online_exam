<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ABC Online Examination</title>
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
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="/home">Admin Only <em>.</em></a></div>
				</div>

				<!-- menu start here-->
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="/home">Home</a></li>
							<li class="has-dropdown">
								<!-- admin accessories-->
								<a href="#">Manage questions</a>
								<ul class="dropdown">
									<li><a href="/qstn">Add Qn</a></li>
									<li><a href="/remove_edit">Remove/Edit Qn</a></li>
									<li><a href="/instruction">Add insructions</a></li>
									<li><a href="/edit_instruction">Edit insructions</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
							<a href="#">Type</a>
							<ul class="dropdown">
							<li><a href="type.php?type=easy" onclick="alert(`you selected level easy.`)">EASY</a></li>
							<li><a href="type.php?type=medium" onclick="alert(`you selected level easy.`)">MEDIUM</a></li>
							<li><a href="type.php?type=hard" onclick="alert(`you selected level easy.`)">HARD</a></li>
							</ul>
							<li><a href="logout.php" onclick="alert(`you selected level easy.`)">Logout</a></li>

						</li>
					</div>
				</div>

		</div>
	</nav>
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row row-mt-15em">
						<div class="col-md-4 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Every child is Superb!</h1>
						</div>
						<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Add Your QUESTIONS</h3>
											<form action="/add_qstn" method="POST">
												{{ csrf_field() }}
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Enter your question</label>
														<input type="text" name="qstn" onfocus="this.value=''" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Type of Question</label>
														<select name="type" class="form-control">
															<option value="easy">Easy</option>
															<option value="medium">Medium</option>
															<option value="hard">Hard</option>
														</select>
													</div>
												</div>
                        <div class="row form-group">
													<div class="col-md-8">
														<label for="fullname">First Option</label>
														<input type="text" name="answer1" class="form-control">
                         </div>
                          <div class="col-md-4">
                         Correct answer?<input type="radio" name="canswr" value="1" class="form-control">
                        </div>
												</div>
                        <div class="row form-group">
                          <div class="col-md-8">
                            <label for="fullname">Second Option</label>
                            <input type="text" name="answer2" class="form-control">
													</div>
														<div class="col-md-4">Correct Answer?
                            <input type="radio" name="canswr" value="2" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-8">
                            <label for="fullname">Third Option</label>
                            <input type="text"name="answer3" class="form-control">
													</div>
														<div class="col-md-4">Correct Answer?
                            <input type="radio" name="canswr" value="3" class="form-control">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-8">
                            <label for="fullname">Fourth Option</label>
                            <input type="text" name="answer4"class="form-control">
													</div>
														<div class="col-md-4">Correct Answer?
                            <input type="radio" name="canswr" value="4" class="form-control">
                          </div>
                        </div>

              					

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Add" onclick="myFunction()">
														<!--popup box-->
													   	<script>
														    function myFunction()
                                 {alert("Question added successfully");}
                              </script>

													</div>
												</div>
											</form>
										</div>
									</div></div></div>
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
