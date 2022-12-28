<?php
    include 'Show.php';
    $ma = $_GET["malop"];
    $query = " DELETE from lop where malop = '$ma'";
    $kq = mysqli_query($connect,$query);
    echo "<script>";
        if ($kq) {
            echo "alert('Xoá thành công');";
        }else{
            echo "alert('Xoá không thành công');";
        }
        echo "window.location='Show.php';";
    echo "</script>";
?>