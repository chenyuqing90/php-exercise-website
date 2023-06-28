<?php
session_start();
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
  
<title>Member System</title>
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
        <h4 class="text-center"><b>Member Login</b></h4>

        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form action="checklogin.php" method="post">
                    <div class="form-group">
                        <label for="inputmail">Email address</label>
                        <input type="email" class="form-control" id="inputmail1" name="inputmail">
                    </div>
                    <div class="form-group">
                        <label for="inputpwd">Password</label>
                        <input type="password" class="form-control" id="inputpwd" name="inputpwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <h4 class="text-center"><b>if you have no account:</b></h4>
                <a type="button" class="btn btn-success btn-block" href="createacc.php">CREATE ACCOUNT</a>
            </div>
        </div>
    </div>
</body>
</html>