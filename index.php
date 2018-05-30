<?php

function draw_stars($arr) {
    foreach ($arr as $item) {
        if(gettype($item) == "integer") {
            for($i = 0; $i < $item; $i++) {
                echo "*";
            }
            echo "<br />";
        } else if (gettype($item) == "string") {
            for($i = 0; $i < strlen($item); $i++) {
                echo strtolower($item[0]);
            }
            echo "<br />";
        }
    }
}

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

draw_stars($x);