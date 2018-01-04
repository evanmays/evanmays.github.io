<?php

function headline($title, $timeToRead, $datePosted) {
    echo "<h3 id='readtime-line'>$timeToRead min read</h3>";
    echo "<h2 id='dateline'>$datePosted</h2>";
    echo "<h1 id='titleline'>$title</h1>";
    echo "<h2 id='byline'>by <a href='https://evanmays.com/blog'>Evan Mays</a></h2>";
}
?>