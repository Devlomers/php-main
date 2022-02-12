<?php
 include('database.php');
 if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }
   $sql = "SELECT * from `user_article`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not display');
 }
 echo "successfully\n";
 mysqli_close($conn);
 
//  $arr = mysqli_fetch_array($res);
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Ar No.</td>
                    <td>Title</td>
                    <td>Meta_Desc</td>
                    <td>User-Name</td>
                    <td>Description</td>
                    <td>Image</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['ar_no'];?></td>
            <td><?php echo $arr['ar_title'];?></td>
            <td><?php echo $arr['meta_desc'];?></td>
            <td><?php echo $arr['user_name'];?></td>
            <td><?php echo $arr['descritpion'];?></td>
            <td><?php echo $arr['image'];?></td>
            
            <td><a href="user_a_delete.php?id=<?php echo $arr['ar_no']; ?>">Delete</a></td>
        </tr> 
        <?php } ?>
        </table>
    </body>
</html>