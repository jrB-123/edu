<?php
    include 'db.php';

    $sql = "select * from instructor";
    $result = $con->query($sql);
    $instructor_id = (isset($_GET['instructor_id']) ? $_GET['instructor_id'] : '');
    while($row = $result->fetch_assoc()) {
        if (isset($instructor_id) && $row['instructor_id'] == $instructor_id) {
            echo '<form class="form-inline m-2" action="php/updateInstructor.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="instructor_name" value="'.$row['instructor_name'].'"></td>';
            echo '<td><input type="number" class="form-control" name="member_id" value="'.$row['member_id'].'"></td>';
            echo '<td><label for="instructor_email">Email:</label></td>';
            echo '<td><input type="text" class="form-control" name="instructor_email" value="'.$row['instructor_email'].'"></td>';
            echo '<td><label for="instructor_password">Password:</label></td>';
            echo '<td><input type="text" class="form-control" name="instructor_password" value="'.$row['instructor_password'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="instructor_id" value="'.$row['instructor_id'].'">';
            echo '</form>';
        }
        else {
            echo "<tr>";
            echo "<td>" . $row['instructor_name'] . "</td>";
            echo "<td>" . $row['member_id'] . "</td>";
            echo '<td><a class="btn btn-success" href="admin.php?instructor_id=' . $row['instructor_id'] . '" role="button">Update</a></td>';
            echo '<td><a class="btn btn-danger" href="php/deleteInstructor.php?instructor_id=' . $row['instructor_id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
        }
    
    }

    $con->close();

?>