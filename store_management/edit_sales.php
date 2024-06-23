
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
        $invoice = $_GET['data'];
    ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
          jQuery(document).delegate('a.add-record', 'click', function(e) {
             e.preventDefault();    
             var content = jQuery('#sample_table tr'),
             size = jQuery('#tbl_posts >tbody >tr').length + 1,
             element = null,    
             element = content.clone();
             element.attr('id', 'rec-'+size);
             element.find('.delete-record').attr('data-id', size);
             element.appendTo('#tbl_posts_body');
             element.find('.sn').html(size);
           });
        </script>
        <script type="text/javascript">
          jQuery(document).delegate('a.delete-record', 'click', function(e) {
             e.preventDefault();    
             var didConfirm = confirm("Are you sure You want to delete");
             if (didConfirm == true) {
              var id = jQuery(this).attr('data-id');
              var targetDiv = jQuery(this).attr('targetDiv');
              jQuery('#rec-' + id).remove();
              
            //regnerate index number on table
            $('#tbl_posts_body tr').each(function(index) {
              //alert(index);
              $(this).find('span.sn').html(index+1);
            });
            return true;
          } else {
            return false;
          }
        });
        </script>

        </head>

        <body>
          <script type="text/javascript">
          function onlybill()
          {
             var quantity=parseInt(document.add_name.quantity.value);
             var price=parseInt(document.add_name.price.value);
             var billx=quantity* price;
             document.add_name.sub_total.value=billx;

          }

          function mybill()
          {    

             var billx=0;
             var quantity=parseInt(document.add_name.quantity.value);
             var price=parseInt(document.add_name.price.value);
             var sgtamtx=document.add_name.gst.value;


            
            var billx=quantity * price;
            var gstx=billx*(sgtamtx/100); 
                 
                 
                // document.getElementById("selectgst").value=gst;
                

                document.add_name.total_amount.value=billx + gstx;
                document.add_name.gst_amount.value= gstx;





          }


      </script>
      <script type="text/javascript">
        $(document).ready(function() {
        $('.num-in span').click(function () {
            var $input = $(this).parents('.num-block').find('input.in-num');
          if($(this).hasClass('minus')) {
            var count = parseFloat($input.val()) - 1;
            count = count < 1 ? 1 : count;
            if (count < 2) {
              $(this).addClass('dis');
            }
            else {
              $(this).removeClass('dis');
            }
            $input.val(count);
          }
          else {
            var count = parseFloat($input.val()) + 1
            $input.val(count);
            if (count > 1) {
              $(this).parents('.num-block').find(('.minus')).removeClass('dis');
            }
          }
          
          $input.change();
          return false;
        });
        
      });
      // product +/-
      </script>
          <!-- Left Panel -->
    <?php include 'sidebar.php' ?>
    <!-- Left Panel Ends Here-->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    <?php include 'nav_bar.php' ?>  
        <!-- Header Ends Here-->
        
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left" style="padding-top: 5px;">
                    <div class="page-title">
                        <a href="home.php" type="button" class="btn btn-primary" style="border-radius: 5px;margin-left: 25px">Home</a>
                       <a href="sales.php"><b>Sales Order</b></a>

                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="home.php">Dashboard</a></li>
                            <li class="active"><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>



     <?php   
     include 'config/connect.php';

     if (isset($_POST['sales_upadte'])) {
       
       $sales_id = $_POST['sales_id'];

       $consumers_name = $_POST['consumers_name'];

       $mobile = $_POST['mobile'];

       $address = $_POST['address'];

       $gst_amount = $_POST['gst_amount'];

       $vehicle_company = $_POST['vehicle_company'];

       $vehicle_name = $_POST['vehicle_name'];

       $part_company = $_POST['part_company'];

       $part_name = $_POST['part_name'];

       $price = $_POST['price'];

       $quantity = $_POST['quantity'];

       $sub_total = $_POST['sub_total'];

       $gst = $_POST['gst'];

       $total_amount = $_POST['total_amount'];

       $update = "UPDATE `sales` SET sales_id = '$sales_id',consumers_name = '$consumers_name',mobile = '$mobile',address = '$address',gst_amount = '$gst_amount',vehicle_company = '$vehicle_company',vehicle_name = '$vehicle_name',part_company = '$part_company',part_name = '$part_name',price = '$price',quantity = '$quantity',sub_total = '$sub_total',gst = '$gst',total_amount = '$total_amount' WHERE  sales_id ='$invoice'"; 

       $result = mysqli_query($con, $update);

       
       if ($result) {
                echo "<script>
                       swal({title: 'Success!',
                      text: 'Sales Data Updated Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'view_sales.php';
                      }
                    });</script>";
       }

       else{
              echo "<script>
                       swal({title: 'Failed!',
                      text: 'Something Went Wrong!',
                      icon: 'error',
                     type: 'error'}).then(okay => {
                       if (okay) {
                        window.location.href = 'edit_sales.php';
                      }
                    });</script>";
       }

       


     }

   
         $value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT sales_id from sales order by sales_id DESC LIMIT 1";
    $stmt = $con->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['sales_id'];
            $value2 = substr($value2, 10, 13);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "INV-AAP-" . sprintf('%03s', $value2);//concatenating incremented value
            $value = $value2; 
        }
    } 
    else {
        $value2 = "INV-AAP-001";
        $value = $value2;
    }


              $fetch_sales = "SELECT * FROM `sales` WHERE sales_id ='$invoice'";
              $confirm = mysqli_query($con, $fetch_sales);

              while ($row = mysqli_fetch_assoc($confirm)) {
                  $consumers_name = $row['consumers_name'];
                  $address = $row['address'];
                  $vehicle_company = $row['vehicle_company'];
                  $vehicle_name = $row['vehicle_name'];
                  $part_company = $row['part_company'];
                  $part_name = $row['part_name'];
                  $mobile = $row['mobile'];
                  $price = $row['price'];
                  $quantity = $row['quantity'];
                  $sub_total = $row['sub_total'];
                  $gst = $row['gst'];
                  $gst_amount = $row['gst_amount'];
                  $total_amount = $row['total_amount'];
                  $date = $row['date'];
                  
              }
                                             
       ?>
        <div class="container">
          <form method="post" name="add_name" id="add_name" action="">

            <div class="row">

             <div class="col"></div>

             <div class="col-md-11">

               <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label>Customer Name</label>
                     <input type="text" name="consumers_name" value="<?= $consumers_name ?>" class="form-control" placeholder="Enter Customer Name" required=""></span>
                     <input type="text" hidden name="sales_id" value="<?= $invoice ?>">
                     <input type="text" hidden name="gst_amount" value="<?= $gst_amount ?>">
                  </div>  
                  <div class="form-group col-md-6 col-sm-6">
                     <label>Mobile Number</label>
                     <input type="text" name="mobile" value="<?= $mobile ?>" placeholder="Enter Mobile Number" class="form-control" required="" minlength="1" maxlength="50">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12 col-sm-12">
                     <label>Address</label>
                         <input type="text" name="address" value="<?= $address ?>" placeholder="Enter Customer Address" class="form-control" required="" minlength="1" maxlength="50">
                  </div>
                </div>

               <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label>Vechicle Company</label><br>
                        <select name="vehicle_company" class="form-control" required="">
                            <option selected value="<?= $vehicle_company ?>"><?= $vehicle_company ?></option>
                            <?php 
                              $fetch_sales = "SELECT * FROM `vehicle_company`";
                                $confirm = mysqli_query($con, $fetch_sales);

                                while ($row = mysqli_fetch_assoc($confirm)) {
                                  $vehicle_c = $row['vehicle_company'];
                               
                             ?>
                            <option value="<?= $vehicle_c ?>"><?= $vehicle_c ?></option>
                            <?php
                          }
                            ?>
                        </select>
                     </div>
                  

                  <div class="form-group col-md-6 col-sm-6">
                       <label>Vehicle Name</label>
                          <select name="vehicle_name" class="form-control" required="">
                            <option selected value="<?= $vehicle_name ?>"><?= $vehicle_name ?></option>
                            <?php 
                                  $fetch_sales = "SELECT * FROM `vehicle_name`";
                                  $confirm = mysqli_query($con, $fetch_sales);

                                  while ($row = mysqli_fetch_assoc($confirm)) {
                                    $vehicle_n = $row['vehicle_name'];
                               
                             ?>
                            <option value="<?= $vehicle_n ?>"><?= $vehicle_n ?></option>
                            <?php
                             }
                            ?>
                        </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label>Company Part</label><br>
                        <select name="part_company" class="form-control" required="">
                            <option selected value="<?= $part_company ?>"><?= $part_company ?></option>
                           <?php 
                                 $fetch_sales = "SELECT * FROM `part_company`";
                                  $confirm = mysqli_query($con, $fetch_sales);

                                  while ($row = mysqli_fetch_assoc($confirm)) {
                                    $part_c = $row['part_company'];
                                 
                               
                             ?>
                            <option value="<?= $part_c ?>"><?= $part_c ?></option>
                            <?php
                             }
                            ?>
                        </select>
                     </div>
                  

                  <div class="form-group col-md-6 col-sm-6">
                       <label>Part Name</label>
                          <select name="part_name" class="form-control" required="">
                            <option selected value="<?= $part_name ?>"><?= $part_name ?></option>
                             <?php 
                                  $fetch_sales = "SELECT * FROM `part_name`";
                                    $confirm = mysqli_query($con, $fetch_sales);

                                    while ($row = mysqli_fetch_assoc($confirm)) {
                                      $part = $row['part_name'];
                                  
                                 
                               
                             ?>
                            <option value="<?= $part ?>"><?= $part ?></option>
                            <?php
                             }
                            ?>
                        </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                       <label>Price<small>  (Per Pic/Box)</small></label><br>
                       <input type="text" name="price" value="<?= $price ?>" class="form-control" placeholder="Price" onkeyup="onlybill()">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Quantity</label>
                     <div class="num-block skin-1" align="center">
                        <div class="num-in">
                          <span class="minus dis"></span>
                          <input type="text" class="in-num" onchange="onlybill()" name="quantity" value="<?= $quantity ?>" readonly="">
                          <span class="plus"></span>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label>Sub Total Bill</label><br>
                    <span><input type="text" name="sub_total" class="form-control" value="<?= $sub_total ?>" readonly  placeholder="Sub Total Bill"></span>
                  </div>

                  <div class="form-group col-md-6 col-sm-6">
                    <label>GST</label><br>
                    <select id="selectgstx" name="gst" class="form-control" onchange="mybill()">
                     <option value="<?= $gst ?>" selected><?= $gst ?></option>
                    <option value="0">None</option>
                    <option value="5">5</option>
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="28">28</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                       <label>Total Bill</label>
                       <input type="text"  class=" form-control" value="<?= $total_amount ?>" name="total_amount" placeholder="Total Bill" readonly>
                  </div>
                </div>

             </div>
             <div class="col"></div>
              <div class="col-sm-12 col-md-12">
                   <div class="form-group text-center" >
                <button type="submit" name="sales_upadte" class="btn btn-success" style="border-radius: 4px">Update
                </button>
                <a class="btn btn-danger" href="#" style="border-radius: 4px">Cancel</a> 
                </div>
                </div>
              </div>
                
            </form>
           
        </div>
   
<style type="text/css">
  * {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}


.num-block {
  width: 100%;
  /*padding: 15px;*/
}

/* skin 1 */
.skin-1 .num-in {
  float: left;
  width:100%;}

.skin-1 .num-in span {
  display: block;
  float: left;
  width: 30px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  position: relative;
  cursor: pointer;
}

.skin-1 .num-in span.dis:before {
  background-color: #ccc !important;
}

.skin-1 .num-in input {
  float: left;
  width: 70%;
  height: 32px;
  border: 1px solid #6E6F7A;
  border-radius: 5px;
  color: #000;
  text-align: center;
  padding: 0;
}

.skin-1 .num-in span.minus:before {
  content: '';
  position: absolute;
  width: 15px;
  height: 2px;
  background-color: #00A94F;
  top: 50%;
  left: 0;
}

.skin-1 .num-in span.plus:before, .skin-1 .num-in span.plus:after {
  content: '';
  position: absolute;
  right: 0px;
  width: 15px;
  height: 2px;
  background-color: #00A94F;
  top: 50%;
}

.skin-1 .num-in span.plus:after {
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}

/* / skin 1 */



/* / skin 7 */


</style>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

    <script type="text/javascript">
        function addtabalerow()
        {

            var tb=document.getElementById("test");

            var tr=tb.insertRow(0);

            var cell=tr.insertCell(0);

            var cell1=tr.inssertCell(1);
        }
    </script>

</body>

</html>

<?php

include("db_config.php");

if(isset($_POST['submit']))
{
  
  $cust_name = $_POST['cust_name'];

  $contact_number =$_POST['contact_number'];

  $address = $_POST['address'];

  $vehicle_name = $_POST['vehicle_name'];

  $part_name = $_POST['part_name'];

  $quantity = $_POST['quantity'];
  
  $mrp = $_POST['mrp'];

  $discount = $_POST['discount'];
  
  $rate = $_POST['rate'];
  
  $gst = $_POST['gst'];
  
  $total_bill = $_POST['total_bill'];
  

  $query = "insert into sales_order
            (customer_name,contact_number,address,vehicle_name,part_name,quantity,mrp,discount,rate,gst,total_bill)
            values
            ('$cust_name','$contact_number','$address','$vehicle_name','$part_name','$quantity','$mrp','$discount','$rate','$gst','$total_bill')";

  $res=(mysqli_query($con,$query));

  if($res) 
  {
     echo "<script>alert('Data Is Submitted Thank You');</script>";
     // header('refresh:0,url=');
  }
  else
  {
    echo "<script>alert('Somthing went wrong, try after somtime');</script>";
  }
}
?>
