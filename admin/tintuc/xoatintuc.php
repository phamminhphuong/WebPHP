<?php 
    include('../../connect/connect.php');
    $idtintuc=$_REQUEST['idtintuc'];
    $sql= "DELETE FROM tintuc WHERE id='$idtintuc'";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        echo "khong thanh cong";
    }
    else{
        header('Location: danhsachtintuc.php');    
    }                             
                                    
?>