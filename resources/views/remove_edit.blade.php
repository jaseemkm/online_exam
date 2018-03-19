<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ABC Online Examination|</title>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.btn {
	    border: none;
	    color: white;
	    padding: 5px 28px;
	    font-size: 10px;
	    cursor: pointer;
	}

	.success {background-color: #4CAF50;} /* Green */
	.success:hover {background-color: #46a049;}


	.danger {background-color: #f44336;} /* Red */
	.danger:hover {background: #da190b;}


	#customers {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	#customers td, #customers th {
	    border: 1px solid #ddd;
	    padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	    padding-top: 12px;
	    padding-bottom: 12px;
	    text-align: left;
	    background-color: #4CAF50;
	    color: white;
	}


	</style>
	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="/home">Home <em>.</em></a></div>
				</div>

		</div>
	</nav>



	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-9 col-md-offset-0 text-left">


					<div class="row row-mt-15em">
						<!--<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>
						</div>-->
						<div class="col-md-12 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>ABC Exam</h3>
												<div>



						<table id='customers' border='1' bold><tr>
			<td>QNID</td>
			<td>Question</td>
			<td>REMOVE</td>
			<td>EDIT</td></tr>
		

				@foreach ($details as $result)	    
			  <div style='overflow-x:auto;'><tr><td>
				  			    {{$result->qstnid}}<br/></td><td>
			    {{$result->question}}<br/>
			  <td><a href='/removeq/{{$result->qstnid}}'>
				<button class='btn danger' onclick='myFunction()'>Remove</button></a></td>
 <td><a href='/edit_qstn/{{$result->qstnid}}'>
 <button class='btn success'>Edit</button></a></td></div>
 		</td></tr>
 		@endforeach
			   
			
								<!--popup box-->
					<script>
						function myFunction()
						 {alert("Question remved");}
					</script>
</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>



							</div>
						</div>
					</div>


						</div>
					</footer>
					<!-- </div> -->

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
