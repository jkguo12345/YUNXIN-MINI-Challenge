<?php
$servername = "localhost";
$username = "root";
$password = "crb";
$dbname = "myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT username,password FROM mima";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["username"]. " - Name: " . $row["password"]."<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>