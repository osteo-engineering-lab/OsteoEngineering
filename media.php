<?php $thisPage="Media"; ?>
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
			
			<div class="row">				
				<div class="col-xs-12 col-md-12">
					<div id="instafeed" class="row"></div><!-- /.row -->
				</div><!-- /span -->
			</div><!-- /.row -->
		
		</div><!-- /.carousel -->


		<!-- About us
   		================================================== --> 
       
       <div class="container marketing no-carousel"> 
	
	<!-- START THE FEATURETTES -->

		<div class="row">				
			<div class="col-xs-12 col-md-12">
				<div id="instafeed" class="row"></div><!-- /.row -->
			</div><!-- /span -->
		</div><!-- /.row -->

      <hr class="featurette-divider">
	  <h1>News Videos</h1>
	  <hr class="featurette-divider">
      <div class="row featurette">
        <div class="video-container-media col-md-6 col-xs-12 pull-left">
			<iframe src="//player.vimeo.com/video/99341505?color=ffffff" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>        </div>
        <div class="col-md-6">
          <h2>Feature: Ohio State Researchers Lead 3D Printing Movement.<br><span class="text-muted">WCMH-TV/4</span></h2>
        </div>
      </div>
	  
	  <br>
	  <hr class="featurette-divider">
      <div class="row featurette">
        <div class="video-container-media col-md-6 col-xs-12 pull-left">
			<iframe src="//player.vimeo.com/video/99341504?color=ffffff" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
        <div class="col-md-6">
          <h2>Feature: Interview for nationwide conference on regenerative medicine.<br><span class="text-muted">NBC4</span></h2>
        </div>
      </div>
	  
	  <br>
	  <hr class="featurette-divider">
	  <h1>News Articles</h1>
	  <hr class="featurette-divider">
	  <div class="row">
        <div class="col-md-6">
          <h2>Feature: Advances in Stem Cell, Organ Printing, Tissue Engineering Changing Healthcare, Saving Lives.</h2>
          <p>Ohio State College of Medicine.</p>
          <p><a class="btn btn-default" href="http://www.medicalcenter.osu.edu/mediaroom/releases/Pages/Advances-in-Stem-Cell,-Organ-Printing,-Tissue-Engineering-Changing-Healthcare,-Saving-Lives-.aspx#sthash.dxIIh6Bf.dpuf" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Feature: Growing our cures cell by cell in the lab</h2>
          <p>The Columbus Dispatch.</p>
          <p><a class="btn btn-default" href="http://www.dispatch.com/content/stories/science/2013/11/17/1-growing-our-cures-cell-by-cell-in-the-lab.html" role="button">View details &raquo;</a></p>
       </div>
      </div>
	  
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
			limit: 18,
			resolution: 'standard_resolution',
			get: 'user',
			userId: 819085045,
			accessToken: '819085045.467ede5.00775a54fc3d4f218b7f637ea3d8d24d',
			template: '<div class="col-xs-2 col-sm-2 col-md-2 insta"><a href="{{link}}"><img class="img-responsive" src="{{image}}" /></a></div>'
		});
		feed.run();
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body></html>