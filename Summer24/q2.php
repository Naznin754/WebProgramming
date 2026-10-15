<?php

$time = $_POST['time'];
$upSpeed = $_POST['upSpeed'];
$downSpeed = $_POST['downSpeed'];

echo "Average Speed: " . calculate($time, $upSpeed, $downSpeed) . " km/h";

function calculate($time, $upSpeed, $downSpeed)
{
    $distance1 = ($time / 60) * $upSpeed;
    $distance2 = $distance1;

    $time2 = ($distance2 / $downSpeed) * 60;

    $totalDistance = $distance1 + $distance2;
    $totalTime = $time + $time2;

    $avgSpeed = ($totalDistance / $totalTime) * 60;

    return round($avgSpeed);
}

?>
