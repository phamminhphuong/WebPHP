<?php 
     include('../../connect/connect.php');
    $sql_theloai = "SELECT * FROM theloai";
    $sql_loaitin = "SELECT * FROM loaitin";
    $sql_tintuc = "SELECT * FROM tintuc";
    $sql_user = "SELECT * FROM user";
    $result1 = mysqli_query($conn, $sql_theloai); 
    $result2 = mysqli_query($conn, $sql_loaitin); 
    $result3 = mysqli_query($conn, $sql_tintuc); 
    $result4 = mysqli_query($conn, $sql_user); 
    $theloai=0;   
    while($row = mysqli_fetch_assoc($result1)){
        $theloai++;
    }
    $loaitin=0; 
    while($row1 = mysqli_fetch_assoc($result2)){
        $loaitin++;
    }
    $tintuc=0; 
    while($row2 = mysqli_fetch_assoc($result3)){
        $tintuc++;
    }
    $user=0; 
    while($row3 = mysqli_fetch_assoc($result4)){
        $user++;
    };
     
    ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Học PHP</title>
  <!-- include -->
  <?php include('../layout/linkstyle.php')?>
  <!--  -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- include header -->
  <?php include('../layout/header.php')?>
 <!-- include menu -->
  <?php include('../layout/menu.php')?>
  <!--  -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">The loai</span>
              <span class="info-box-number"> <?php echo $theloai;?> </span>
              <p style="margin-left:55px;"><a href="../theloai/danhsach.php">Link</a></p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Loai tin</span>
              <span class="info-box-number"><?php echo $loaitin;?></span>
              <p style="margin-left:55px;"><a href="../loaitin/danhsachloaitin.php">Link</a></p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tin tuc</span>
              <span class="info-box-number"><?php echo $tintuc;?></span>
              <p style="margin-left:55px;"><a href="../tintuc/danhsachtintuc.php">Link</a></p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number"><?php echo $user;?></span>
              <p style="margin-left:55px;"><a href="../user/danhsachuser.php">Link</a></p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- include footer -->
<?php include('../layout/footer.php')?>
<!-- include footer -->
</div>
<!-- ./wrapper -->
<!-- include script -->
<?php include('../layout/linkscript.php')?>
 <!--  -->
</body>
</html>
