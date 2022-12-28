<?php
$connect = mysqli_connect("localhost", "root","","quanlysinhvien");
    if (!$connect) {
        exit("Kết nói cơ sở dữ liệu thất bại");
    }
mysqli_query($connect, "SET NAMES 'utf8'");

$mlop = $_POST['malop'];
$tlop = $_POST['tenlop'];

$sql = "INSERT INTO lop VALUES ('$mlop','$tlop')";
$ketqua = mysqli_query($connect, $sql);

echo "<script>";
    if ($ketqua) {
        echo "alert(\"Thêm Thành Công!!\");";
    }
    else {
        echo "alert (\"Thêm không thành công\";";
    }
    echo "window.location=\"Show.php\";";
    echo "</script>";
?>