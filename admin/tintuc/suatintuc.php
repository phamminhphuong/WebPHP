<?php 
    include('../../connect/connect.php');
    $idtintuc=$_REQUEST['idtintuc'];
    $sql= "SELECT*FROM tintuc WHERE id='$idtintuc'";
    $result= mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);  
    if(isset($_POST["submit"])){
        if(isset($_POST["tieude"]) && isset($_POST["chitiet"]) && isset($_POST["idloaitin"])){
            $tieude = $_POST["tieude"];
            $chitiet = $_POST["chitiet"];
            $idloaitin = $_POST["idloaitin"];
            $soluotxem=0;
            if(isset($_FILES["hinhanh"])){
                if($_FILES["hinhanh"]["error"] >0){
                    $hinhanh=$row["hinhanh"];
                }
                else{
                    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],"../../align/image/".$_FILES["hinhanh"]["name"]);
                    $hinhanh=$_FILES["hinhanh"]["name"];
                }
             }
            else{
                $hinhanh=$row["hinhanh"];
            }
            $sqlsuatintuc = "UPDATE tintuc SET tieude='$tieude', chitiet='$chitiet', hinhanh='$hinhanh', soluotxem='$soluotxem', idloaitin='$idloaitin' WHERE id='$idtintuc'";
            $result2 = mysqli_query($conn, $sqlsuatintuc);
            if(!$result2){
                echo "khong ton tai";
            }
            else{
                header('Location: danhsachtintuc.php');
                die();
            }
        }
        else{
            echo "Ban phai chon hinh anh";
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
                                <h3 class="box-title">Sửa tin tức</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <form class="form-horizontal" method="post" action="suatintuc.php" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tieu de</label>
                                        <input type="hidden" name="idtintuc" value="<?php echo $row['id'];?>">

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tieude" value="<?php echo $row['tieude']?>" placeholder="Nhập tieu de">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">chi tiet</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="chitiet" rows="3" placeholder="Enter ..."><?php echo $row['chitiet']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Hinh anh</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="hinhanh">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Loại tin</label>
                                        <div class="col-sm-10">
                                            <select name="idloaitin" class="form-control">
                                                <?php 
                                                    $sql_select_id="SELECT idloaitin FROM tintuc WHERE id='$idtintuc'";
                                                    $idtheloai1 = mysqli_query($conn, $sql_select_id);
                                                    $row1=mysqli_fetch_assoc($idtheloai1);
                                                    $sqldanhsach = 'SELECT * FROM loaitin';
                                                    $result = mysqli_query($conn, $sqldanhsach);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                           
                                                 ?>
                                                <option <?php if($row[ "id"]==$row1[ "idloaitin"]) echo "selected";?> value="
                                                    <?php echo $row['id']?>">
                                                    <?php echo $row['tenloaitin']?>
                                                </option>
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
                                    <button type="submit" style="margin-right:10px;" name="submit" class="btn btn-info pull-right">
                                        <a href="danhsachtintuc.php"> Danh sách </a>
                                    </button>

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