<?php $thisPage="Home"; ?>
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
  
  
  </head>
  

<!-- NAVBAR
================================================== -->
  <body>
     <div id="wrap">
    
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
	  
        <div class="item active">
          <img src="img/home/hero0.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Welcome!</h2>
              <p><a class="btn btn-lg btn-primary" href="#anchor-01" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
		
        <div class="item">
          <img src="img/home/hero1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Join The Team!</h2>
              <p>We're always looking for great people to work with us.</p>
              <p><a class="btn btn-lg btn-primary" href="job_descriptions.html" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
		
		<div class="item">
          <img src="img/home/hero2.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Feature: 3-D printers help doctors custom-fit medical devices</h2>
              <p>The Plain Dealer</p>
              <p><a target="_blank" class="btn btn-lg btn-primary" href="http://www.cleveland.com/healthfit/index.ssf/2012/03/3-d_printers_help_doctors_cust.html" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
		
		<div class="item">
          <img src="img/home/hero3.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Feature: Growing our cures cell by cell in the lab</h2>
              <p>The Columbus Dispatch</p>
              <p><a target="_blank" class="btn btn-lg btn-primary" href="http://www.dispatch.com/content/stories/science/2013/11/17/1-growing-our-cures-cell-by-cell-in-the-lab.html" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
		
      </div>
           <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div><!-- /.carousel -->


		    <!-- About us
    ================================================== --> 
       
	<div class="container marketing">  
	   
      <div>
        <a id="anchor-01"></a>
        <h2>About Us</h2>
        <p>Welcome to the Dean Lab website. The Dean Lab focuses on providing tools for the surgical reconstruction or regeneration of craniofacial skeletal tissues. Our research includes the use of locally developed implant Computer Aided Design (CAD) software to prepare patient-specific implants, implant components, and surgical devices that are rendered via additive manufacturing (3D printing). We have used these techniques to prepare restorative but inert (i.e., non-resorbing) cranial implants for patients. However, a major focus of our preclinical research program has been the 3D printing of resorbable scaffolds. We then seed cells, for example Mesenchymal Stem Cells (MSCs) and/or vascular progenitor cells, onto those solid, 3D printed polymer scaffolds or within hydrogels. Those constructs are then cultured in a bioreactor before implantation with the intent of coating the scaffold with tissue that the body perceives as a “tissue engineered bone graft”.</p>
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