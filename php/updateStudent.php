<?php
  include 'db.php';
  $student_id = $_POST['student_id'];
  $student_name = $_POST['student_name'];
  $member_id= $_POST['member_id'];
  $student_email = $_POST['student_email'];
  $student_password= $_POST['student_password'];
  $sql = "update student set student_name='$student_name', member_id='$member_id', student_email='$student_email', student_password='$student_password' where student_id=$student_id";
  $result = $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>
