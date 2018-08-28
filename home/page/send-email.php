<?php 
    session_start();
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
    if (isset($_POST["btnSendEmail"])) {
        if (!empty($_POST["email"]) && !empty($_POST["tieude"]) && !empty($_POST["noidung"])) 
        {
            $email = $_POST["email"];
            $tieude = $_POST["tieude"];
            $noidung = $_POST["noidung"];
            echo $email."<br>";
            echo $tieude."<br>";
            echo $noidung."<br>";
           
        }
        else{
           echo "<script> alert('Bạn chưa nhập đầy đủ thông tin');</script>";
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
    <link rel="stylesheet" href="../../align/style_home/css/style.css">
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
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 login2">
                <h3>Send email</h3>
                <div class="form-signup2">
                    <form action="send-email.php" method="post">
                        <input type="text" name="email" placeholder="Nhập email" class="form-control">
                        <input type="text" name="tieude" placeholder="Nhập tieude" class="form-control">
                        <textarea placeholder="Nhap noi dung" name="noidung" id="" cols="2" rows="4" class="form-control"></textarea>
                        <button tyle="submit" name="btnSendEmail">Send</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- footer -->
    <?php include('../layout/footer.php')?>
</body>

</html>