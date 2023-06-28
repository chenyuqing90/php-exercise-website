<?php
session_start();
unset($_SESSION["account"]);

echo '登出中...';
exit(header("Refresh:1;url=index.php"))
?>