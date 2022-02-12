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
                <h3 class="card-title">ADD Article</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="art_insert.php">
                
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="ar_title" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Meta_Desc</label>
                    <Textarea class="form-control" id="exampleInputDOB" placeholder="Enter meta-desc" name="meta_desc" required></Textarea>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="enter date" name="date" required>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputDOB">User Name</label>
                    <input type="text" class="form-control" id="exampleInputDOB" placeholder="user" name="user_name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">Description</label>
                    <Textarea class="form-control" id="exampleInputDOB" placeholder="description" name="description" required></Textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">Image</label>
                    <input type="file" class="form-control" id="exampleInputDOB" placeholder="image" name="image" required>
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

</body>
</html>