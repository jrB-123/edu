<?php
  include 'db.php';
  $section_id = $_GET['section_id'];
  $sql = "delete from section where section_id=$section_id";
  $con->query($sql);
  $con->close();
  header("location: ../admin.php");
?>