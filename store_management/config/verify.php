<?php
  
  include ('connect.php');

        if (isset($_POST['login'])) {
          $password  = $_POST['password'];
          $password  = md5($password);
          $email = $_POST['email'];


              $query  = "SELECT * FROM `users` WHERE  `email` = '$email' AND `password` = '$password'";
              $result = mysqli_query($con, $query);
              $count = mysqli_num_rows($result);

              if ($count > 0) {
                  session_start();
                  $_SESSION['giveAccess'] = $email;
                  $_SESSION['login_type'] = "user";
                  $_SESSION['id'] = session_id();
                  $_SESSION['last_login_timestamp'] = time();
                  header("Refresh: 0; ../home.php");
              }else{
                   echo "<script>alert('Invalid Credentials');window.location.href = '../login.php';</script>";
              }

        }

        

    


 
 ?>