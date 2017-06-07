<!DOCTYPE html>
<html lang="en">
	<!--
	PWP for JCIT.INFO
	@author Jeffrey Cooper <jcooper37@cnm.edu>
	-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custome CSS -->
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css">

		<!-- Add FontAwesome -->
		<script src="https://use.fontawesome.com/1a5ce32ebc.js"></script>

		<!--		TODO: Add family for Google Fonts-->
		<!--		Add Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Cabin|Josefin+Sans|Josefin+Slab|Titillium+Web" rel="stylesheet">

		<!-- jQuery 3.0 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>Jeffrey Cooper</title>
	</head>
	<a name="page-top"></a>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand">
								<img alt="Jeffrey Cooper" src="JC-logo3.gif">
							</a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="#page-top">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#work">Experience</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>

			<main>
				<!--				Home Page-->
				<section  id="home-pad">
					<div class="container">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="jumbotron text-center">
											<h1 class="panel-title">Jeffrey Cooper</h1>
											<h2 class="panel-title">Software Developer</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-body">
								<div class="row" id="home-card">
									<div class="col-xs-12 col-md-4">
										<div class="card text-left" style="width: 16rem">
											<img class="card-img-top" src="images/screen-160x120.jpg" alt="Portfolio">
											<div class="card-block" id="card-port">
												<h4 class="card-title">Portfolio</h4>
												<p class="card-text">Building websites since 1999.</p>
												<a href="#portfolio" class="btn btn-primary">Portfolio</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="card text-left" style="width: 16rem">
											<img class="card-img-top" src="images/code-160x120.jpg" alt="Experience">
											<div class="card-block" id="card-exp">
												<h4 class="card-title">Experience</h4>
												<p class="card-text">Education | Skills | Interests</p>
												<a href="#work" class="btn btn-success">Experience</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="card text-left" style="width: 16rem">
											<img class="card-img-top" src="images/sheba-jeff-160x120.jpg" alt="Contact">
											<div class="card-block" id="card-contact">
												<h4 class="card-title">Contact</h4>
												<p class="card-text">Questions? Contact Jeffrey.</p>
												<a href="#contact" class="btn btn-danger">Contact</a>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Portfolio Page-->
				<a name="portfolio"></a>
				<section>
					<div class="container" id="port-pad">
					<div class="panel panel-primary">
						<div class="panel-heading">
								<h2 class="panel-title">Portfolio</h2>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-12">
										<p>For the past twenty years, Jeffrey Cooper has been building websites. What was once a hobby has now become a profession. The websites listed below were all built from scratch. Many more were built, maintained, rebuilt and expanded in industries such as Real Estate, Medical Services, Authors, Mental Health Services, Theater, Music, Workshops, Consultants and Schools to name a few.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="box1">
									<img src="images/pacrim.gif" alt="Pacific Rim Children/'s Chorus Festival">
									<p>The Pacific Rim Children's Chorus Festival was launched in 1999 as a new type of music festival that taught languages, cultures, inter-disciplinary arts and promoted global friendships through music. The company was founded by Jeffrey Cooper and became the most successful festival of its kind, setting a new bar for music festivals around the world. The Festival's website was the first to provide almost-live media to families back home, as well as pedagogical tools for over 5000 students.</p>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="box1">
										<img src="images/45hyoc.png" alt="Hawaii Youth Opera Chorus">
									<p>The Hawaii Youth Opera Chorus, founded in 1962, is the premier choral performance group for youth in Hawaii. Jeffrey Cooper built their first website in 2001 and rebuilt the site twice during his ten years working with this prestigious ensemble.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="box1">
										<img src="images/summerfun.png" alt="Summer Fun Camp">
									<p>A summer arts camp for kids, Summer Fun in Seattle, WA, helped launch the company in 1995. The website went through two iterations during his tenure. In addition to being the webmaster, he was also the Managing Director and Composer, having written five musicals that were staged and performed twice each summer for the public.</p>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="box1">
										<img src="images/newLogoC.gif" alt="Northwest Kodaly Educators">
									<p>The Northwest Kodaly Educators Association asked Jeffrey Cooper to build their first website in 2003. He served as their Webmaster and Technology Consultant for 9 years.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="box1">
										<img src="images/ccr.jpg" alt="Choral Conductors Retreat">
										<p>Dr. Rodney Eichenberger, a world-renowned choral music conductor, asked Jeffrey Cooper to build a web presence to promote his workshops and videos in 2002. A few years later, he purchased the company and launched their bi-coastal workshops in Oregon and Virginia. He rebranded and grew the company into the premier choral music retreat that it is today.</p>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="box1">
										<img src="images/gts.jpg" alt="Group Travel Services Hawaii">
										<p>Group Travel Services Hawaii is a company founded by Jeffrey Cooper in 2009. He served all of the technical needs and built their web presence. The company has grown to see a market capitalization of over 500K per year.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</section>
				<!-- Experience Section -->
				<a name="work"></a>
				<section id="exp-pad">
					<div class="container">
						<div class="title">
								<h2>Experience</h2>
						</div>
						<!--<div class="card">-->
						<div class="card text-center card-exp-bg">
							<div class="card-header">
								<ul class="nav nav-pills nav-header-pills">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="pill" href="#education" role="tab">Education</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href="#experience" role="tab">Experience</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href="#skills" role="tab">Skills</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="pill" href="#interests" role="tab">Interests</a>
									</li>
								</ul>
							</div>
							<div class="card-block" id="card-big-exp">
								<div class="tab-content">
									<div id="education" class="tab-pane fade in active" role="tabpanel">
										<h3>Education</h3>
										<h4>CNM STEMulus Center - 2017</h4>
										<p>Certification - Full Stack Web Developer</p>
										<h4>University of Washington - 1993-2003</h4>
										<p>Doctor of Musical Arts in Choral Conducting - Boeing Scholar 1998-99</p>
										<h4>University of Washington - 1993-99</h4>
										<p>Master of Arts in Choral Conducting</p>
										<h4>Pepperdine University - 1985–89</h4>
										<p>Bachelor of Arts - BA in Music, Vocal Performance, Music Education with a Minor in Theater - Magna cum laude</p>
									</div>
									<div id="experience" class="tab-pane fade" role="tabpanel">
													<h3>Experience</h3>
													<p>Whether as an entrepreneur, artist, programmer or consultant, Jeffrey Cooper has always sought new and challenging experiences. After graduating from college, he traveled throughout Europe and lived in Brussels, Belgium and Moscow, Russia. Upon returning to the US, he started his first company providing travel services overseas. While pursuing a career as a musician, he taught himself programming and soon had a secondary career building websites at the birth of the World Wide Web.</p>
										<p>In addition to starting several more successful companies, he became a professor and was an adjudicator for music festivals across the country. He managed several employees in each of his start-ups and worked as an Operations Manager for several other organizations.</p>
										<p>In all, he has built over 50 websites.</p>
									</div>
									<div id="skills" class="tab-pane fade" role="tabpanel">
													<h3>Skills</h3>
													<ul>
														<li>Web Development - Web Project Management</li>
														<li>PHP, mySQL, JavaScript, jQuery, Angular, RESTful Web Services, Secure Coding, UX-UI</li>
														<li>IT Services, Web Applications, Website Maintenance, Unit Testing, API Testing</li>
														<li>Professor, Teacher, Educator, Curriculum Development, Research, Music History, Music Theory</li>
														<li>Choral Conducting, Orchestral Conducting, Performing Arts, Theater, Music, Production, Musical Theater, Workshops</li>
														<li>Management, Operations, IT, Process Management, Personnel Management</li>
														<li>Marketing, Graphic Design, Videography, Photography, Copy Editing, Writing</li>
														<li>Board of Directors, Non-Profit Organization, Philanthropy</li>
													</ul>
									</div>
									<div id="interests" class="tab-pane fade" role="tabpanel">
													<h3>Interests</h3>
													<ul>
														<li>Computers and Technology</li>
														<li>Cinema, Theater, Recording and Podcasting</li>
														<li>Reading, language, history and politics</li>
														<li>Backpacking, camping, driving and riding trains</li>
														<li>Travel and cultures</li>
													</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Contact Form -->
				<a name="contact"></a>
				<section id="contact-pad">
					<div class="container">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h2 class="panel-title">Contact Jeffrey Cooper</h2>
							</div>
							<div class="panel-body">
								<div class="row panel-body">
									<div class="col-sm-6 col-sm-offset-3">
										<form id="contact-form" class="form-horizontal well" method="POST" action="php/mailer.php">
											<div class="form-group">
												<label for="name">Name</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
													<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
												</div>
											</div>
											<div class="form-group">
												<label for="email">Email address</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-envelope" aria-hidden="true"></i>
													</div>
													<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
												</div>
											</div>
											<div class="form-group">
												<label for="subject">Subject</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</div>
													<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject line">
												</div>
											</div>
											<div class="form-group">
												<label for="message">Message</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-comment" aria-hidden="true"></i>
													</div>
													<textarea class="form-control" rows="5" id="message" name="message"
																 placeholder="Compose your message"></textarea>
												</div>
											</div>
											<!-- Google reCAPTCHA -->
											<div class="g-recaptcha" data-sitekey="6LeH0CMUAAAAAKq5tT0ZEpfYX9Xs2LmAMQEReHhg"></div>

											<!-- Buttons -->
											<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
											<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
										</form>
									</div>
								</div>
							<!-- Empty form output area (error messages). -->
								<div class="row">
									<div class="=col-md-6">
										<div id="output-area"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- sfooter content -->
				<footer class="bg-info text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								Footer Information
							</div>
						</div>
					</div>
				</footer>
	</body>
</html>