<?php
   //session_start();
   include('database.php');
   if(!isset($_SESSION['email_id'])){
      header('location:alogin.php');
      die();
    }
   if(isset($_POST['id']))
    {
      $id = $_POST['id'];
 

   $user_name = $_POST['user_name'];
   $email_id = $_POST['email_id'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $state = $_POST['state'];
   $pincode = $_POST['pincode'];

   $sql = "UPDATE `user` SET `user_name`='$user_name',`email_id`='$email_id',`password`='$password',`gender`='$gender',`dob`='$dob',`address`='$address',`state`='$state',`pincode`='$pincode' WHERE `u_id` ='" . $id . "'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}

 echo " updated successfully\n";
 header('location: user_table.php');
 mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

