<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="udata.php">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="user_name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGenr">Gender</label>
                    <br>
                    <label for="exampleInputGenr" style="font-weight:500"><input type="radio" class="form-control" id="exampleInputGenr" name="gender" value="MALE">MALE</label> &nbsp; &nbsp;
                    <label for="exampleInputGenr" style="font-weight:500"><input type="radio" class="form-control" id="exampleInputGenr" name="gender" value="FEMALE">FEMALE</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">DOB</label>
                    <input type="text" class="form-control" id="exampleInputDOB" placeholder="DOB" name="dob">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                </div>
              </form>
            </div>
           </div>
        </div>
        </div>
    </section>

<?php
  include('database.php');
     //session_start();
   
   if(isset($_POST['insert']))
   {

   $email = $_POST['txt_email'];
   $name = $_POST['txt_name'];
   $password = $_POST['txt_pass'];
   $gender = $_POST['rdogen'];
   $dob = $_POST['txt_dob'];

   $sql = "INSERT INTO `user`(`user_name`,`email_id`,`password`,`dob`,`gender`) VALUES ('$name','$email','$password','$dob','$gender')";
   $res = mysqli_query($conn, $sql);
   //echo $sql;ex
   if(!$res) {
    die('Data not inserted');
 }
 

    echo "inserting data";
    mysqli_close($conn);
   }
?>

</body>
</html>