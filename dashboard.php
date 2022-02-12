<?php
include('database.php');
if(!isset($_SESSION['email_id'])){
  header('location:alogin.php');
  die();
}
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-master\plugins\fontawesome-free\css\all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css\adminlte.min.css">
  <style type="text/css">
    .admin{
      background: #0ea5e9;
      color: #075985;
    }
    .titi{
      padding: 2vh 10vw 10vh 2vw;
      font-family: 'Noto Sans', sans-serif;
    }
    .user{
      background-color: #6366f1;
      color: #3a3db0;
    }
    .uart{
      background-color: #d946ef;
      color: #9c2aad;
    }
    .article{
      background-color: #f43f5e;
      color: #bf0827;
    }
    .feed{
      background-color: #fea456;
      color: #b3590c;
    }
  </style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"> 

  <div class="preloader flex-column dark-mode justify-content-center align-items-center">
    <img class="animation__wobble" src="img/Travinfo1.png" alt="AdminLTELogo" height="100" width="200">
  </div>

  <!-- Navbar -->
  <nav class=" main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="dashboard.php" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <?php include('aside.php');
  ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-local" style="background-image:url('img/vectorbg.png'); background-size:200vh;" >

  <!-- <img class="animation__shake" src="img/vectorbg.png" alt="AdminLTELogo" height="70%" width="70%"> -->

    <!-- Content Header (Page header) -->    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 h1">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">forms</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="ofc container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box admin ">
              <div class="titi">
                <h3>Admin</h3>
              </div>
              <a href="admin_table.php" class="small-box-footer p-3">View Records</a>
              <div class="icon">
                <i class="far fa-solid fa-user pr-3"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box user">
              <div class="titi">
                <h3>User</h3>
              </div>
              <a href="user_table.php" class="small-box-footer p-3">View Records</a>
              <div class="icon">
                <i class="fas fa-solid fa-users pr-3"></i>
              </div>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box uart">
              <div class="titi">
                <h3>User-Article</h3>
              </div>
              <div class="icon">      
              </div>
              <a href="user_a_table.php" class="small-box-footer p-3">View Records</a>
              <div class="icon">
                <i class="far fa-solid fa-newspaper pt-5"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box article">
              <div class="titi">
                <h3>Article</h3>
              </div>
              <div class="icon">
              </div>
              <a href="art_form.php" class="small-box-footer">Insert</a>
              <a href="article_table.php" class="small-box-footer">View Records</a>
              <div class="icon">
                <i class="far fa-solid fa-newspaper pr-3 pt-5"></i>
              </div>
            </div>
          </div>

          <!-- ./col -->
                    <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box feed">
              <div class="titi">
                <h3>Feedback<sup style="font-size: 20px"></sup></h3>
              </div>
              <div class="icon">      
              </div>
              <a href="feed_table.php" class="small-box-footer p-3">View Records</a>
              <div class="icon">
              <i class="far fa-solid fa-comment-dots pr-2 pt-5"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          

          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-warning"> -->
              <!-- <div class="titi"> -->
                <!-- <h3>Bookmark</h3> -->
              <!-- </div> -->
              <!-- <div class="icon"> -->
              <!-- </div> -->
              <!-- <a href="bookmark_table.php" class="small-box-footer p-3">View Records</a> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> -->
        
        <!-- /.row -->
        <!-- Main row -->
                  <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div> /.card-body -->
            <!-- </div> --> 
            <!-- /.card -->

            <!-- DIRECT CHAT -->
              <!-- /.card-header -->
              <!-- /.card-body -->
              

            <!-- TO DO List -->


              <!-- /.card-body -->
              
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          

            <!-- Map card -->
              <!-- card tools -->
                
                <!-- /.card-tools -->
              </div>
              <!-- /.card-body-->
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            
                
              </div>
              

                   <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer navbar-dark navbar-light">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Travinfo.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->
  <?php include('javas.php'); ?>
</div>
</body>
</html>
