<?php

// Include Database connection
include("db.php");
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$section = [
  ['submission_id', 'section', 'student_name', 'student_submission', 'student_grade']
];

$id = 0;
$sql = "SELECT * FROM grades";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $section = array_merge($section, array(array($id, $row['section'], $row['student_name'], $row['student_submission'], $row['student_grade'])));
  }
}

$xlsx = SimpleXLSXGen::fromArray($section);
$xlsx->downloadAs('section.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('section.xlsx'); // This will save the file to your server

echo "<pre>";
print_r($section);