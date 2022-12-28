<!DOCTYPE html>
<?php
$connect = mysqli_connect("localhost", "root", "", "quanlysinhvien");

$mlop = $_GET['malop'];

$query = "SELECT * FROM lop WHERE malop ='$mlop'";
$ketqua = mysqli_query($connect, $query);
$row = mysqli_fetch_array($ketqua);
?>

<body>
    <form action="Update.php" method="post">
        Mã Lớp: <input type="text" name="malop" value="<?php echo $row['malop']; ?>">
        Tên Lớp: <input type="text" name="tenlop" value="<?php echo $row['tenlop']; ?>">
        <input type="submit" name="capnhat" value="Cập Nhật Lớp">
    </form>
</body>

</html>