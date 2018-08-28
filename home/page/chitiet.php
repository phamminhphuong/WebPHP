<?php 
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
    $idtintuc = $_REQUEST['idtintuc'];
    $sql2 = "SELECT * FROM tintuc WHERE id='$idtintuc'";
    $result2 = mysqli_query($conn, $sql2);
    $row4 = mysqli_fetch_assoc($result2);  
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

                <div class="col-md-3">
                <img src="../../align/image/<?php echo $row4['hinhanh']?>" width="170px" height="130px" alt="">
                </div>
                <div class="col-md-9">
                <h4>
                  <?php echo $row4["tieude"]?>
                 </h4>
                <h5>
                    <?php echo $row4["chitiet"];?>
                </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include('../layout/footer.php')?>
</body>

</html>