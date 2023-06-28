<?php
session_start();
include_once "consnn.php";

$p_content = addslashes($_POST["content"]);
echo $p_content;
$p_mail = $_SESSION["account"];
$sql = "SELECT * FROM `membersystem` WHERE mail = '$p_mail'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$p_name = $row["name"];
$sql_content = "INSERT INTO `membercontent`
(`name`, `message`) 
VALUES 
('$p_name','$p_content')";

 
if($conn->query($sql_content) === TRUE){
    echo '建立成功<br>';
    exit(header("Refresh:0;url=index.php"));
}else{
    echo '建立失敗<br>' . $sql_content . "<br>" . $conn->error;;
}
?>