        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">

        			<?php include "pghousefilter.php"	?>


        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                            <input type="text" class="nav-link" name="keyword" id="keyword" placeholder="Search City"/>
			                        </div>
			                        <!-- <p>Showing 1–12 of 40 results</p> -->
			                        <div class="orderby__wrapper">
			                        	<span>Sort By</span>
			                        	<select class="shot__byselect">
			                        		<option>Low to High Price</option>
			                        		<option>High to Low price</option>
			                        		<option>Relevence</option>
			                        		<option selected="selected">Rating</option>
			                        	</select>
			                        </div>
		                        </div>
        					</div>
        				</div>



        				<div class="tab__container">

	        				<div class="shop-grid tab-pane fade show active" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						
	        						<?php  

	        							include_once 'DBConnect.php';
                    
					                    $database = new dbConnect();

					                    $db = $database->openConnection();
					                    
					                    $sql = "select * from vendorgetintouch,pghouse where vendorgetintouch.vendorid = pghouse.vendorid ";
					                    $enquiry = $db->query($sql);
					                    $result = $enquiry->fetchAll(PDO::FETCH_ASSOC);
					                    if (!empty($result)) {
					                        foreach($result as $row){
	        						?>
	        						<!-- Start Single Product -->
	        						<div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="pghousedetails.php?vid=<?php echo $row['vendorid'];  ?>"><img src="images/product/1.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="pghousedetails.php?vid=<?php echo $row['vendorid'];  ?>"><img src="images/product/2.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="pghousedetails.php?vid=<?php echo $row['vendorid'];  ?>"><?php  echo $row['company'] ?></a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<p><?php  echo $row['address']; ?></p>
	        								<ul class="prize__box">
	        									<li><?php  echo $row['rentpermonth'] ?> Rs.</li>
	        									<!-- <li class="old__prize">$220.00</li> -->
	        								</ul>

	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="pghousedetails.php?vid=<?php echo $row['vendorid'];  ?>">See Details</a></li>
	        									<!-- <li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li> -->
	        								</ul>

	        							</div>
	        						</div>
	        						<br/><br/>
	        						<!-- End Single Product -->
	        						<?php

	        							}
	        						}
	        						?>


	        					</div>
	        					<!-- <ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul> -->
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->