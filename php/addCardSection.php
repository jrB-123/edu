<?php
function addCardSection($section_id, $section_name, $section_enrollees, $course_code, $course_desc) {
        $element = "
        <div class=\"container my-4\">
        <div class=\"card\">
            <div class=\"card-body\" style=\"box-shadow: -6px 6px rgb(185,189,193);\">
                <h4 class=\"card-title\"><a href=\"activityManager.php\">$course_code $section_name</a></h4>
                <h6 class=\"text-muted card-subtitle mb-2\">No. of Enrollees: $section_enrollees</h6>
                <p class=\"card-text\">Course Description: $course_desc</p>		
            </div>
        </div>
    </div>";
        echo $element;
    }
?>