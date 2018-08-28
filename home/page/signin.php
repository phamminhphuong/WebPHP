<?php 
    session_start();
    include('../../connect/connect.php');
    $sql = 'SELECT*FROM theloai';
    $result = mysqli_query($conn, $sql);
    $sql1 = 'SELECT*FROM theloai';
    $result1 = mysqli_query($conn, $sql1);
    if (isset($_POST["btnLogin"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) 
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $sql_signup = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result_signin = mysqli_query($conn, $sql_signup);
            if (mysqli_num_rows($result_signin) > 0) {
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                // if($row_level["level"] == 1){
                //     header('Location: ../../admin/dasboard');
                // }else{
                //     header('Location: web.php');
                // }
                $row_level = mysqli_fetch_assoc($result_signin);
                if($row_level["level"] == 1 ){
                    header('Location: ../../admin/dasboard/index.php');
                }
                else{
                    header('Location: web.php');
                }
                
            }
            else{
                echo "<script> alert('Đăng nhập không thành công');</script>";
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
            <div class="col-md-6 login1">
                <h3>Sign in</h3>
                <div class="form-signup1">
                    <form action="signin.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="username" placeholder="Nhập username" class="form-control">
                        <input type="password" name="password" placeholder="Nhập password" class="form-control">
                        <button tyle="submit" name="btnLogin">Login</button>
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