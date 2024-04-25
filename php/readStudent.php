<?php
    include 'db.php';

    $sql = "select * from student";
    $result = $con->query($sql);
    $student_id = (isset($_GET['student_id']) ? $_GET['student_id'] : '');
    while($row = $result->fetch_assoc()) {
        if (isset($student_id) && $row['student_id'] == $student_id) {
            echo '<form class="form-inline m-2" action="php/updateStudent.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="student_name" value="'.$row['student_name'].'"></td>';
            echo '<td><input type="number" class="form-control" name="member_id" value="'.$row['member_id'].'"></td>';
            echo '<td><label for="student_email">Email:</label></td>';
            echo '<td><input type="text" class="form-control" name="student_email" value="'.$row['student_email'].'"></td>';
            echo '<td><label for="student_password">Password:</label></td>';
            echo '<td><input type="text" class="form-control" name="student_password" value="'.$row['student_password'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="student_id" value="'.$row['student_id'].'">';
            echo '</form>';
        }
        else {
            echo "<tr>";
            echo "<td>" . $row['student_name'] . "</td>";
            echo "<td>" . $row['member_id'] . "</td>";
            echo '<td><a class="btn btn-success" href="admin.php?student_id=' . $row['student_id'] . '" role="button">Update</a></td>';
            echo '<td><a class="btn btn-danger" href="php/deleteStudent.php?student_id=' . $row['student_id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
        }
    
    }

    $con->close();

?>