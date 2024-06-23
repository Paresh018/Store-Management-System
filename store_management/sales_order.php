<?php
include('config/check_login.php');
include('config/connect.php');

 $user = $_SESSION['giveAccess'];


 $check="SELECT * FROM `users` WHERE email ='$user'";
      $rs = mysqli_query($con,$check);

      while($row=mysqli_fetch_assoc($rs)){
    $fname=$row['fname'];
    $lname=$row['lname'];

      }


?>
<?php
	
	include("headres.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  function onlybill()
  {
     var qtyx=parseInt(document.add_name.qtyx.value);
     var pricex=parseInt(document.add_name.pricex.value);
     var billx=qtyx* pricex;
     document.add_name.subtbillx.value=billx;

  }

  function mybill()
  {    

     var billx=0;
     var qtyx=parseInt(document.add_name.qtyx.value);
     var pricex=parseInt(document.add_name.pricex.value);
     var sgtamtx=document.add_name.selected_sgt_amtx.value;


    
    var billx=qtyx* pricex;
    var gstx=billx*(sgtamtx/100); 
         
         
        // document.getElementById("selectgst").value=gst;
        

        document.add_name.tbillx.value=billx + gstx;

  }


</script>

</head>
<body>
	<div>
  <a href="bill_dept.php"><button type="button"class="btn btn-info" style="margin-left:5px;margin-top:10px;">&nbsp;Billing Department</i>
  </button></a>
  &nbsp;&nbsp;&nbsp;
    
    <a href="dash.php"><button type="button" class="btn btn-info" style="margin-left: 70px;float:left;margin-top: 10px;"><span class="glyphicon glyphicon-home">&nbsp;Home</span></button></a>
    </div><br><br>
<form method="post" name="add_name" id="add_name" action="new_try.php">
	<div class="container-fluid" style="width: 95%">	
		<div class="col-md-6">
			
			<div class="form-group">
				<label>Customer Name </label><br>
				<span><input type="text" name="cname" class="form-control" placeholder="Enter Customer Name" required=""></span>
			</div>

			<div class="form-group">
				<label>Address</label><br>
				<span><input type="text" name="address" class="form-control" placeholder="Enter Address" required=""></span>
				
			</div>

			<div class="form-group">
				<label>GST Number </label><br>
				<span><input type="text" name="gst_num" class="form-control" placeholder="Enter  GST number" required=""></span>
			</div>

			<div class="form-group">
				<label>Liter/Unit</label>
				<span>
					<select name="lit_unit" class="form-control" required="">
					<option value="" disabled selected>Select Liter</option>
					<option value="1 lit">1 Lit</option><br><br>
					<option value="500ml">500 ML</option><br>
					<option value="250ml">250 ML</option><br>
					<option value="20lit">20 Lit Jar</option>
					</select>
				</span>
			</div>

				
	</div>

	<div class="col-md-6">

		<div class="form-group">

				<label>Quantity</label>
				<span><input type="text" name="qtyx" placeholder="Quantity" class="form-control"></span>	

				</div>
			<div class="form-group">
				<label>Price</label><br>
				<span>
					<input type="text" name="pricex" class="form-control" placeholder="Price" onblur="onlybill()">
				</span>
		
			</div>
			
			<div class="form-group">
				<label>Sub Total Bill</label><br>
				<span><input type="text" name="subtbillx" class="form-control" placeholder="Sub Total Bill"></span>
			</div>

			<div class="form-group">
				<label>GST</label><br>
				<span>
					<select id="selectgstx" name="selected_sgt_amtx" class="form-control" onchange="mybill()">
					 <option value="" disabled selected>Select GST</option>
                    <option value="0">None</option>
                    <option value="5">5</option>
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="28">28</option>
					</select>
				</span>
			</div>

			<div class="form-group">
				<label>Total Bill</label>
				<input type="text"  class=" form-control" name="tbillx" placeholder="Total Bill">
			</div>

			
	</div>
	

</div>
<div class="form-group pull-right" style="margin-right: 60px;">
        <!-- <a href="employee_categeory.php" ><input type="submit" class="btn btn-success" name="save" value="Save and Continue"></a> -->
        
		<a href="employee_categeory.php"><input type="submit" class="btn btn-success" name="submitadata" value="Create"></a>
   <!--  <input type="text" hidden="" value="we will shortly contact u" name="ones">
    <input type="text" hidden="" value="not submit" name="twos"> -->
		<a href="dash.php"><button type="button"class="btn btn-danger">Cancel</i>
  </button></a>
  <?php
include ("db_config.php");

$sql="select * FROM water_jar";
   $result1=mysqli_query($conn,$sql);

       while($row=mysqli_fetch_assoc($result1)) 
         {
            $name=$row['cname'];
            $add=$row['address'];
            $gst_num=$row['gst_num'];
            $lit=$row['lit_unit'];
            // $ones=$row['ones'];
            // $twos=$row['twos'];

        
?>
  <input type="" name="" value="<?php 

      if($name=="" && $add=="" && $gst_num=="" && $lit=="")
      {
        echo'No data';
      }
      else
      {
        echo"data inserted";
      }
}
  ?>">

}


        </div>
        </form>
</body>
</html>

