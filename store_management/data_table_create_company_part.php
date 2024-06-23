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

     <!-- Custom Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
                       <a href="create_part_company.php" type="button" class="btn btn-success" style="border-radius: 5px">Create Company Part</a>

                    </div>
                </div>
            </div>
           <!--  <div class="col-sm-8">
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
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Vehicle Company Name</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Company Part</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include 'config/connect.php';
                                            include 'delete.php';

                                            $fetch_sales = "SELECT * FROM `part_company`";
                                            $confirm = mysqli_query($con, $fetch_sales);

                                            while ($row = mysqli_fetch_assoc($confirm)) {
                                                $p_c_id = $row['p_c_id'];
                                             
                                          
                                         ?>
                                        <tr>
                                            <td><?= $row['part_company'] ?></td>
                                            <td><?= $row['status'] ?></td>
                                            <td><?= $row['date'] ?></td>
                                            <td class="text-center">
                                                <a href="edit_part_company.php?data=<?= $p_c_id ?>" style="display: inline;"><button class="btn btn-success btn-sm mr-1" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                                 <form action="" method="POST" style="display: inline;">
                                                    <input type="text" name="id" hidden value="<?= $p_c_id ?>">
                                                    <button class="btn btn-danger btn-sm" type="submit" name="company_part" title="Delete"><i class="fa fa-remove"></i></button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php 
                                                }
                                         ?>
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
