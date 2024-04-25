<?php
  include 'db.php';
  $student_id = $_GET['student_id'];
  $sql = "delete from student where student_id=$student_id";
  $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>