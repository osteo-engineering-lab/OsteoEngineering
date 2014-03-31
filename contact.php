<?php $thisPage="Contact"; ?>
<!DOCTYPE html>
<html lang="en"><head>
	
	<?php include_once("includes/head.php") ?>
  
  <!-- --------------------------------------------------------- Google Map stuff ---------------------------------------------------------- -->
  <style>
      #map-canvas {
        height: 300px;
        margin: 0px;
        padding: 0px
      }
	  #pano{
	  height: 300px;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
		function initialize() {
		    <!-- -------Map---------- -->
		  var BRT = new google.maps.LatLng(39.99601,-83.01944);
		  var mapOptions = {
			center: BRT,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  var map = new google.maps.Map(
			  document.getElementById('map-canvas'), mapOptions);
			  <!-- -------Pano---------- -->
		  var panoramaOptions = {
			position: BRT,
			pov: {
			  heading: 34,
			  pitch: 10
			}
		  };
		  var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'),panoramaOptions);
		  map.setStreetView(panorama);
		}

		google.maps.event.addDomListener(window, 'load', initialize);

    </script>


  </head>
  
  <body>
  
    <!-- Google Analytics -->
  	<?php include_once("includes/analyticstracking.php") ?>
	
	<div id="wrap">
    
    <?php include("includes/navigation.php"); ?>


		    <!-- infomation
    ================================================== --> 
	<div class="container marketing no-carousel"> 
		<div class="row">
			<div class="col-xs-12">	   
				<h2>Osteo Engineering Laboratory</h2>
<div class="col-sm-4">
<h3>Contact Us</h3>
<hr>
<address>
<strong><a target="_blank" href="http://plasticsurgery.osu.edu/" id="ftr_division_name">Department of Plastic Surgery</a></strong>
				<br />
				<a target="blank" href="http://www.osu.edu/map/building.php?building=112">Biomedical Research Tower</a>
				<br />
				460 West 12th Ave., Rm. 1004
				<br />
				Columbus, OH  43210 USA
				<br />
				Phone: 614-688-9044
				<br />
				Fax: 614-688-2195
				<br />
				<a target="blank" href="http://www.campusparc.com/osu/">Campus Parking Information</a>
</address>
</div>
    
<div class="col-sm-8 contact-form">
<form id="contact" method="post" class="form" role="form">
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
</div>
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
</div>
</div>
<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit">Submit</button>
</form>
</div>
</div>
</div>



				
				<hr>
				
			</div><!-- /span-->
				
			<!--Map -->
			<div class="col-xs-12">
					<div id="map-canvas" class="col-xs-12 col-sm-6"></div><!-- /span-->
					<div id="pano" class="col-xs-12 col-sm-6"></div><!-- /span-->
			</div><!-- /span-->
			
		</div><!-- /.row -->

	</div><!-- /.container -->   

</div><!-- /.wrap -->

       <!-- Footer
    ================================================== --> 
      <?php include("includes/footer.php"); ?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>

</body></html>