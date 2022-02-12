<?php
   //session_start();
   include('database.php');
   if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }
   
   $sql = "SELECT * from `admin`";
   $res = mysqli_query($conn, $sql);
   
   if(!$res) {
    die('Could not create database: ');
   }

   $rows=$res->fetch_assoc();
                
   $admin_name = $rows['admin_name'];
   $email_id = $rows['email_id'];
   $password = $rows['password'];

   
 echo "Database travinfo created successfully\n";
mysqli_close($conn);
?>
