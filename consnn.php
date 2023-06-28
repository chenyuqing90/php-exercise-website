<?php
date_default_timezone_set("Asia/Taipei");
//----DB連接----
$servername = "localhost";
$username = "root";
$password = "cf23754590";
$dbname = "newtest";
// 建立連接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
} 
//echo "連接成功<br>";
//----DB連結完成----

?>
