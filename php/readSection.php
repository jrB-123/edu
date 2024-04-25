<?php
    include 'db.php';

    $sql = "select * from section";
    $result = $con->query($sql);
    $section_id = (isset($_GET['section_id']) ? $_GET['section_id'] : '');
    while($row = $result->fetch_assoc()) {
        if (isset($section_id) && $row['section_id'] == $section_id) {
            echo '<form class="form-inline m-2" action="php/updateSection.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="section_name" value="'.$row['section_name'].'"></td>';
            echo '<td><input type="number" class="form-control" name="section_enrollees" value="'.$row['section_enrollees'].'"></td>';
            echo '<td><input type="text" class="form-control" name="course_code" value="'.$row['course_code'].'"></td>';
            echo '<td><input type="text" class="form-control" name="course_desc" value="'.$row['course_desc'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="section_id" value="'.$row['section_id'].'">';
            echo '</form>';
        }
        else {
            echo "<tr>";
            echo "<td>" . $row['section_name'] . "</td>";
            echo "<td>" . $row['section_enrollees'] . "</td>";
            echo "<td>" . $row['course_code'] . "</td>";
            echo "<td>" . $row['course_desc'] . "</td>";
            echo '<td><a class="btn btn-success" href="admin.php?section_id=' . $row['section_id'] . '" role="button">Update</a></td>';
            echo '<td><a class="btn btn-danger" href="php/deleteSection.php?section_id=' . $row['section_id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
        }
    
    }

    $con->close();

?>