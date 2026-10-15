<?php
$attendees = $_POST['attendees'];
$cost = $_POST['cost'];
$capacity = $_POST['capacity'];

calculateBudget($attendees, $cost, $capacity);

function calculateBudget($attendees, $cost, $capacity)
{
    $venues = ceil($attendees / $capacity);

    $seats = $venues * $capacity;

    $empty = $seats - $attendees;

    $wasted = $empty * $cost;

    echo "Total Venues: " . $venues . "<br>";
    echo "Empty Seats: " . $empty . "<br>";
    echo "Wasted Money (BDT): " . $wasted;
}

?>
