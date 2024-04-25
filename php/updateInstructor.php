<?php
  include 'db.php';
  $instructor_id = $_POST['instructor_id'];
  $instructor_name = $_POST['instructor_name'];
  $member_id= $_POST['member_id'];
  $instructor_email = $_POST['instructor_email'];
  $instructor_password= $_POST['instructor_password'];
  $sql = "update instructor set instructor_name='$instructor_name', member_id='$member_id', instructor_email='$instructor_email', instructor_password='$instructor_password' where instructor_id=$instructor_id";
  $result = $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>
