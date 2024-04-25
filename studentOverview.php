<!DOCTYPE html>
<html>
<?php 
require_once('./php/addCardActivity.php');
require_once('./php/createActivityDB.php');
$db = new createActivityDB("lmsdb", "activity"); 
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Overview</title>
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
                    <h1 class="text-center">CS126-8L: Recent Activities</h1>
                </div>
                <div class="text"></div>
            </div>
        </div>
    </div>
    <div class="card"></div>
				<?php	
				$result = $db->getData();
				while($row = mysqli_fetch_assoc($result)) {
                addCardActivity($row['activity_id'], $row['activity_name'], $row['activity_instructions'], $row['activity_deadline']);
				}
				?>	
					
    <script src="assets 1/js/jquery.min.js"></script>
    <script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets 1/js/sidebar.js"></script>
</body>

</html>