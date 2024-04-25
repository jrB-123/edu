<?php
    include 'db.php';
    $activity_name = $_POST["activity_name"];
    $activity_id = $_POST["activity_id"];
    $activity_instructions = $_POST["activity_instructions"];
    $activity_deadline = $_POST["activity_deadline"];
    $sql = "INSERT INTO activity (activity_id, activity_name, activity_instructions, activity_deadline) VALUES ('$activity_id', '$activity_name', '$activity_instructions', '$activity_deadline')";
    $con->query($sql);
    $con->close();
    header("location: ../activityManager.php");
?>
