<?php
session_start();
include_once "consnn.php";
echo $_SESSION["account"];
$p_acc = $_SESSION["account"];

$sql = "select * from membersystem where mail = '$p_acc' and state = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$p_name = $row["name"];

$content_sql = "SELECT * FROM `membercontent` order by auto_no asc";
$cont_result = $conn->query($content_sql);

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
  
<title>Comment Index</title>
</head>
<body>
    <div class="container">
        <h6><br><br><br></h6>
        <h3><b>SHOW Message:</b></h3>
        <hr>
        
        <?php
        for($i = 0; $i < $cont_result->num_rows; $i++){
            $cont_row = $cont_result->fetch_assoc();
            echo '
            <h4>'.$cont_row["name"].'</h4>
            <h5>'.$cont_row["message"].'</h5>
            <h6 class="text-right">'.$cont_row["create_at"].'</h6>
            <hr>
            ';
        }
        ?>
        
       

        <?php
        if($_SESSION["account"]==null){
            //echo 'no acc';
            echo '
            <h5>if you have not login, please login:</h5>
            <a href="login.php" type="button" class="btn btn-info">LOGIN</a>
            ';
        }else{
            //echo 'have login';
            echo '<a href="logout.php" type="button" class="btn btn-warning text-right">LOGOUT</a>';
            echo '<h5>Hi! '.$p_name.'. Welcome to this page!</h5>';
            echo '
            <h6>You can leave a message in this text box.</h6>
            <form action="run_submit.php" method="POST">
            <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Leave your comment..." name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" href="">Submit</button>
            </form>
            ';
        }
        ?>
        
        
        <h6><br><br><br></h6>
    </div>
</body>
</html>