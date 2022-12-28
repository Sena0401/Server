<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$connect = mysqli_connect("localhost", "root", "", "quanlysinhvien");
if (!$connect) {
    exit("Kết nói cơ sở dữ liệu thất bại");
}
$query = "SELECT * FROM lop";
$ketqua = mysqli_query($connect, $query);

?>
<!-- xuất thong tin của lớp -->

<body>
    <h1>
        <center>Danh Sách Lớp</center>
    </h1>
    <table align="center" border="2">
        <tr>
            <td border="2">
                <center><b>STT</b>
            </td>
            <td border="2">
                <center><b>MÃ LỚP</b>
            </td>
            <td border="2">
                <center><b>TÊN LỚP</b>
            </td>
            <td border="2">
                <center><b>XOÁ LỚP</b>
            </td>
            <td border="2">
                <center><b>CẬP NHẬT LỚP</b>
            </td>
        </tr>
        <?php
        $stt = 1;
        while ($row = mysqli_fetch_array($ketqua)) {
            echo "<tr>";
            echo "<td><center>" . $stt . "</center></td>";
            echo "<td>" . $row["malop"] . "</td>";
            echo "<td>" . $row["tenlop"] . "</td>";
            echo "<td><center><a href=\"Delete.php?malop=" . $row["malop"] . "\">Xoá</a></center></td>";
            echo "<td><center><a href=\"ShowUpdate.php?malop=" . $row["malop"] . "\">Cập nhật</a></center></td>";
            echo "</tr>";
            $stt++;
        }
        ?>
        <tr>
            <td> <a href="Input.php">Thêm lớp</a></td>
        </tr>

    </table>
</body>

</html>