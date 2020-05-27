<!DOCTYPE html>
<html>
<body>

<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
echo "<br>";
$servername = "172.21.8.189:3306";
$username = "simm";
$password = "simmsimm";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
echo "<br>";
$sql = "SELECT * FROM SIMMTEST.test1";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - title: " . $row["TITLE"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();

?>

</body>
</html>