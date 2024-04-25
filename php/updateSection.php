<?php
  include 'db.php';
  $section_id = $_POST['section_id'];
  $section_name = $_POST['section_name'];
  $section_enrollees = $_POST['section_enrollees'];
  $course_code = $_POST['course_code'];
  $course_desc = $_POST['course_desc'];
  $sql = "update section set section_name='$section_name', section_enrollees='$section_enrollees', course_code='$course_code', course_desc='$course_desc' where section_id=$section_id";
  $result = $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>
