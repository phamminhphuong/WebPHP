<!-- header -->
<div class="container">
    <div class="header">
        <div class="row">
            <div class="col-md-2">
                <ul class="user_lognout1">
                    <li>
                        <a href="../page/login.php" id="user">
                            <?php
                    if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
                        ?>
                                <span class="glyphicon glyphicon-user"></span> About
                                <?php
                    } else {
                        ?>
                        <span class="glyphicon glyphicon-user"></span>
                        <?php
                         $username = $_SESSION["username"];
                        $sql_taikhoan = "SELECT * FROM user WHERE username = '$username'";
                        $result_taikhoan = mysqli_query($conn, $sql_taikhoan);
                        $row_taikhoan = mysqli_fetch_assoc($result_taikhoan);
                        echo $row_taikhoan["hoten"]; ?>
                        <?php
                    }?> </a>
                        <ul class="user_lognout2">
                            <li><a href="../page/lognout.php"> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 xs">
                <a href="#">
                    <span class="glyphicon glyphicon-list-alt"></span> Sitemap</a>
            </div>
            <div class="col-md-1">
                <a href="signin.php">
                    <span class="glyphicon glyphicon-envelope"></span> Sign in </a>
            </div>
            <div class="col-md-1 xs">
                <a href="signup.php">
                    <span class="glyphicon glyphicon-ok-circle"></span> Sign out</a>
            </div>
            <div class="col-md-1 xs">
                <a href="../page/send-email.php">
                    <span class="glyphicon glyphicon-envelope"></span> Send email</a>
            </div>

            <div class="col-md-3 col-md-offset-2">
                <div class="row">
                    <div class="col-md-2 icon">
                        <img src="../../align/style_home/image/twi.png" alt="">
                    </div>
                    <div class="col-md-2 icon">
                        <img src="../../align/style_home/image/camera.png" alt="">
                    </div>
                    <div class="col-md-2 icon">
                        <img src="../../align/style_home/image/fa.png" alt="">
                    </div>
                    <div class="col-md-2 icon">
                        <img src="../../align/style_home/image/g.png" alt="">
                    </div>
                    <div class="col-md-2 icon">
                        <img src="../../align/style_home/image/+.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>