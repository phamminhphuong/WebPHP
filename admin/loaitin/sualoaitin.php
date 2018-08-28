<?php 
    include('../../connect/connect.php');
    $idloaitin=$_REQUEST['idloaitin'];
    $sql= "SELECT*FROM loaitin WHERE id='$idloaitin'";
    $result= mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);  
    if(isset($_POST["submit"])){
        if(isset($_POST["tenloaitin"]) && isset($_POST["idtheloai"])){
            $tenloaitin = $_POST["tenloaitin"];
            $idtheloai = $_POST["idtheloai"];
            // echo $tenloaitin." ";
            // echo $idloaitin." ";
            // echo $idtheloai;
            $sql = "UPDATE loaitin SET tenloaitin='$tenloaitin', idtheloai='$idtheloai' WHERE id='$idloaitin'";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                echo "khong thanh cong";
            }
            else{
                header('Location: danhsachloaitin.php');
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
                                
                                <form class="form-horizontal" method="post" action="sualoaitin.php">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên loại tin</label>
                                        <input type="hidden" name="idloaitin" value="<?php echo $row['id'];?>">

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?php echo $row["tenloaitin"]; ?>" name="tenloaitin" placeholder="Nhập tên loại tin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Thể loại</label>
                                        <div class="col-sm-10">
                                            <select name="idtheloai" class="form-control">
                                                <?php 
                                                    $sql_select_id="SELECT idtheloai FROM loaitin WHERE id='$idloaitin'";
                                                    $idtheloai1 = mysqli_query($conn, $sql_select_id);
                                                    $row1=mysqli_fetch_assoc($idtheloai1);
                                                    $sqldanhsach = 'SELECT * FROM theloai';
                                                    $result = mysqli_query($conn, $sqldanhsach);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                           
                                                 ?>
                                                    <option <?php  if($row["id"]==$row1["idtheloai"]) echo "selected";?> value="<?php echo $row['id']?>"><?php echo $row['tentheloai']?></option>
                                                <?php 
                                                    }
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-info pull-right">Sửa</button>
                                    <button type="submit" style="margin-right:10px;" name="submit" class="btn btn-info pull-right"><a href="danhsachloaitin.php"> Danh sách </a></button>

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
