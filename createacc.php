<?php
session_start();
include_once "consnn.php";

$p_mail = addslashes($_POST["setmail"]);
$p_name = addslashes($_POST["setname"]);
$p_pwd = addslashes($_POST["setpwd"]);

if($p_mail != null || $p_name != null || $p_pwd != null){
    echo $p_mail,'<br>',$p_name,'<br>',$p_pwd,'<br>';
    echo '收到資料';
    $insert_sql = "INSERT INTO `membersystem`
    (`mail`, `pwd`, `name`, `state`) 
    VALUES 
    ('$p_mail','$p_pwd','$p_name',1)";
    
    if($conn->query($insert_sql) === TRUE){
        echo '建立成功<br>';
        $_SESSION["account"] = $p_mail;
        echo '<a href="login.php?num='.$p_name.'" >pre page</a>';
    }else{
        echo '建立失敗<br>' . $add_sql . "<br>" . $conn->error;;
    }
    
}else{
    echo 0;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="this is a member system test to use PHP">
<!-- Bootstrap v4.3-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<title>Member System - CREATE ACCOUNT</title>
    
<script language="javascript" type="text/javascript">  
 //禁用Enter 
        document.onkeydown = function(event) {  
            var target, code, tag;  
            if (!event) {  
                event = window.event; //for ie  
                target = event.srcElement;  
                code = event.keyCode;  
                if (code == 13) {  
                    tag = target.tagName;  
                    if (tag == "TEXTAREA") { return true; }  
                    else { return false; }  
                }  
            }  
            else {  
                target = event.target; //for w3c
                code = event.keyCode;  
                if (code == 13) {  
                    tag = target.tagName;  
                    if (tag == "INPUT") { return false; }  
                    else { return true; }  
                }  
            }  
        };  
</script> 
</head>
<body style="background-color:#f0f0f0">
    <div class="container">
        <h6><br><br><br></h6>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <a href="index.php" type="button" class="btn btn-info btn-block">GO TO COMMEMT PAGE</a>
                <h6><br><br></h6>
            </div>
        </div>
        <h4 class="text-center"><b>Account Create</b></h4>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form action="createacc.php" method="post">
                    <div class="form-group">
                        <label for="inputmail">Email address</label>
                        <input type="email" class="form-control" id="inputmail1" name="setmail">
                    </div>
                    <div class="form-group">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control" id="inputname" name="setname">
                    </div>
                    <div class="form-group">
                        <label for="setpwd">Password</label>
                        <input type="password" class="form-control" id="inputpwd" name="setpwd">
                    </div>

                    <button type="submit" class="btn btn-success">CREATE</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>