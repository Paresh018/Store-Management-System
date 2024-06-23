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


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        <a href="home.php" type="button" class="btn btn-primary" style="border-radius: 5px">Home</a>
                    </div>
                </div>
            </div>
            
        </div>


                <?php   
             include 'config/connect.php';

             if (isset($_POST['company_part_submit'])) {
               
               $part_company = $_POST['vehicle_part_company'];

               $p_c_id = uniqid($part_company);

               $status = $_POST['status'];

               $part_company_insert = "INSERT INTO `part_company` (`part_company`,`p_c_id`,`status`) VALUES ('$part_company','$p_c_id','$status')";

               $check = mysqli_query($con, $part_company_insert);
               if ($check) {
                        echo "<script>
                               swal({title: 'Success!',
                              text: 'Part Included Successfully!',
                              icon: 'success',
                             type: 'success'}).then(okay => {
                               if (okay) {
                                window.location.href = 'data_table_create_company_part.php';
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
                                window.location.href = 'create_part_company.php';
                              }
                            });</script>";
               }

               


             }

        ?>

           <div class="container">
        
                <center><h3>Company  Part  Details</h3></center><br>
        
                    <form method="POST">
                        <div class="container"> 
                          <div class="col-md-6">

                            <div class="form-group">
                                <label>Vechicle Part Company</label>
                                <input type="text" name="vehicle_part_company" placeholder="Vechicle Part Company" class="form-control" required="" minlength="1" maxlength="50">
                       
                              <div class="invalid-feedback">
                                 Please Enter Vechicle Part Company
                                </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>

                        </div>



        
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                    <label>Status</label><br>
                                        <span>
                                          <select  required class="form-control"  name="status">
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                         </select>
                                            <div class="invalid-feedback">
                                                Please select a valid status.
                                            </div>

                                            <div class="valid-feedback">
                                                    Looks good!
                                            </div>
                                        </span>
                            </div>
                            <div class="form-group pull-right" >
                                    <button type="submit" name="company_part_submit" class="btn btn-success" style="border-radius: 4px">Create
                                    </button>
                                    <a class="btn btn-danger" href="#" style="border-radius: 4px">Cancel</a> 
                            </div>
                            
                          </div>
                    </form>
                </div>
      
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

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
