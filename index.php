<?php $thisPage="Home"; ?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"><head>
	
	<?php include_once("includes/head.php") ?>
  
  </head>
  
  <body>
  
    <!-- Google Analytics -->
  	<?php include_once("includes/analyticstracking.php") ?>
    
    <div id="wrap">
    
		<!-- NAVBAR
		================================================== -->
		<?php include("includes/navigation.php"); ?>

		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide">
			
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			
			<div class="carousel-inner">

				<!-- Item 1 -->
				<div class="item active">
					<img alt="Osteo Engineering Team" src="img/home/hero0.jpg">
					<div class="container">
						<div class="carousel-caption">
							
							<h2>Welcome!</h2>
							<p><a class="btn btn-lg btn-primary" href="#anchor-01" role="button">Learn More</a></p>
						
						</div><!-- /.carousel-caption -->
					</div><!-- /.container -->
				</div><!-- /.item -->

				<!-- Item 2 -->
				<div class="item">
					<img alt="Osteo Engineering Team" src="img/home/hero1.jpg">
					<div class="container">
						<div class="carousel-caption">
							
							<h2>Join The Team!</h2>
							<p>We're always looking for great people to work with us.</p>
							<p><a class="btn btn-lg btn-primary" href="jobs" role="button">Learn More</a></p>
						
						</div><!-- /.carousel-caption -->
					</div><!-- /.container -->
				</div><!-- /.item -->

				<!-- Item 2b -->
				<div class="item">
					<img alt="T2C regenerative medicine nbc nbc4" src="img/home/hero1b.png">
					<div class="container">
						<div class="carousel-caption">
							
							<h2>Feature: Interview for nationwide conference on regenerative medicine.</h2>
							<p>NBC4</p>
							<p><a target="_blank" class="btn btn-lg btn-primary" href="http://www.nbc4i.com/story/24968491/physicians-gather-in-columbus-for-nationwide-conference-on-regenerative-medicine" role="button">Learn More</a></p>
						
						</div><!-- /.carousel-caption -->
					</div><!-- /.container -->
				</div><!-- /.item -->

				<!-- Item 3 -->
				<div class="item">
					<img alt="TiO2 Irgacure 819 PPF Scaffolds" src="img/home/hero2.jpg">
					<div class="container">
						<div class="carousel-caption">
							
							<h2>Feature: 3-D printers help doctors custom-fit medical devices.</h2>
							<p>The Plain Dealer</p>
							<p><a target="_blank" class="btn btn-lg btn-primary" href="http://www.cleveland.com/healthfit/index.ssf/2012/03/3-d_printers_help_doctors_cust.html" role="button">Learn More</a></p>
						
						</div><!-- /.carousel-caption -->
					</div><!-- /.container -->
				</div><!-- /.item -->

				<!-- Item 4 -->
				<div class="item">
					<img alt="Irgacure 784 Irgacure 819 PPF Scaffolds" src="img/home/hero3.jpg">
					<div class="container">
						<div class="carousel-caption">
							
							<h2>Feature: Growing our cures cell by cell in the lab</h2>
							<p>The Columbus Dispatch</p>
							<p><a target="_blank" class="btn btn-lg btn-primary" href="http://www.dispatch.com/content/stories/science/2013/11/17/1-growing-our-cures-cell-by-cell-in-the-lab.html" role="button">Learn More</a></p>
						
						</div><!-- /.carousel-caption -->
					</div><!-- /.container -->
				</div><!-- /.item -->

			</div><!-- /.carousel-inner -->
			
			<!-- Carousel controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		
		</div><!-- /.carousel -->


		<!-- About us
   		================================================== --> 
       
		<div class="container marketing">  

			<div class="row">
				<div class="col-xs-12 col-md-8">
			
					<a id="anchor-01"></a>
					<h2>About Us</h2>
					<p>Welcome to the Dean Lab website. The Dean Lab focuses on providing tools for the surgical reconstruction or regeneration of craniofacial skeletal tissues. 
					Our research includes the use of locally developed implant Computer Aided Design (CAD) software to prepare patient-specific implants, implant components, and surgical devices that are rendered via additive manufacturing (3D printing).
					We have used these techniques to prepare restorative but inert (i.e., non-resorbing) cranial implants for patients. However, a major focus of our preclinical research program has been the 3D printing of resorbable scaffolds.
					We then seed cells, for example Mesenchymal Stem Cells (MSCs) and/or vascular progenitor cells, onto those solid, 3D printed polymer scaffolds or within hydrogels. Those constructs may then be cultured, perhaps in a bioreactor, before implantation. 
					The intent of pre-culturing scaffolds is to fill and/or coat them with tissue that the body perceives as a “tissue engineered bone graft”.</p>
			
					<div class="responsive-iframe-container">
						<a class="twitter-timeline" href="https://twitter.com/OsteoEngineer" data-widget-id="445647602290135040">Tweets by @OsteoEngineer</a>
					</div>
					<br />
				</div><!-- /span -->
				
				<div class="col-xs-12 col-md-4">
					<div class="row">
						<div class="col-xs-12">
							<h4  class="pull-left">Follow Us On Instagram!</h4>
							<a href="http://instagram.com/deanlab?ref=badge" class="ig-b- ig-b-32 pull-right"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a>
						</div><!-- /span -->
					</div><!-- /.row -->
					
					<div id="instafeed" class="row"></div><!-- /.row -->
				</div><!-- /span -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	
	   

	</div><!-- /.wrap -->

       <!-- Footer
    ================================================== --> 
	<?php include("includes/footer.php"); ?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/holder.js"></script>
  	<script type="text/javascript" src="js/instafeed.min.js"></script>
  	<script type="text/javascript">
		var feed = new Instafeed({
			limit: 24,
			resolution: 'standard_resolution',
			get: 'user',
			userId: 819085045,
			accessToken: '819085045.467ede5.00775a54fc3d4f218b7f637ea3d8d24d',
			template: '<div class="col-xs-6 col-sm-3 col-md-4 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
		});
		feed.run();
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body></html>