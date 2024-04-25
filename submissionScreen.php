<?php
//Upload DB
require_once('./php/createUploadDB.php');
$db = new createUploadDB("lmsdb", "uploaded_files"); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Activities</title>
	<link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">
    <link rel="stylesheet" href="assets 1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets 1/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets 1/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets 1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets 1/css/Article-Clean.css">
    <link rel="stylesheet" href="assets 1/css/sidebar.css">
</head>

<body>
    <ul class="nav flex-column shadow d-flex sidebar mobile-hid" style="background: #111111;">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="#" style="font-size: 20px;"><strong>Edu-Classroom</strong></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a></div>
        </li>
        <li class="nav-item"></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-home mx-3"></i><span class="text-nowrap mx-2">Home</span></a><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-newspaper mx-3"></i><span class="text-nowrap mx-2">Activities</span></a></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="true" data-toggle="dropdown" href="#"><i class="fas fa-folder-open mx-3"></i><span class="text-nowrap mx-2">Module 1</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu show border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Week 1</span></a><a class="dropdown-item text-white" href="#"><span>Week 2</span></a><a class="dropdown-item text-white" href="#"><span>Week 3</span></a><a class="dropdown-item text-white" href="#"><span>Week 4</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="index.php"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
    </ul>
    <div class="container article-clean">
        <div class="row">
            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                <div class="text-center intro">
                    <h1 class="text-center">CS126-8L</h1>
                </div>
                <div class="text"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body" style="background: #e8dfdf;box-shadow: -6px 6px rgb(185,189,193);">
                <h4 class="card-title">Exercise 1: FA1.1:EX1</h4>
                <p class="card-text">Programming Activity Specifications<br></p>
                <h6 class="text-muted card-subtitle mb-2">Create a program that will ask for an integer input and display its output.</h6>
                <hr>
                <div class="file__upload">
		<form action="" method="POST" enctype="multipart/form-data" class="body">
		<?php 

        include 'php/db.php';

        $link = "";
        $link_status = "display: none;";

        

        ?>
			<input type="file" name="file" id="upload" required>
			
		</form>
        <a href="submissionOutput.php"><button name="upload" type="button" class="btn btn-outline-dark" style="background: rgb(239,239,239);border-color: rgb(33,37,41);color: rgb(33,37,41);height: 30px;padding: 0px 10px;margin-bottom: 5px;margin-left: 10px;border-radius: 2px; margin-top: 15px;" onclick="window.location.href='submissionOutput.php'">Upload</button></a>
	</div>
            </div>
        </div>
    </div>
    <script src="assets 1/js/jquery.min.js"></script>
    <script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets 1/js/sidebar.js"></script>
</body>

</html>