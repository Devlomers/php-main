<?php
include('database.php');
if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }

   $sql = "SELECT * from `user`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not create database: ');
 }
 echo "Database travinfo shown successfully\n";
 mysqli_close($conn);
 
//  $arr = mysqli_fetch_array($res);
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Gender</td>
                    <td>DOB</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['u_id'];?></td>
            <td><?php echo $arr['user_name'];?></td>
            <td><?php echo $arr['email_id'];?></td>
            <td><?php echo $arr['password'];?></td>
            <td><?php echo $arr['gender'];?></td>
            <td><?php echo $arr['dob'];?></td>
            <br>
            <td><a href="userupdateform.php?id=<?php echo $arr['u_id']; ?>">Edit</a></td>
            <td><a href="delete_user.php?id=<?php echo $arr['u_id']; ?>">Delete</a></td>
        </tr> 
        <?php}?>
        </table>
        <?php } ?>
    </body>
</html>