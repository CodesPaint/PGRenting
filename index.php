
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Amaya Suite</title>
	<?php include 'base.php' ?>
	<link rel="stylesheet" type="text/css" href="assets/css/main1.css">
	<style type="text/css">
	.carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.fix-im {
    position: relative;
    bottom:11rem;
}
@media screen and (max-width:768px){
.flex-100 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.fix-im {bottom: 0rem;}
}
.ugali {
    background: black;
    padding: 6px;
}
	</style>
  </head>
  <body>

<?php include 'header.php' ?>
   

<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/images/slide1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Amaya Accomodation</h3>
          <p class="lead">Your choices with affordable price.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/images/slide2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Amaya Accomodation</h3>
          <p class="lead">Find anywhere.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/images/slide3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Amaya Accomodation</h3>
          <p class="lead">Amaya way, Tasteful spaces.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container text-center">
    <h1 class="font-weight-light">The Amaya Way</h1>
    <p class="lead">Welcome to Amaya a place for tasteful spaces <a href="index.php">Amaya</a>!</p>
  </div>
</section>
      <!-- Page Content -->
<div class="container">
          <div class="col-lg-12">

  <!-- <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Our Popular Destinations</h1> -->
  <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-left">
    <div class="col-lg-6 col-md-4 col-6 p-1">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid w-100" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 p-1">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
            
          </a>
          <div class="card-img-overlay  text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 p-1">
      <a href="#" class="d-block h-100">
            <img class="img-fluid " src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2><!-- Arusha --></h2>
            </div>
    </div>
	  <div class="col-lg-3 col-md-6 col-6 p-1">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 p-1">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-6 col-md-8 col-8 p-1">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid w-100 fix-im" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
	   <div class="col-lg-4 col-md-8 col-6 p-1 fix-im">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-4 col-md-6 col-8 p-1">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid fix-im" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
    <div class="col-lg-4 col-md-4 col-6 p-1">
      <a href="#" class="d-block  h-100">
            <img class="img-fluid fix-im" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
          </a>
          <div class="card-img-overlay text-white">
                <h2 class="ugali"></h2>
            </div>
    </div>
	</div>
</div>
</div>
<!-- /.container -->
<!-- Header -->


<!-- Page Content -->




  
  
  
  <!-- Page Content -->
<div class="container py-4 mt-4">
    <p class="display-3">Meet our Team</p>
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="assets/images/Aarima.png" class="card-img-top" alt="..." style="width: 255px; height: 250pt;">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
         <!--  <div class="card-text text-black-50">Web Developer</div> -->
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="assets/images/pratap.jpeg" class="card-img-top" alt="..." style="width: 255px; height: 250pt;">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->



<?php include 'footer.php' ?>


  </body>
</html>

