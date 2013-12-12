<?php $thisPage="Contact"; ?>
<!DOCTYPE html>
<html lang="en"><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Osteo Engineering Lab | Dept. of Plastic Surgery</title>
	
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/osteo.css" rel="stylesheet"/>
  
  <!-- Google Map stuff -->
  <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var BRT = new google.maps.LatLng(39.99601,-83.01944);
  var mapOptions = {
    center: BRT,
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(
      document.getElementById('map-canvas'), mapOptions);
  var panoramaOptions = {
    position: BRT,
    pov: {
      heading: 34,
      pitch: 10
    }
  };
  var panorama = new  google.maps.StreetViewPanorama(document.getElementById('pano'),panoramaOptions);
  map.setStreetView(panorama);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


  </head>
  

<!-- NAVBAR
================================================== -->
  <body>
     <div id="wrap">
    
   <?php include("includes/navigation.php"); ?>


		    <!-- infomation
    ================================================== --> 
 <div class="container marketing no-carousel"> 
	   
	<h2>Contact Us</h2>
	<form action="includes/contact.php" method="post">
	Your name<br>
    <input type="text" name="cf_name"><br>
	Your e-mail<br>
    <input type="text" name="cf_email"><br>
	Message<br>
    <textarea name="cf_message"></textarea><br>
	<input type="submit" value="Send">
	<input type="reset" value="Clear">
</form>

<hr>

<h3> Dean Lab </h3>
<strong>
                <a target="_blank" href="http://plasticsurgery.osu.edu/" id="ftr_division_name">
                    Department of Plastic Surgery</a></strong>
			<br />
			Biomedical Research Tower
            <br />
            460 West 12th Ave., Rm. 1004
            <br />
            Columbus, OH  43210 USA
            <br />
            Phone: 614-688-9044
            <br />
<hr>
<!--Map -->
<div id="container" style="height:320px">
 <div id="map-canvas" style="float:left; width: 400px; height: 300px"></div>
 <div id="pano" style="float:left; width: 400px; height: 300px"></div>
</div>
	

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