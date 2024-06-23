<?php 
       


     if(isset($_POST['vehicle_company'])){

      $id = $_POST['id'];

      $sql = "DELETE  FROM vehicle_company WHERE v_c_id='$id'";
      $res = mysqli_query($con,$sql);
      if ($res) {
      	 echo "<script>
                       swal({title: 'Success!',
                      text: 'Vehicle Company Deleted Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'tables-data.php';
                      }
                    });</script>";
      }
     
       
      }




      if(isset($_POST['vehicle_name'])){

      $id = $_POST['id'];

      $sql = "DELETE  FROM vehicle_name WHERE v_n_id='$id'";
      $res = mysqli_query($con,$sql);
      if ($res) {
      	 echo "<script>
                       swal({title: 'Success!',
                      text: 'Vehicle Name Deleted Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'data_table_create_vehicle_name.php';
                      }
                    });</script>";
      }
     
       
      }



      if(isset($_POST['company_part'])){

      $id = $_POST['id'];

      $sql = "DELETE  FROM part_company WHERE p_c_id='$id'";
      $res = mysqli_query($con,$sql);
      if ($res) {
      	 echo "<script>
                       swal({title: 'Success!',
                      text: 'Company Part Deleted Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'data_table_create_company_part.php';
                      }
                    });</script>";
      }
     
       
      }



       if(isset($_POST['part_name'])){

      $id = $_POST['id'];

      $sql = "DELETE  FROM part_name WHERE p_n_id='$id'";
      $res = mysqli_query($con,$sql);
      if ($res) {
      	 echo "<script>
                       swal({title: 'Success!',
                      text: 'Part Name Deleted Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'data_table_create_part_name.php';
                      }
                    });</script>";
      }
     
       
      }



       if(isset($_POST['view_purchase'])){

      $id = $_POST['id'];

      $sql = "DELETE  FROM purchase WHERE purchase_id='$id'";
      $res = mysqli_query($con,$sql);
      if ($res) {
      	 echo "<script>
                       swal({title: 'Success!',
                      text: 'Purchase Invoice Deleted Successfully!',
                      icon: 'success',
                     type: 'success'}).then(okay => {
                       if (okay) {
                        window.location.href = 'view_purchase.php';
                      }
                    });</script>";
      }
     
       
      }




		 if(isset($_POST['view_sales'])){

		      $id = $_POST['id'];

		      $sql = "DELETE  FROM sales WHERE sales_id='$id'";
		      $res = mysqli_query($con,$sql);
		      if ($res) {
		      	 echo "<script>
		                       swal({title: 'Success!',
		                      text: 'Sales Invoice Deleted Successfully!',
		                      icon: 'success',
		                     type: 'success'}).then(okay => {
		                       if (okay) {
		                        window.location.href = 'view_sales.php';
		                      }
		                    });</script>";
		      }
		     
		       
		      }







      
 ?>