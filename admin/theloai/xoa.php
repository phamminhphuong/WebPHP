<?php 
    include('../../connect/connect.php');
    $idtheloai=$_REQUEST['idtheloai'];
    $sql= "DELETE FROM theloai WHERE id='$idtheloai'";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        echo "khong thanh cong";
    }
    else{
        header('Location: danhsach.php');
    }                             
    ?>