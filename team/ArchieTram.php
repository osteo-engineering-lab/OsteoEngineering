<?php $thisPage="Archie Tram"; $sub=1; ?>
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
			<img src="../img/team/trama.jpg" alt="Archie Tram" style="max-width: 300px; height: auto; padding-bottom:0.5em"><br>
			Email: tram.2@osu.edu
		</div><!-- /.span -->
	
		<div class="col-xs-12 col-md-8">
			<h3>Archie Tram</h3>
			<p>Started: September 2013</p>
			<p>Archie Tram is a Biomedical Engineering major at The Ohio State University, planning to graduate in Spring 2016. He grew up in Ho Chi Minh City, Vietnam and came to Boston, Massachusetts for high school when he was 16. He works primarily on the lab website. He also works as a Resident Advisor for University Housing and in Member Services for Recreational Sports. 
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
			filter: function(image) {return image.tags.indexOf('nxt2') >= 0;},
			accessToken: '819085045.467ede5.00775a54fc3d4f218b7f637ea3d8d24d',
			template: '<div class="col-xs-6 col-sm-2 col-md-2 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
		});
		feed.run();
	</script>

</body></html>