<?php
    include 'db.php';
    $section_name = $_POST["section_name"];
    $section_enrollees = $_POST["section_enrollees"];
    $course_code = $_POST["course_code"];
    $course_desc = $_POST["course_desc"];
    $sql = "INSERT INTO section (section_name, section_enrollees, course_code, course_desc) values ('$section_name', '$section_enrollees', '$course_code', '$course_desc')";
    $con->query($sql);
    $con->close();
    header("location: ../admin.php");
?>
