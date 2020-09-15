<?php
    $cvendorid=-1;
    if($flg==1&&$act=="gallery"){
        
        if(is_dir($foldername)) {
            if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
            {
             
            }

        }

    }else if($flg==-1){
        
        if(isset($_SESSION['cvenname']) and isset($_SESSION['cvenid'])){
         $cvendorid=$_SESSION['cvenid'];
        }
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
		<form role="form" method="post" action="vendordashboard.php?op=pghouse&act=gallery" enctype="multipart/form-data">			

            <div class="row"> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <img src="" style="width:100px;height: 100px" class="img" id="front"/><br/>
                        <input type="file" name="photo1" id="photoInput" class="form-control"  onchange="readURL(this,front);" />
                    </span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <select id="housefor" name="housefor" class="form-control" required="required">
                        <option value="-1">Main / Front</option>
                    </select>
                </div>
            </div>
            <hr/>
            <div class="row"> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <img src="" style="width:100px;height: 100px" class="img" id="room1"/><br/>
                        <input type="file" name="photo2" id="photoInput" class="form-control"  onchange="readURL(this,room1);" />
                    </span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <select id="housefor" name="housefor" class="form-control" required="required">
                        <option value="-1">Rooms</option>
                    </select>
                </div>
            </div>
            <hr/>
            <div class="row"> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <span class="button-checkbox">
                        <img src="" style="width:100px;height: 100px" class="img" id="room2"/><br/>
                        <input type="file" name="photo3" id="photoInput" class="form-control"  onchange="readURL(this,room2);" />
                    </span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <select id="housefor" name="housefor" class="form-control" required="required">
                        <option value="-1">Rooms</option>
                    </select>
                </div>
            </div>
            <hr/>
			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Update" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>

</div>


<script type="text/javascript">
	function readURL(input,x) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                   x.src= e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>