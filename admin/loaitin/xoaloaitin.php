<?php 
    include('../../connect/connect.php');
    $idloaitin=$_REQUEST['idloaitin'];
    $sql= "DELETE FROM loaitin WHERE id='$idloaitin'";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        echo "khong thanh cong";
    }
    else{
        header('Location: danhsachloaitin.php');
    }                             
                                    
?>