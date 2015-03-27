<?php
// Create pagination library and limit foreach loop

$i = 0; //current image
$start = $_GET['start']; //number to start on
$max = 5; //number per page

foreach ($images as $img) {
    if ($start > $i) continue;
    if ($i > ($start + $max)) break;

    echo "<img src='{$img}' />";
}

?>