<!DOCTYPE html>
<?php include("php/db.php");
//Student DB
require_once('./php/createGradesDB.php');
$db = new createGradesDB("lmsdb", "grades");
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets 1/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets 1/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets 1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets 1/css/Article-Clean.css">
    <link rel="stylesheet" href="assets 1/css/sidebar.css">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Grades List</title>
	<link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">

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
    <div class="card"></div>
    <div class="container my-4">
        <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-5">
      <h1 class="mb-0 fw-bold">Grades List</h1>
      <a href="php/export.php" class="btn btn-primary">Export to Excel</a>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Submission ID</th>
          <th scope="col">Section</th>
          <th scope="col">Student Name</th>
          <th scope="col">Student Submission</th>
          <th scope="col">Student Grade</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $id = 0;
        $sql = "SELECT * FROM grades";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
          foreach ($res as $row) {
            $id++;
        ?>
            <tr>
              <th scope="row"><?php echo $id; ?></th>
              <td><?php echo $row['section']; ?></td>
              <td><?php echo $row['student_name']; ?></td>
              <td><a href="programChecker.php"><?php echo $row['student_submission']; ?></a></td>
              <td><?php echo $row['student_grade']; ?></td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
    </div>
    <script src="assets 1/js/jquery.min.js"></script>
    <script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets 1/js/sidebar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>