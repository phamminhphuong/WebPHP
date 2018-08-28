<div class="container">
    <div class="nav">
        <div class="logo">
            <p class="interface">VIENA MAG</p>
            <p class="free">Free Responsive Magaxine Blogger
                <br> Template</p>
        </div>
        <div class="menu-top">
            <div class="row">
                <div class="col-md-9">
                    <div id="menu">
                        <ul>
                            <li>
                                <a id="active" href="../page/web.php">Trang chủ</a>
                            </li>
                            <?php 
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <li>
                                <a href="#">
                                    <?php echo $row["tentheloai"]; ?>
                                </a>

                                <ul>
                                    <?php 
                                        $idtheloai = $row["id"];
                                        $sql_loaitin = "SELECT * FROM loaitin WHERE idtheloai='$idtheloai'";
                                        $result_loaitin = mysqli_query($conn, $sql_loaitin);
                                        if(mysqli_num_rows($result_loaitin) > 0){
                                            while($row_loaitin = mysqli_fetch_assoc($result_loaitin)){?>
                                    <li>
                                        <a href="home/page/timkiemmenu.php?idloaitin=<?php echo $row_loaitin["id"]?>">
                                            <?php echo $row_loaitin["tenloaitin"];?>
                                        </a>
                                    </li>
                                    <?php }}?>
                                </ul>

                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <form action="index.php" method="post">
                        <div class="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="tukhoatimkiem" class="inputSearch" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" name="submit" id="btnSearch" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>