<?php
        $cvendorid=-1;
        
    if($flg==1&&$act=="register"){

        include_once 'DBConnect.php';
        $database = new dbConnect();

        $db = $database->openConnection();
        
        $sql = "insert into pghouse(vendorid,address,city,state,meals,television,furnished,parking,housefor,security,rentpermonth,foldername,completed) values('$vendorid','$address','$city','$state','$meals','$television','$furnished','$parking','$housefor','$security','$rentpermonth','$foldername','$completed')";
        $db->exec($sql);
        echo "<script>alert('Record Saved!!');</script>";
        $database->closeConnection();

    }else if($flg==-1){
        
        if(isset($_SESSION['cvenname']) and isset($_SESSION['cvenid'])){
         $cvendorid=$_SESSION['cvenid'];
        }else{
            header('location: home.php');
        }
        include_once 'DBConnect.php';
        $database = new dbConnect();

        $db = $database->openConnection();
        $sql = "select vendorgetintouch.*,pghouse.* from vendorgetintouch,pghouse where vendorgetintouch.vendorid='$cvendorid'";
        $emp = $db->query($sql);
        $result = $emp->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $companyname=$result[0]['company'];
            $address=$result[0]['address'];
            $city=$result[0]['city'];
            $rentpermonth=$result[0]['rentpermonth'];
        }


        $database->closeConnection();
    }

?>

<style type="text/css">
	
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>

<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="vendordashboard.php?op=pghouse&act=register">
            <input type="hidden" id="vendorid" name="vendorid" value="<?php echo $cvendorid;  ?>"/>
			<h2>Fill Pg House details</h2>
			<hr class="colorgraph">
			
			<div class="form-group">
                <div>PG House Name: </div>
				<input type="text" name="pgname" id="pgname" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="<?php echo $companyname; ?>"  required="required">
			</div>
			<div class="form-group">
                <div>Address: </div>
				<textarea name="address" id="address" class="form-control input-lg" placeholder="Address" required="required"><?php echo $address; ?></textarea>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <div>City: </div>
						<input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="5" required="required" value="<?php echo $city; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <div>State: </div>
						<select id="state" name="state" class="form-control" required="required">
							<option value="-1">Select State</option>
							<?php 
								include_once 'DBConnect.php';
								$database = new dbConnect();
    
							    $db = $database->openConnection();
							    
							    $sql = "select * from states";
							    $emp = $db->query($sql);
							    $result = $emp->fetchAll(PDO::FETCH_ASSOC);
							    if (!empty($result)) {
                        			foreach($result as $row){
                        				echo "<option value=".$row['stateId'].">".$row['stateName']."</option>";
                        			}
                        		}
                        		$database->closeConnection();
							 ?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Meals</button>
                        <input type="checkbox" name="meals" id="meals" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Television</button>
                        <input type="checkbox" name="television" id="television" class="hidden" value="1">
					</span>
				</div>
			</div>
			<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info" tabindex="7">Furnished</button>
                        <input type="checkbox" name="furnished" id="furnished" class="hidden" value="1">
                    </span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info" tabindex="7">Parking</button>
                        <input type="checkbox" name="parking" id="parking"  value="1">
                    </span>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info" tabindex="7">Security</button>
                        <input type="checkbox" name="security" id="security" class="hidden" value="1">
                    </span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <select id="housefor" name="housefor" class="form-control" required="required">
                        <option value="-1">Select PG House For</option>
                        <option value="boys">Boys</option>
                        <option value="girls">Girls</option>
                        <option value="both">Both</option>
                    </select>
                </div>
            </div>
            <hr/>
            <div class="form-group">
                <div>Rent Amount: </div>
                <input type="number" name="rentpermonth" id="rentpermonth" class="form-control input-lg" placeholder="Rent Amount" tabindex="3" required="required" value="<?php echo $rentpermonth;  ?> ">
            </div>
            <hr/>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="iagree" id="iagree" class="hidden" value="1" required="required">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="../terms.php" target="_blank">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Update</a></div>
			</div>
		</form>
	</div>
</div>

</div>


<script type="text/javascript">
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>