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
 

   $admin_name = $_POST['admin_name'];
   $email_id = $_POST['email_id'];
   $password = $_POST['password'];

   $sql = "UPDATE `admin` SET `admin_name`='$admin_name',`email_id`='$email_id',`password`='$password' WHERE `a_id` ='" . $id . "'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}
 
//echo " updated successfully\n";
header("location:admin_table.php");
mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

