<?php
  include 'db.php';
  $activity_id = $_POST['activity_id'];
  $activity_name = $_POST['activity_name'];
  $activity_instructions = $_POST['activity_instructions'];
  $activity_deadline = $_POST['activity_deadline'];
  $sql = "update activity set activity_name='$activity_name', activity_instructions='$activity_instructions', activity_deadline='$activity_deadline' where activity_id=$activity_id";
  $result = $con->query($sql);
  $con->close();
  header("location: ../activityManager.php");
?>
