<?php 
    session_start();
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
    if(isset($_POST["submit"])){
        if(isset($_POST["tukhoatimkiem"])){
            $tukhoatimkiem = $_POST["tukhoatimkiem"];
            header("Location: timkiem.php?tukhoa=".$tukhoatimkiem);
        }
    }
   
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
                <div class="col-md-9">
                    <!--  -->
                    <div class="row">
                        <?php 
                            $tintuc = "SELECT * FROM tintuc";
                            $result4 = mysqli_query($conn, $tintuc);
                            if(mysqli_num_rows($result4) > 0){
                                while($row = mysqli_fetch_assoc($result4)){
                        ?>
                        <div class="col-md-4">
                        <a href="chitiet.php?idtintuc=<?php echo $row['id']?>"><img src="../../align/image/<?php echo $row['hinhanh']?>" width="170px" height="130px" alt=""></a>
                            <h4><a href="chitiet.php?idtintuc=<?php echo $row['id']?>"><?php echo $row['tieude']?></a></h4>
                        </div>
                               <?php }}?>
                    </div>
             
                    <!--  -->
                </div>
                <div class="col-md-3">
                    <div class="s-right">
                        <div class="row">
                            <h3 id="tieude">Thể loại</h3>
                        </div>
                        <div class="row">
                            <img src="../../align/style_home/image/twi.png" width="100px" height="100px" alt="">
                            <h4>Tiêu đề</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include('../layout/footer.php')?>
</body>

</html>