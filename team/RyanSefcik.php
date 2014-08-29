<?php $thisPage="Ryan Sefcik"; $sub=1; ?>
<!DOCTYPE html>
<html lang="en"><head>
	
	<?php include_once("../includes/head.php") ?>
  
  </head>
  
  <body>
  
    <!-- Google Analytics -->
  	<?php include_once("../includes/analyticstracking.php") ?>
    
    <div id="wrap">
    
		<!-- NAVBAR
		================================================== -->
   		<?php include("../includes/navigation.php"); ?>

		    <!-- infomation
    ================================================== --> 
<div class="container marketing no-carousel"> 
	<div class="row">
	
		<div class="col-xs-12 col-md-4 pull-left" style="font-size:80%; text-align:center">
			<img src="../img/team/sefcikr.jpg" alt="Ryan Sefcik" style="max-width: 300px; height: auto; padding-bottom:0.5em"><br>
			Email: sefcik.16@osu.edu
		</div><!-- /.span -->
	
		<div class="col-xs-12 col-md-8">
			<h3>Ryan Sefcik</h3>
			<p>Started: September 2013</p>
			<p>Ryan Sefcik is a Biochemistry major at The Ohio State University, planning to graduate in Spring 2016. He is from Medina, Ohio. In the lab, Ryan involves in the ECM Thickness, Degradation and End-to-End 3-D Printing studies. He is also a member of Alpha Epsilon Delta Honorary. 
			</p>
			<br>
		</div><!-- /.span -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-xs-12">

			<div id="instafeed" class="row"></div><!-- /.row -->
		
		</div><!-- /span -->
	</div><!-- /.row -->
	
</div><!-- /.container -->
	
	   

</div><!-- /.wrap -->

       <!-- Footer
    ================================================== --> 
      <?php include("../includes/footer.php"); ?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/holder.js"></script>
    <script type="text/javascript" src="../js/instafeed.min.js"></script>
  	<script type="text/javascript">
		var feed = new Instafeed({
			limit: 60,
			resolution: 'standard_resolution',
			get: 'user',
			userId: 819085045,
			filter: function(image) {return image.tags.indexOf('rss16') >= 0;},
			accessToken: '819085045.467ede5.00775a54fc3d4f218b7f637ea3d8d24d',
			template: '<div class="col-xs-6 col-sm-2 col-md-2 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
		});
		feed.run();
		feed.next();
		feed.next();
		feed.next();
		feed.next();
	</script>
  

</body></html>