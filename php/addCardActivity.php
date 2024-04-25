<?php
function addCardActivity($activity_id, $activity_name, $activity_instructions, $activity_deadline) {
        $element = "
        <div class=\"container my-4\">
        <div class=\"card\">
            <div class=\"card-body\" style=\"box-shadow: -6px 6px rgb(185,189,193);\">
                <h4 class=\"card-title\"><a href=\"submissionScreen.php\">$activity_name</a></h4>
                <h6 class=\"text-muted card-subtitle mb-2\">Due: $activity_deadline</h6>
                <p class=\"card-text\">Instructions: $activity_instructions</p>		
            </div>
        </div>
    </div>";
        echo $element;
    }
?>