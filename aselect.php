<?php
include('database.php');

   $sql = "SELECT * from `admin`";
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
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['a_id'];?></td>
            <td><?php echo $arr['admin_name'];?></td>
            <td><?php echo $arr['email_id'];?></td>
            <td><?php echo $arr['password'];?></td>
            <td><a href="au_login.php?id=<?php echo $arr['a_id']; ?>">Edit</a></td>
            <td><a href="delete_a.php?id=<?php echo $arr['a_id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>