<?php 
    include('../../connect/connect.php');
    $iduser=$_REQUEST['iduser'];
    $sql= "DELETE FROM user WHERE username='$iduser'";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        echo "khong thanh cong";    
    }
    else{
        header('Location: danhsachuser.php');
    }                             
                                    
?>