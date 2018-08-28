<?php 
    $severname = "localhost";
    $username = "root";
    $password ="";
    $db = "web";
    $conn = mysqli_connect($severname, $username, $password, $db);
    if (!$conn) {
        echo "loi ket noi";
        exit();
    }
    else{
     
    }
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        table{
            width:300px;
            text-align:center;
        }
        thead {
            color: green;
        }
        
        tbody {
            color: blue;
        }
        
        tfoot {
            color: red;
        }
        
        table,
        th,
        td {
            border: 1px solid black;                                            
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th> Id </th>
                <th> Tên thể loại </th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysql = "SELECT * FROM test";
                $result = mysqli_query($conn, $mysql);
                if (mysqli_num_rows($result)) {
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["id"]?>
                    </td>
                    <td>
                        <?php echo $row["tenloai"]?>
                    </td>
                </tr>
                <?php }}?>
        </tbody>
    </table>


</body>

</html>