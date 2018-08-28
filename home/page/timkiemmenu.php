<?php 
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website tin tức PHP thuần</title>
    <link rel="stylesheet" href="../../align/style_home/css/web.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- header -->
    <?php include('../layout/header.php')?>
    <!-- nav -->
    <?php include('../layout/nav.php')?>
    <!-- section -->
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">Tìm kiếm</div>
                        <?php 
                            $idloaitin = $_REQUEST["idloaitin"];
                            $tintuc1 = "SELECT * FROM tintuc WHERE idloaitin='$idloaitin'";
                            $result10 = mysqli_query($conn, $tintuc1);
                            if(mysqli_num_rows($result10) > 0){
                                while($row10 = mysqli_fetch_assoc($result10)){
                            
                        ?>
                        <div class="panel-body">
                        <a href="chitiet.php?idtintuc=<?php echo $row10['id']?>"><img src="../../align/image/<?php echo $row10['hinhanh']?>" width="170px" height="130px" alt=""></a>
                        <h4><a href="chitiet.php?idtintuc=<?php echo $row10['id']?>"><?php echo $row10['tieude']?></a></h4>
                        </div>
                                <?php }}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include('../layout/footer.php')?>
</body>

</html>