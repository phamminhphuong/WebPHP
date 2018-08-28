<?php 
     include('../../connect/connect.php');
    $idtheloai=$_REQUEST['code'];
    $sql= "SELECT*FROM theloai WHERE id='$idtheloai'";
    $result= mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);  
    if(isset($_POST["submit"])){
        if(isset($_POST["tentheloai1"])){
            $tentheloai1 = $_POST["tentheloai1"];
            $sql = "UPDATE theloai SET tentheloai='$tentheloai1' WHERE id='$idtheloai'";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                echo "khong thanh cong";
            }
            else{
                header('Location: danhsach.php');
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
                                    <h3 class="box-title">Sửa thể loại</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                
                                <form class="form-horizontal" method="post" action="sua.php?code=<?php echo $row['id'];?>">
                                <input type="hidden" name="_token">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Tên thể loại</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="code" value="<?php echo $row['id'];?>">
                                                <input type="text" class="form-control" name="tentheloai1" value="<?php echo $row['tentheloai']?>"  placeholder="Nhập tên thể loại">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-info pull-right"> Sửa </button>
                                        <button type="submit" style="margin-right:10px;" name="submit" class="btn btn-info pull-right"><a href="danhsach.php"> Danh sách </a></button>

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
