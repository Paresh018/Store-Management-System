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
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


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
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><a href="home.php" class="active">Home</a></h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
                     <?php 
                        include 'config/connect.php';

                       



                        $fetch_sales = "SELECT * FROM `purchase` WHERE purchase_id ='$invoice'";
                        $confirm = mysqli_query($con, $fetch_sales);

                        while ($row = mysqli_fetch_assoc($confirm)) {
                            $supplier_name = $row['supplier_name'];
                            $vehicle_company = $row['vehicle_company'];
                            $part_company = $row['part_company'];
                            $vehicle_name = $row['vehicle_name'];
                            $part_name = $row['part_name'];
                            $mobile = $row['mobile'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            $sub_total = $row['sub_total'];
                            $gst = $row['gst'];
                            $gst_amt = $row['gst_amount'];
                            $total_amount = $row['total_amount'];
                            $date = $row['date'];
                            $gst_amount = round($gst_amt);
                            
                        }
                      
                     ?>


           <div class="container">
                <div class="card card-default mb-5">
                    <div class="card-header">
                         <div class="row">
                         <div class="col"></div>
                          <div class="col-md-10 text-center mb-1">
                            <h4>Purchase Invoice</h4>
                          </div>
                           <div class="col"></div>
                        </div>
                        <div class="row">
                         <div class="col"></div>
                          <div class="col-md-10">
                            <div class="row">
                            <div class="col-md-4">
                                <strong style="float: left;">#<?= $invoice ?></strong><br>
                                Created: <?= $date ?> <br>
                            </div>
                            <div class="col-md-4">
                                <center>
                                <img src="http://www.blog.menut.ro/assets/img/download.png" alt="logo" class="" style="max-width: 100px;">
                                </center>
                            </div>
                            <div class="col-md-4">
                                <h5 style="float: right;">STATUS: Paid</h5>
                            </div>
                            </div>
                          </div>
                           <div class="col"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-6 mb-3">
                            <div class="card card-default">
                                <div class="card-header">
                                   Client :
                                </div>
                                <div class="card-body">
                                  <address>
                                    <strong>Store Management</strong> <br>
                                    Pune <br>
                                   422608 <br>
                                    </address>
                                </div>
                            </div>                
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="card card-default">
                              <div class="card-header">
                                Supplier :
                              </div>
                              <div class="card-body text-leftc">
                                <address>
                                <strong><?= $supplier_name ?> <br></strong>
                                <?= $mobile ?> <br>
                                Status : PAID <br>
                                </address>
                              </div>
                            </div>
                        </div>
                      <table class="table responsive">
                        <thead>
                          <tr>
                            <th>No.     </th>
                            <th>Part Name </th>
                            <th>Description </th>
                            <th>Qty.    </th>
                            <th>Price   </th>
                            <th class="text-right">Amount  </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1       </td>
                            <td><?= $part_name ?>  </td>
                            <td><?= $part_name ?> of <?= $part_company ?> company for  <?= $vehicle_name ?> vehicle</td>
                            <td><?= $quantity ?>  </td>
                            <td><?= $price ?> </td>
                            <td class="text-right"><?= $total_amount ?> </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row justify-content-end">
                        <div class="col-md-6">
                          Currency: INR <br>
                          GST: <?= $gst ?>% <br>
                          Made by: Store Management <br>
                          Delivered :  <?= $date ?><br>
                        </div>
                        <div class="col-md-6">
                          <table class="table borderless">
                            <tbody>
                              <tr>
                                <th scope="row" class="text-right">Subtotal</th>
                                <th class="text-right">Rs.<?= $sub_total ?>.00</th>
                              </tr>
                              <tr>
                                <th scope="row" class="text-right">GST <?= $gst ?>%</th>
                                <th class="text-right">Rs.<?= $gst_amount ?>.00</th>
                              </tr>
                              <tr>
                                <th scope="row" class="text-right">TOTAL</th>
                                <th class="text-right">Rs.<?= $total_amount ?>.00</th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer" style="height: 5rem;">
                        <div class="row">
                            <div class="col-md-6 pr-5">
                                <h5  style="float: right;">Supplier Signature</h5>
                            </div>
                            <div class="col-md-6 pl-5">
                                <h5  style="float: left;">Client Signature</h5>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

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

</body>

</html>
