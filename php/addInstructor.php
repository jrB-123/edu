<?php
    include 'db.php';
    $instructor_name = $_POST["instructor_name"];
    $member_id = $_POST["member_id"];
    $instructor_email = $_POST["instructor_email"];
    $instructor_password = $_POST["instructor_password"];
    $sql = "INSERT INTO instructor (instructor_name, member_id, instructor_email, instructor_password) values ('$instructor_name', '$member_id', '$instructor_email', '$instructor_password')";
    $con->query($sql);
    $con->close();
    header("location: ../admin.php");
?>
