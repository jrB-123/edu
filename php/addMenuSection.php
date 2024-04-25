<?php
function addMenuSection($section_name) {
        $element = "
        <div class=\"dropdown-menu show border-0 animated fadeIn\"><a class=\"dropdown-item text-white\" href=\"#\"><span>$section_name</span>";
        echo $element;
    }
?>