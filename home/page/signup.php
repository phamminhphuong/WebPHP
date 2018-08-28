<?php 
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
    if (isset($_POST["submit1"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"]) 
            && !empty($_POST["hoten"]) 
            && !empty($_POST["ngaysinh"])) 
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hoten = $_POST["hoten"];
            $ngaysinh = $_POST["ngaysinh"];
            $email = $_POST["email"];
            $level = 0;
            if($_FILES["hinhanh"]["error"] > 0 ){
                echo "khong thanh cong";
            }
            else{
                $t=move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../../align/image/'.$_FILES["hinhanh"]["name"]);
                $hinhanh = $_FILES["hinhanh"]["name"];
            }
            $sql_signup = "INSERT INTO user(username, password, hoten, ngaysinh, email, hinhanh, level) VALUES('$username','$password', '$hoten','$hinhanh', '$ngaysinh', '$email', '$level')";
            $result_signup = mysqli_query($conn, $sql_signup);
            if (!$result) {
                echo "co loi";
            }
            else{
                header('Location: web.php');
            }
           
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
            <div class="col-md-6 login">
                <h3>Sign up</h3>
                <div class="form-signup">
                    <form action="signiup.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="username" placeholder="Nhập username" class="form-control">
                        <input type="password" name="password" placeholder="Nhập password" class="form-control">
                        <input type="text" name="hoten" placeholder="Nhập họ tên" class="form-control">
                        <input type="email" name="email" placeholder="Nhập email" class="form-control">
                        <input type="file" name="hinhanh" class="form-control">
                        <input type="date" name="ngaysinh" class="form-control">
                        <button tyle="submit" name="submit1">Login</button>
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