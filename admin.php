<?php
session_start();

//Clear Session Cache
//session_destroy();

//Section DB
require_once('./php/createSectionDB.php');
$db = new createSectionDB("lmsdb", "section"); 

//Instructor DB
require_once('./php/createInstructorDB.php');
$db = new createInstructorDB("lmsdb", "instructor"); 

//Student DB
require_once('./php/createStudentDB.php');
$db = new createStudentDB("lmsdb", "student"); 

//Uploaded_files DB
require_once('./php/createUploadDB.php');
$db = new createUploadDB("lmsdb", "uploaded_files"); 

//Grades DB
require_once('./php/createGradesDB.php');
$db = new createGradesDB("lmsdb", "grades"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Admin</title>
    <link rel="icon" href="https://i.ibb.co/fYZMc0m/book.png">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
        
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="adminLogin.php"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
    </ul>
    <div class="container article-clean">
        <div class="row">
            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                <div class="text-center intro">
                    <h1 class="text-center">Admin</h1>
                </div>
                <div class="text"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
                   <!-- Collapse -->
            <div class="accordion" id="collapseTesto">
                <!--////////// Section CRUD //////////-->
                <div class="card shadow">     
                    <div class="card-header bg-primary" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-default collapsed text-light fw-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <center>Section(s)</center>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#collapseTesto">
                        <div class="container">
                            <!-- Add Data -->
                            <br> <br>
                            <h5 class="text-center"> Add Section </h5>
                            <hr>
                            <form class="form-inline m-2" action="php/addSection.php" method="POST">
                                <div><label for="section_name">Section Name:</label>
                                <input type="text" class="form-control m-2" id="section_name" name="section_name"></div>
                                <div><label for="section_enrollees">Max Enrollees:</label>
                                <input type="number" class="form-control m-2" id="section_enrollees" name="section_enrollees"></div>
                                <div><label for="course_code">Course Code:</label>
                                <input type="text" class="form-control m-2" id="course_code" name="course_code"></div>
                                <div><label for="course_desc">Description:</label>
                                <input type="text" class="form-control m-2" id="course_desc" name="course_desc"></div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Section Name</th>
                                    <th>Enrollees</th>
                                    <th>Course Code</th>
                                    <th>Description</th>
                                </tr>
                                <tbody>
                                    <?php include 'php/readSection.php'; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--////////// Member CRUD //////////-->
                <div class="card shadow">     
                    <div class="card-header bg-danger" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-default collapsed text-light fw-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <center>Assign Member<center>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#collapseTesto">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col shadow p-3 mb-5 bg-body rounded m-2">
                                        <!-- Assign Instructor -->
                                        <br>
                                        <h5 class="text-center"> Assign Instructor</h5>
                                        <hr>
                                        <form class="form-inline m-2" action="php/.php" method="POST">
                                            <div class="mb-3 m-1">
                                                <label for="instructor_name">Instructor:</label>
                                                <?php 
                                                $db = new mysqli($db_host, $db_username, $db_pass, $db_table) or die(mysqli_error());
                                                $sql = "select * from instructor";
                                                $result = $db -> query ($sql);

                                                while ($rowInstructor = mysqli_fetch_array($result))
                                                {
                                                    $rowsInstructor[] = $rowInstructor;
                                                }

                                                echo "<select name=\"instructor_name\" id=\"instructor_name\">";
                                                foreach($rowsInstructor as $rowInstructor) 
                                                {
                                                    echo "<option value='". $rowInstructor['instructor_name']. "'>". $rowInstructor['instructor_name']. "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                            <div class="mb-3 m-2 fw-bolder"><p> to </p></div>
                                            <div class="mb-3 m-1">
                                                <label for="section_name">Section:</label>
                                                <?php 
                                                $db = new mysqli($db_host, $db_username, $db_pass, $db_table) or die(mysqli_error());
                                                $sql = "select * from section";
                                                $result = $db -> query ($sql);

                                                while ($rowSection = mysqli_fetch_array($result))
                                                {
                                                    $rowsSection[] = $rowSection;

                                                }
                                                
                                                    echo "<select name=\"section_name\" id=\"section_name\">";
                                                foreach($rowsSection as $rowSection) 
                                                {
                                                    echo "<option value='". $rowSection['section_name']. "'>". $rowSection['section_name']. "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                            <button type="submit" class="btn btn-primary m-3" style="margin-top: 25px;">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col shadow p-3 mb-5 bg-body rounded m-2">
                                        <!-- Assign Student -->
                                        <br>
                                        <h5 class="text-center"> Assign Student</h5>
                                        <hr>
                                        <form class="form-inline m-2" action="php/.php" method="POST">
                                            <div class="mb-3 m-1">
                                                <label for="student_name">Student:</label>
                                                <?php 
                                                $db = new mysqli($db_host, $db_username, $db_pass, $db_table) or die(mysqli_error());
                                                $sql = "select * from student";
                                                $result = $db -> query ($sql);

                                                while ($rowStudent = mysqli_fetch_array($result))
                                                {
                                                    $rowsStudent[] = $rowStudent;
                                                }

                                                echo "<select name=\"student_name\" id=\"student_name\" >";
                                                foreach($rowsStudent as $rowStudent) 
                                                {
                                                    echo "<option value='". $rowStudent['student_name']. "'>". $rowStudent['student_name']. "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                            <div class="mb-3 m-2 fw-bolder"><p> to </p></div>
                                            <div class="mb-3 m-1"><label for="section_name">Section:</label>
                                                <?php 
                                                $db = new mysqli($db_host, $db_username, $db_pass, $db_table) or die(mysqli_error());
                                                $sql = "select * from section";
                                                $result = $db -> query ($sql);

                                                while ($rowSection = mysqli_fetch_array($result))
                                                {
                                                    $rowsSection[] = $rowSection;

                                                }
                                                
                                                    echo "<select name=\"section_name\">";
                                                foreach($rowsSection as $rowSection) 
                                                {
                                                    echo "<option value='". $rowSection['section_name']. "'>". $rowSection['section_name']. "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                            <button type="submit" class="btn btn-primary m-3" style="margin-top: 25px;">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--////////// Student CRUD //////////-->
                <div class="card shadow"> 
                    <div class="card-header bg-success" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-default collapsed text-light fw-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <center>Member - Student<center>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#collapseTesto">
                        <div class="card-body">
                            <div class="container">
                                <!-- Add Data -->
                                <br>
                                <h5 class="text-center"> Add Student </h5>
                                <hr>
                                <form class="form-inline m-2" action="php/addStudent.php" method="POST">
                                    <div><label for="student_name">Student Name:</label>
                                    <input type="text" class="form-control m-2" id="student_name" name="student_name"></div>
                                    <div><label for="member_id">MID:</label>
                                    <input type="number" class="form-control m-2" id="member_id" name="member_id"></div>
                                    <div><label for="student_email">Email:</label>
                                    <input type="text" class="form-control m-2" id="student_email" name="student_email"></div>
                                    <div><label for="student_password">Password:</label>
                                    <input type="text" class="form-control m-2" id="student_password" name="student_password"></div>
                                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Member ID</th>
                                    </tr>
                                    <tbody>
                                        <?php include 'php/readStudent.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--////////// Instructor CRUD //////////-->
                <div class="card shadow">     
                    <div class="card-header bg-dark" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-default collapsed text-light fw-bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <center>Member - Instructor<center>
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#collapseTesto">
                        <div class="card-body">
                        <div class="container">
                                <!-- Add Data -->
                                <br>
                                <h5 class="text-center"> Add Instructor </h5>
                                <hr>
                                <form class="form-inline m-2" action="php/addInstructor.php" method="POST">
                                    <div><label for="instructor_name">Instructor Name:</label>
                                    <input type="text" class="form-control m-2" id="instructor_name" name="instructor_name"></div>
                                    <div><label for="member_id">MID:</label>
                                    <input type="number" class="form-control m-2" id="member_id" name="member_id"></div>
                                    <div><label for="instructor_email">Email:</label>
                                    <input type="text" class="form-control m-2" id="instructor_email" name="instructor_email"></div>
                                    <div><label for="instructor_password">Password:</label>
                                    <input type="text" class="form-control m-2" id="instructor_password" name="instructor_password"></div>
                                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Instructor Name</th>
                                        <th>Member ID</th>
                                    </tr>
                                    <tbody>
                                        <?php include 'php/readInstructor.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets 1/js/jquery.min.js"></script>
<script src="assets 1/bootstrap/js/bootstrap.min.js"></script>
<script src="assets 1/js/sidebar.js"></script>
</body>
</html>