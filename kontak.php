<!DOCTYPE html>
<html lang="en">
<head>
	<style>

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nadella Wedding</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	 <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>	

				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>
	
	 <div class="carousel-item active">
                <img class="img-responsive" src="images/portfolio/title/1.png" alt="First slide" height="600">
                <div class="judul4">KONTAK</div></br>
                <a class="judul2" href="index.php">Halaman</a>
                <div class="judul3"> / Kontak</div>
                </div>
              </div>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-logo">
						<a href="index.html" class="brand">NadellaWedding</a>
					</div>
				</div>					  
				<div class="col-md-10">	 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							  <li><a href="index.php">Halaman</a></li>
							  <li><a href="portofolio.php">Portfolio</a></li>
							  <li><a href="layanan.php">Layanan</a></li>
							  <li><a href="kontak.php">Kontak</a></li>
							  <li><a href="login.php">Login</a></li>
						</ul>
					</div>
					<!-- /.Navbar-collapse -->		 
				</div>
			</div>
		</div>		
	</nav>

	<section id="features">
		<div class="container">
			<div class="row">
			
				
				<div class="col-md-4 wow fadeInLeft">
					<h3>Responsive</h3>
					<img src="images/portfolio/recent/item4.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInUp">
					<h3>Web Design</h3>
					<img src="images/portfolio/recent/item5.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Easy Customize</h3>
					<img src="images/portfolio/recent/item6.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>

				<div class="col-md-4 wow fadeInRight">
					<h3>Easy Customize</h3>
					<img src="images/portfolio/recent/item6.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
			</div>
		</div>		
	</section>

	<section id="contact">
		<div class="contact-page">
			<div class="container">
				<div class="center">        
					<h2>Sign up to be notified</h2>						
				</div> 
				
				<div class="row contact-wrap">						
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="wow fadeInDown">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Name *</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="number" class="form-control">
								</div>
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control">
								</div>                        
							</div>
						</div>
						<div class="wow fadeInRight">
							<div class="col-sm-5">
								<div class="form-group">
									<label>Subject *</label>
									<input type="text" name="subject" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Message *</label>
									<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
								</div>                        
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
								</div>
							</div>
						</div>
					</form> 
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/#contact-page-->		
	</section>	       
    
    	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">

					
                <div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
					</div>
                    &copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=OnePage
                    -->
                </div>
				
                <div class="top-bar">			
					<div class="col-lg-12">
					   <div class="social">
							<ul class="social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
					   </div>
					</div>
				</div>
			</div>
		</div>
    </footer><!--/#footer-->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/main.js"></script>
  </body>
</html>