<?php
 //session_start();
 include('database.php');
 if(!isset($_SESSION['email_id'])){
  header('location:alogin.php');
  die();
}
 if(isset($_GET['id']))
 {
 $id = $_GET['id'];
 $sql = "SELECT * FROM `admin` WHERE a_id ='" . $id . "'";
$result = $conn->query($sql);
// LOOP TILL END OF DATA 

                $rows=$result->fetch_assoc();
                
                $admin_name = $rows['admin_name'];
                $email_id = $rows['email_id'];
                $password = $rows['password'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="E:\wamp62\www\travinfo\AdminLTE-master\plugins\fontawesome-free\css\all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css\adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">User Update </h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="admin_update.php">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" name="admin_name" value="<?php echo $admin_name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_id" value="<?php echo $email_id; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $password; ?>">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>