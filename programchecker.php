<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Submission</title>
	<link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-home mx-3"></i><span class="text-nowrap mx-2">Home</span></a><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-table mx-3"></i><span class="text-nowrap mx-2">Grading</span></a></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="true" data-toggle="dropdown" href="#"><i class="fas fa-folder-open mx-3"></i><span class="text-nowrap mx-2">Sections</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu show border-0 animated fadeIn"><a class="dropdown-item text-white" href="submissionList.php"><span>AM 1</span></a><a class="dropdown-item text-white" href="#"><span>AM 2</span></a><a class="dropdown-item text-white" href="#"><span>AM 3</span></a><a class="dropdown-item text-white" href="#"><span>AM 4</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
    </ul>
    <div class="container">
        <div class="row">
		
            <div class="col-md-6 col-lg-7 offset-lg-0">
			 <div data-pym-src="https://www.jdoodle.com/embed/v0/4LJY?rw=1"></div>
			</div>
            
			<div class="col-md-6 col-lg-4 offset-lg-1" style="border-style: solid;margin-bottom: 70px; margin-top: 20px">
                <h1 style="font-size: 25px;">Submitted by: Juan Dela Cruz Date Submitted: 2022-05-04</h1>
				<textarea style="width: 350px;height: 250px; text-align:left; font-size: 14px;"><?php echo file_get_contents("test.cpp");?>
				</textarea>
                <h1 style="font-size: 25px;">Comments:</h1><textarea style="width: 350px;height: 150px;"></textarea>
                <h1 style="font-size: 25px;">Grade:</h1>
                <div class="input-group" style="margin-bottom: 20px;"><input class="form-control" type="text"><a href="submissionList.php"><button onclick = "myFunction ()" class="btn btn-primary" type="button" style="background: rgb(47,47,47);">Submit</button></a></div>
            </div>
        </div>
    </div>
	<script>
	function myFunction() {
	alert("Grade Submitted");
	}
	</script>
   
	<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js"type="text/javascript"></script>
	<script src="assets 1/js/jquery.min.js"></script>
    <script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets 1/js/sidebar.js"></script>
</body>

</html>