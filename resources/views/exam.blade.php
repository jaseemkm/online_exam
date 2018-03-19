<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ABC Examination</title>
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
					<div id="gtco-logo"><a href="index.php">Home <em>.</em></a></div>
				</div>

		</div>
	</nav>



	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-9 col-md-offset-0 text-left">

<!-- Exam start from here-->
					<div class="row row-mt-15em">
						<div class="col-md-12 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>ABC Exam</h3>
												<div>


							   						<span id="remain"></span>
									  				<form action="/score" method="post" id="form1" name="form1">
									  					{{ csrf_field() }}
										  			<script type="text/javascript">
											  		window.onload=counter;
												  	function counter()
													 {
													  seconds = 60;
													  countDown();
													 }

													 function countDown(){
													 document.getElementById("remain").innerHTML=seconds;
													 setTimeout("countDown()",1000);
													   if(seconds == 0)
													    {
													      document.form1.submit();
													    }else {
													    seconds--;
													    }
													}
													</script>
													</body>
													</html>

						  <?php $i=1;
							$a=0; ?>
                          <form method="POST" action="/score">

                          	{{ csrf_field() }}
	                       @foreach($questions as $question)
<?php $a++ ?>
	                       <td><tr><?php echo $a ?>

	                       	{{ $question->question }}
	                       	</tr></td>
	                       	<br>


	                       	<ul>
	                       	@foreach($question->answers as $answer)
	                       	    <input type="radio" name="answer{{$i}}" value='{{$answer->correct_answer}}'>
	                       		<li>{{ $answer->answers }}</li>
	                       	@endforeach
	                       	</ul>
	                       	<?php $i++; ?>
                           @endforeach


                          <br><br>	<div class="row form-group">
    													<div class="col-md-5">
    														<input type="submit" class="btn btn-primary btn-block" value="Submit">

                         </form>


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
<!--/exam end here -->


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
