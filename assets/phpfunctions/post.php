<?php

function headline($title, $timeToRead, $datePosted) {
    echo "<h2 id='dateline'>$datePosted</h2>";
    echo "<h1 id='titleline'>$title</h1>";
    echo "<h2 id='byline'>by Evan Mays - $timeToRead min read</h2>";
}
?>