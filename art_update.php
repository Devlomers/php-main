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
 

   $ar_title = $_POST['ar_title'];
   $meta_desc = $_POST['meta_desc'];
   $user_name = $_POST['user_name'];
   $description = $_POST['description'];
   $image = $_POST['image'];

   $sql = "UPDATE `article` SET `ar_title`='$ar_title',`meta_desc`='$meta_desc',`user_name`='$user_name',`description`='$description',`image`='$image' WHERE `ar_no` ='" . $id ."'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}

 echo " updated successfully\n";
 header('location:article_table.php');
 mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

