<?php
include("database.php");     

    // $admin_name = $_POST['admin_name'];
    // $password = $_POST['password'];
    // $error = "";
    // $success = "";
    $error = "";

    if(isset($_POST['insert'])){

        $email_id = $_POST['email_id'];  
        $password = $_POST['password'];  
        $success = "";
    
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from `admin` WHERE `email_id` = '$email_id' and `password` = '$password'";   
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
          
        if($count == 1){ 
            echo "Login successful";
            $_SESSION['email_id'] = $row['email_id'];
            header('location:dashboard.php'); 
            die();
        }  
        else if($password != "password"){  
            $error="Login failed. Invalid username or password";
            // header('location:alogin.php');				
        }     
    }
    // // $pass = password_hash($Password, PASSWORD_BCRYPT);
    // // $Cpass = password_hash($Cpassword, PASSWORD_BCRYPT);

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
</head>
<link rel="stylesheet" href="css\adminlte.min.css">
<body class="hold-transition sidebar-mini">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Admin Login</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_id" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer" style="width:15%;">
                  <button type="submit" class="btn btn-primary" name="insert" href="dashboard.php"> Log In</button>
                </div>
              </form>
            </div>
            <p class="error" style="color:red; margin-left:15px; "> <?php echo $error; ?> </p>
        </div>
    </div>
</section>
</body>
</html>
