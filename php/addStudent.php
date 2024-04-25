<?php
    include 'db.php';
    $student_name = $_POST["student_name"];
    $member_id = $_POST["member_id"];
    $student_email = $_POST["student_email"];
    $student_password = $_POST["student_password"];
    $sql = "INSERT INTO student (student_name, member_id, student_email, student_password) values ('$student_name', '$member_id', '$student_email', '$student_password')";
    $con->query($sql);
    $con->close();
    header("location: ../admin.php");
?>
