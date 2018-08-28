<?php
    include('../../connect/connect.php');
    if(isset($_POST["submit"])){
        if(isset($_POST["username"]) && isset($_POST["hoten"]) && isset($_POST["ngaysinh"]) && isset($_POST["email"]) && isset($_FILES["hinhanh"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $hoten = $_POST["hoten"];
            $ngaysinh = $_POST["ngaysinh"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $level = $_POST["level"];
            if($_FILES["hinhanh"]["error"] >0){
                echo "loi file";
            }
            else{ 
                move_uploaded_file($_FILES["hinhanh"]["tmp_name"], '../../align/image/'.$_FILES["hinhanh"]["name"]);
                $hinhanh=$_FILES["hinhanh"]["name"];
               
            }
            $themuser = "INSERT INTO user(username, hoten, ngaysinh, email, hinhanh, password, level) VALUES('$username','$hoten','$ngaysinh', '$email','$hinhanh','$password', '$level')";
            $result2 = mysqli_query($conn, $themuser);
            if(!$result2){
                echo "khong ton tai";
            }
            else{
                header('Location: danhsachuser.php');
                die();
            }
          
        }
    }
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
                    Trang admin
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thêm user</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <form class="form-horizontal" method="post" action="themuser.php" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label"> Username </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" placeholder="Nhập username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" placeholder="Nhập password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="hoten" placeholder="Nhập tên họ tên">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="ngaysinh">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="hinhanh">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label"> Level </label>
                                        <div class="col-sm-10">
                                           <select name="level" id="" class="form-control">
                                               <option value="1"> Admin </option>
                                               <option value="0"> Member </option>
                                           </select>
                                        </div>
                                    </div>
                                  
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-info pull-right">Thêm</button>
                                    <button type="submit" style="margin-right:10px;" name="submit" class="btn btn-info pull-right"><a href="danhsachuser.php"> Danh sách </a></button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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