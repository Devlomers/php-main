<?php
   //session_start();
   include('database.php');
   if(!isset($_SESSION['email_id'])){
      header('location:alogin.php');
      die();
    }
   
   $ar_title = $_POST['ar_title'];
   $meta_desc = $_POST['meta_desc'];
   $user_name = $_POST['user_name'];
   $description = $_POST['description'];
   $image = $_POST['image'];


   $sql = "INSERT INTO `article`(`ar_title`,`meta_desc`,`user_name`,`description`,`image`) VALUES ('$ar_title','$meta_desc','$user_name','$description','$image')";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Not Inserted ');
 }
 
header('location:article_table');
mysqli_close($conn);
?>
