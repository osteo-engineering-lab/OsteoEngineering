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
				<h2>Contact Us</h2>
				<form action="includes/contact" method="post">
					Your name<br>
					<input type="text" name="cf_name"><br>
					Your e-mail<br>
					<input type="text" name="cf_email"><br>
					Message<br>
					<textarea rows="10" cols="60" name="cf_message"></textarea><br>
					<input type="submit" value="Send">
					<input type="reset" value="Clear">
				</form>

				<hr>

				<h3> Dean Lab </h3>
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