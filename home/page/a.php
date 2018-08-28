<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        include('function.php');
        if(isset($_POST["submit"])){
            $hoten = $_POST["hoten"];
            $diachi = $_POST["diachi"];
            $dienthoai = $_POST["dienthoai"];
            $email = $_POST["email"];
            $noidung = $_POST["noidung"];
            $nodung_lienhe = '<p><h3>Thông tin liên hệ</h3></p>
                <p>Họ tên :'.$hoten.'</p>
                <p>Họ tên :'.$diachi.'</p>
                <p>Họ tên :'.$dienthoai.'</p>
                <p>Họ tên :'.$email.'</p>
                <p>Họ tên :'.$noidung.'</p>';
                define('GUSER','thanhcong@gmail.com');
                define('GPWD','12345');
                global $message;
                smtpmailer('phuongninhbinh7696@gmail.com','thanhcong@gmail.com','send mail','thong tin lien he',$nodung_lienhe);

        }
        // include('../../PHPMailer/src/PHPMailer.php');
        include('../../PHPMailer/src/POP3.php');
    ?>
    <form action="" method="post">
        Họ tên :
        <input type="text" name="hoten" class="form-control">
        Địa chỉ :
        <input type="text" name="diachi" class="form-control">
        Điện thoại :
        <input type="text" name="dienthoai" class="form-control">
        Email :
        <input type="text" name="email" class="form-control">
        Nội dung :
        <input type="text" name="noidung" class="form-control">
        <button type="submit" name="submit">Gửi mail</button>
    </form>
</body>
</html>