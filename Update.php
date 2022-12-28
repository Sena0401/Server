<?php
    $connect = mysqli_connect("localhost", "root", "", "quanlysinhvien");
    if (!$connect) {
        exit("kết nối thất bại !!");
    }

$mlop = $_POST['malop'];
$tlop = $_POST['tenlop'];

if (isset($_POST["capnhat"])) {
    $query = "UPDATE lop SET malop='$mlop', tenlop ='$tlop' WHERE malop='$mlop'";
    $ketqua = mysqli_query($connect, $query);
}

echo "<script>";
if ($ketqua) {
    echo  "alert ('Cập nhật lớp thành công !!');";
} else {
    echo "alert ('Cập nhật lớp không thành công !!');";
}
echo "window.location='Show.php';";
echo "</script>";
?>