<?php
    include 'db.php';

    $sql = "select * from activity";
    $result = $con->query($sql);
    $activity_id = (isset($_GET['activity_id']) ? $_GET['activity_id'] : '');
    while($row = $result->fetch_assoc()) {
        if (isset($activity_id) && $row['activity_id'] == $activity_id) {
            echo '<form class="form-inline m-2" action="php/updateActivity.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="activity_name" value="'.$row['activity_name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="activity_instructions" value="'.$row['activity_instructions'].'"></td>';
            echo '<td><input type="datetime-local" class="form-control" name="activity_deadline" value="'.$row['activity_deadline'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="activity_id" value="'.$row['activity_id'].'">';
            echo '</form>';
        }
        else {
            echo "<tr>";
            echo "<td>" . $row['activity_name'] . "</td>";
            echo "<td>" . $row['activity_instructions'] . "</td>";
            echo "<td>" . $row['activity_deadline'] . "</td>";
            echo '<td><a class="btn btn-secondary" href="activityManager.php?activity_id=' . $row['activity_id'] . '" role="button">Update</a></td>';
            echo "</tr>";
        }
    
    }

    $con->close();

?>