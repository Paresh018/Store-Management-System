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
                <div class="page-header float-left" style="padding-top: 5px;">
                    <div class="page-title">
                        <a href="home.php" type="button" class="btn btn-primary" style="border-radius: 5px">Home</a>
                      

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
        <div class="content mt-3">
            
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <a href="view_sales.php">
                    <div class="card-body pb-0">
                        <!-- <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div> -->
                        <h4 class="mb-0">
                          <!--   <span class="count">10468</span> -->
                        </h4>
                        <p class="text-light">Sales Department</p>

                        <div class="chart-wrapper px-0" style="height:50px;">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>
                </a>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-2">
                    <a href="view_purchase.php">
                    <div class="card-body pb-0">
                       <!--  <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div> -->
                        <h4 class="mb-0">
                           <!--  <span class="count">10468</span> -->
                        </h4>
                        <p class="text-light">Purchase Department</p>

                        <div class="chart-wrapper px-0" style="height:50px;">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </a>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
              
                <div class="card text-white bg-flat-color-3">
                    <a href="billing_dash.php">
                    <div class="card-body pb-0">
                        <!-- <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div> -->
                        <h4 class="mb-0">
                            <!-- <span class="count">10468</span> -->
                        </h4>
                        <p class="text-light">Billing Department</p>

                    </div>

                    <div class="chart-wrapper px-0"style="height:50px;">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                     </a>
                </div>
               
            </div>
            <!--/.col-->
<!-- 
            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0"> -->
                        <!-- <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div> -->
                       <!--  <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-3" style="height:50px;" >
                            <canvas id="widgetChart4"></canvas>
                        </div> -->

                  <!--   </div>
                </div>
            </div> -->
            <!--/.col-->

           
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
