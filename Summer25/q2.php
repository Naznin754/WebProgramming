<?php
$attendees = $_POST['attendees'];
$capacity = $_POST['capacity'];
$price = $_POST['price'];

calculateMovie($attendees,$capacity,$price);

function calculateMovie($attendees,$capacity,$price){
    $screen = ceil($attendees/$capacity);

    $seats = $screen * $capacity;

    $empty = $seats - $attendees;

    $wasted = $empty * $price;

    echo "Total Screens: " . $screen . "<br>";
    echo "Empty Seats: " . $empty . "<br>";
    echo "Wasted Money: " . number_format($wasted) . " BDT";
    


}
?>