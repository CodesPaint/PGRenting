<?php include 'base.php' ?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Amaya Suite</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main1.css">


	<style type="text/css">
		.profil{
  background: #f9f9f9;
}
.profil .yacht-info__list li {
    width:25%;
}
.olanaklar-kutu{
  background: #fff;
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  overflow: hidden;
  float: left;
  width: 100%;
  margin: 15px 0px;
}
.olanaklar{
  float: left;
  width: 100%;
  position: relative;
  padding: 25px 30px 30px;
}
.margin-top--22{
  margin-top:-22px;
}
.olanaklar-kutu h4{
  color: #FF9800;
}

.yacht-info__list {
    list-style: none;
    padding: 0;
    font-size: 16px;
}
.yacht-info__list li {
    padding: 6px 0;
    font-size: 15px;
    display: table;
/*    height: 100%;
*/    
    line-height: 21px;
    float: left;
    width: 20%;
    margin-bottom: 5px;
}


/*Rating Style*/

.glyphicon { margin-right:5px;}
.rating .glyphicon {font-size: 22px;}
.rating-num { margin-top:0px;font-size: 54px; }
.progress { margin-bottom: 5px;}
.progress-bar { text-align: left; }
.rating-desc .col-md-3 {padding-right: 0px;}
.sr-only { margin-left: 4%; margin-top: -3.4%;overflow: visible;clip: auto;}





	</style>


  <script type="text/javascript">
    $("document").ready(function(){
         $('.carousel').carousel({
              interval: 8000
          });
          
          checkin.min = new Date().toISOString().split("T")[0];
          checkout.min= new Date().toISOString().split("T")[0];
    });
   
      
    

   

  </script>
  </head>
  <body>

<?php include 'header.php' ?>
   

<section class="profil  py-4 ">
   <div class="container">
     <div class="row">
         <div class="col-md-8">
              
         	<!-- Slider -->

              <div class="slider">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                      </ol>
                      <div style="border-radius: 0.25rem;" class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="d-block w-100" style="height: 290px" src="./vendor/media/hotels/10.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" style="height: 290px" src="./vendor/media/hotels/11.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" style="height: 290px" src="./vendor/media/hotels/12.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" style="height: 290px" src="./vendor/media/hotels/13.jpg" alt="Fourth slide">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" style="height: 290px" src="./vendor/media/hotels/14.jpg" alt="Fifth slide">
                          </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          
                      </a>
                  </div>
              </div>




             <div class="olanaklar-kutu">

                 <div class="olanaklar">

                  <h4 class="pb-3">Front One Hotel</h4>
                  
                  <ul class="yacht-info__list">    <!-- <ul class="vertical-align-mid"> --> 
                      <li>
                          <i class="fa fa-wifi"></i> &nbsp;
                          <span class="vertical-align-mid">Wi-Fi</span>
                      </li>
                      <li>
                          <i class="fa fa-check-square-o"></i> &nbsp;
                          <span class="vertical-align-mid">AC</span>
                      </li>
                      <li>
                          <i class="fa fa-television"></i> &nbsp;
                          <span class="vertical-align-mid">TV</span>
                      </li>
                      <li> 
                          <i class="fa fa-cutlery"></i> &nbsp;
                          <span class="vertical-align-mid">Resturant</span>
                      </li>
                      <li> 
                          <i class="fa fa-credit-card"></i> &nbsp;
                          <span class="vertical-align-mid">Card Payment</span>
                      </li>

                  </ul>
              </div>

                 <div class="olanaklar margin-top--22">
                     <h4 class="pb-3">Description</h4>
                     <p>Located 3.1 mi from the Golkonda Fort, Treebo Tryst F One Park Front operated a 24-hour front desk. Free Wi-Fi is available throughout the property.

                      Guests can head to the tour desk for day trips and currency exchange arrangements. Dry cleaning, laundry and concierge services can be requested. Meeting & banquet space and business center are available.

                      The Salar Jung Museum is 11 mi and Charminar is 12 mi from Treebo Tryst F One Park Front. The Hyderabad Railway Station is 4.3 mi, Central Bus Station is 6.2 mi while the Rajiv Gandhi International Airport is 19 mi.

                      The air-conditioned rooms feature a flat-screen cable TV with CD player, safety deposit box and work desk. An electric kettle and mini-bar are available. The private bathrooms are equipped with shower, hairdryer and free toiletries.

                      The in-house restaurant Leaves serves Indian, Chinese, Thai and Continental delights. 24-hour room service is available</p>
                   </div>

                    <div class="olanaklar margin-top--22">
                     <h4 class="pb-3">Hotel Policies</h4>
                     <p>
                      <a href="guestpolicy.php" target="_blank">View Guest Policy</a>
                    </p>
                    </div>

              </div>



               <div class="olanaklar-kutu">
                  <div class="olanaklar">
                    <h4 class="pb-3">Select Your Room</h4>
                  </div>
               </div>


               <div class="olanaklar-kutu">
                  <div class="olanaklar">
                    <h4 class="pb-3">Ratings and Reviews</h4>

                    <!-- Rating section -->
                  
       

                <div class="row"> 

                    <div class="col-xs-12 col-md-5 text-center">
                        <h1 class="rating-num">
                            4.0</h1>
                        <div class="rating">
                            <span class="glyphicon fa fa-star"></span><span class="glyphicon fa fa-star">
                            </span><span class="glyphicon fa fa-star"></span><span class="glyphicon fa fa-star">
                            </span><span class="glyphicon fa fa-star-o"></span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>1,050,008 total
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc">


                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon fa fa-star"></span>5
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->


                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon fa fa-star"></span>4
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->


                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon fa fa-star"></span>3
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->


                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon fa fa-star"></span>2
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->


                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon fa fa-star"></span>1
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->


                        </div>
                        <!-- end row -->
                    </div>



                </div>


              <!-- Rating section Close -->



                  </div>
               </div>


         </div>

         <!-- Booking Section -->

         <div class="col-md-4">
             <div class="card">
              
              
              <h4 class="product-title mb-2">T-shirt Nickony - XXL Black and White - 100% cotton - Limited Stock</h4>
              <h4>&#8377 25.00</h4>   <!-- or &#x20A8 and &#8360 for RS -->
               
              <h4>check-in:</h4>
          <div class="book_date btm">
            <form>
              <input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
            </form>
          </div>  

                 <!-- <img class="card-img-top" src="https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg" alt="Card image cap"> -->
                 <div class="card-body">
                     <span class="badge badge-warning">Ali Bulut</span>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a style="display: grid;" href="talep-olustur.html" class="btn btn-success text-center">Continue to Book</a>
                     <span style="margin-left: 0%; color:red; font-weight: 500;">Cancellation Policy <i class="fa fa-info-circle"></i></span><br/><br/>
                     <span style="margin-left: 1%;font-weight: normal;">By proceeding, you agree to our <a href="guestpolicy.php" target="_blank" style="color: red;">Guest Policies.</a></span>

                 </div>
             </div>
         </div>



      

         <!-- End Booking Section -->



     </div>
   </div>
</section>







<?php include 'footer.php' ?>

  </body>
</html>