<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Activity Manager</title>
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
    <script>
	function myFunction() {
	alert("Activity added");
	}
	</script>
	 <ul class="nav flex-column shadow d-flex sidebar mobile-hid" style="background: #111111;">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="#" style="font-size: 20px;"><strong>Edu-Classroom</strong></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a></div>
        </li>
        <li class="nav-item"></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="#"><i class="fas fa-home mx-3"></i><span class="text-nowrap mx-2">Home</span></a><a class="nav-link text-left text-white py-1 px-0" href="exportPage.php"><i class="fas fa-table mx-3"></i><span class="text-nowrap mx-2">Grading</span></a></li>
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
            <div class="col mx-1"> 
                <div class="container my-5">
                    <h5 class="text-center"> Add Activity</h5>
                    <hr>
                    <form class="form-inline m-2" action="php/addActivity.php" method="POST">
                        <div><label for="activity_name">Activity Title:</label>
                        <input type="text" class="form-control m-2" id="activity_name" name="activity_name"></div>
                        <div><label for="activity_instructions">Instructions:</label>
                        <input type="text" class="form-control m-2" id="activity_instructions" name="activity_instructions"></div>
                        <div><label for="activity_deadline">Due Date:</label>
                        <input type="datetime-local" class="form-control m-2" id="activity_deadline" name="activity_deadline"></div>
                        <button type="submit" class="btn btn-primary" onclick="myFunction()" style="margin-top: 25px;">Add</button>
                    </form>
                </div>
            </div>
            <div class="col mx-3">
                <div class="card-body my-3 shadow-lg p-3 mb-5 bg-body rounded">
                    <table class="table">
                        <tr>
                            <th>Activity Name</th>
                            <th>Instructions</th>
                            <th>Deadline</th>
                        </tr>
                        <tbody>
                            <?php include 'php/readActivity.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




   
	<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js"type="text/javascript"></script>
	<script src="assets 1/js/jquery.min.js"></script>
    <script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets 1/js/sidebar.js"></script>
    
</body>

</html>