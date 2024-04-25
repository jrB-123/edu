<?php
session_start();
require_once('./php/createAdmin.php');
$db = new createAdmin("lmsdb", "adminlogin"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Admin</title>
	<link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="image" style="text-align: center;"><img src="https://i.imgur.com/NYYGTmI.png?1" style="width: 661px;height: 222px;text-align: center;"></div>
    <form action="php/validate.php" method="post" id="login-form" class="text-start" style="height: 450px;">
        <div id="form-group" class="text-center" style="padding-top: 50px;">
			<label class="form-label text-start" id="user_name" style="text-align: left;border-bottom-style: solid;">Username
			<input class="form-control" type="text" id="input_name" name="adminname" style="width: 300px;text-align: center;background: rgb(33,30,30);border-style: none;color: rgb(255,255,255);">
			</label>
		</div>
        <div id="form-group" style="text-align: center;margin-top: 30px;">
			<label class="form-label text-start" id="user_pass" style="text-align: left;border-bottom-style: solid;color: rgb(255,255,255);"><strong>Password</strong>
			<input class="form-control" type="password" id="input_pass" name="password" style="width: 300px;text-align: center;background: rgb(33,30,30);border-style: none;color: rgb(255,255,255);">
			</label>
		</div>
        
		<div id="form-button" style="text-align: center;"><button class="btn btn-primary" type="submit" style="background: rgb(39,39,39);width: 300px;margin-top: 30px;border-style: solid;border-color: rgb(255,255,255);">
		Sign In</button>
		</div>
        
		<div id="form-link" style="text-align: right;margin-top: 10px;margin-right: 130px;"><a href="index.php" style="color: rgb(255,255,255);">Member Login</a></div>
    
	</form>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>