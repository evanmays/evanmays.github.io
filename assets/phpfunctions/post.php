<?php

function headline($title, $timeToRead, $datePosted) {
    echo "<h2>$datePosted</h2>";
    echo "<h1>$title</h1>";
    echo "<h2>by Evan Mays - $timeToRead min read</h2>";
}
?>