<?php
 //session_start();
 include('database.php');
 if(!isset($_SESSION['email_id'])){
  header('location:alogin.php');
  die();
}
 if(isset($_GET['id']))
 {
 $ar_no = $_GET['id'];
 $sql = "SELECT * FROM `article` WHERE ar_no ='" . $ar_no . "'";
 $result = $conn->query($sql);
  // LOOP TILL END OF DATA 

                $rows=$result->fetch_assoc();
                
                $ar_title = $rows['ar_title'];
                $meta_desc = $rows['meta_desc'];
                $user_name = $rows['user_name'];
                $description = $rows['description'];
                $image = $rows['image'];

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
                <h2 class="card-title">Article Update </h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="art_update.php">
                <input type="hidden" name="id" value="<?php echo $ar_no;?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="ar_title" value="<?php echo $ar_title; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub-Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter sub title" name="meta_desc" value="<?php echo $meta_desc; ?>">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="date" value="">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputDOB">Editor name</label>
                    <input type="text" class="form-control" id="exampleInputDOB" placeholder="Editor" name="user_name" value="<?php echo $user_name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">Description</label>
                    <input type="text" class="form-control" id="exampleInputDOB" placeholder="Editor" name="description" value="<?php echo $description; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">Image</label>
                    <input type="file" class="form-control" id="exampleInputDOB" placeholder="Editor" name="image" value="<?php echo $image; ?>">
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