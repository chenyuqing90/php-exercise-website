<?php
include_once "consnn.php";
session_start();

$p_mail = addslashes($_POST["inputmail"]);
$sql = "SELECT * FROM `membersystem` WHERE mail = '$p_mail'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$p_pwd = addslashes($_POST["inputpwd"]);
if($row["pwd"] == $p_pwd){
    echo '驗證成功!<br>歡迎 '.$row["name"].'';
    $_SESSION["account"] = $row["mail"];
    exit(header("Refresh:2;url=index.php"));
}else{
    echo '出現錯誤，請重試...';
    exit(header("Refresh:2;url=login.php?msg=錯誤"));
}
?>