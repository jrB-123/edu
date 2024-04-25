<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Member</title>
	<link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="image" style="text-align: center;"><img src="https://i.imgur.com/NYYGTmI.png?1" style="width: 661px;height: 222px;text-align: center;"></div>
    <form id="login-form" class="text-start" style="height: 450px;">
        <div id="form-group" class="text-center" style="padding-top: 40px;"><label class="form-label text-start" id="user_name" style="text-align: left;border-bottom-style: solid;">Username<input class="form-control" type="text" id="input_name" style="width: 300px;text-align: center;background: rgb(33,30,30);border-style: none;color: rgb(255,255,255);" required></label></div>
        <div id="form-group" style="text-align: center;margin-top: 30px;"><label class="form-label text-start" id="user_pass" style="text-align: left;border-bottom-style: solid;color: rgb(255,255,255);"><strong>Password</strong><input class="form-control" type="password" id="input_pass" style="width: 300px;text-align: center;background: rgb(33,30,30);border-style: none;" required></label></div>
        <div id="form-button" style="text-align: center;">
            <form style="padding-top: 10px;">
                <div class="form-check form-check-inline" style="margin-left: 10px;margin-top: 10px;"><input class="form-check-input" type="radio" id="formCheck-1" name="trigger"><label class="form-check-label" for="formCheck-1" style="color: rgb(255,255,255);">Instructor</label></div>
                <div class="form-check form-check-inline" style="margin-left: 115px;"><input class="form-check-input" type="radio" id="formCheck-1" name="trigger"><label class="form-check-label" for="formCheck-1" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">Student</label></div>
            </form><a href="section.php"><button class="btn btn-primary" type="button" style="background: rgb(39,39,39);width: 300px;margin-top: 30px;border-style: solid;border-color: rgb(255,255,255);">Sign In</button> </a>
            <div id="form-link" style="text-align: right;margin-top: 10px;margin-right: 130px;"><a href="adminlogin.php" style="color: rgb(255,255,255);">Login as Admin</a></div>
        </div>
    </form>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>