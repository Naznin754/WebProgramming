
<?php

$students = $_POST['students'];
$slices = $_POST['slices'];
$capacity = $_POST['capacity'];

calculatePizza($students, $slices, $capacity);

function calculatePizza($students, $slices, $capacity)
{
    $needed = $students * $slices;

    $pizzas = ceil($needed / $capacity);

    $total = $pizzas * $capacity;

    $leftover = $total - $needed;

    $wasted = ($leftover / $capacity) * 1050;

    echo "Total Pizzas: " . $pizzas . "<br>";
    echo "Leftover Slices: " . $leftover . "<br>";
    echo "Wasted Money (BDT): " . $wasted;
}

?>
