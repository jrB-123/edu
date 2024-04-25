<?php
  include 'db.php';
  $instructor_id = $_GET['instructor_id'];
  $sql = "delete from instructor where instructor_id=$instructor_id";
  $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>