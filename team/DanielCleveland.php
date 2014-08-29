<?php $thisPage="Daniel Cleveland"; $sub=1; ?>
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
			<img src="../img/team/clevelandd.jpg" alt="Daniel Cleveland" style="max-width: 300px; height: auto; padding-bottom:0.5em"><br>
			Email: cleveland.86@osu.edu
		</div><!-- /.span -->
	
		<div class="col-xs-12 col-md-8">
			<h3>Daniel Cleveland</h3>
			<p>Started: March 2014</p>
			<p>Daniel Cleveland is a Biomedical Engineering major at The Ohio State University, planning to graduate in Spring 2016. He is from Hudson, Ohio. He is also a member of the Fishbowl Improv student organization at Ohio State.
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
			filter: function(image) {return image.tags.indexOf('dmc86') >= 0;},
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