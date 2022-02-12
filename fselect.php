<?php
include('database.php');
if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }

   $sql = "SELECT * from `feedback`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Not displayed ');
    mysqli_close($conn);
 
 }
 echo " successfully\n";
 
//  $arr = mysqli_fetch_array($res);
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>FeedID</td>
                    <td>UserID</td>
                    <td>Feedback</td>
                    <td>Contact</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['f_id'];?></td>
            <td><?php echo $arr['u_id'];?></td>
            <td><?php echo $arr['u_fd'];?></td>
            <td><?php echo $arr['contact'];?></td>

            <td><a href="delete_feed.php?id=<?php echo $arr['f_id']; ?>">Delete</a></td>
        </tr> 
        <?php } ?>
        </table>
    </body>
</html>