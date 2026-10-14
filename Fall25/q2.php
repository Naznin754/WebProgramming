<?php
$item = $_POST['item'];
$days = $_POST['days'];
$target = $_POST['target'];

$sold = $item * $days;

if ($sold >= 500)
    $performance = "Excellent";
elseif ($sold >= 300)
    $performance = "Good";
elseif ($sold >= 150)
    $performance = "Average";
else
    $performance = "Poor";

echo "Total Items Sold: " . $sold . "<br>";
echo "Performance: " . $performance . "<br>";
echo "Target Items: " . $target . "<br>";

if ($sold > $target)
    echo "Above target by " . ($sold - $target) . " item";
elseif ($sold < $target)
    echo "Below target by " . ($target - $sold) . " item";
else
    echo "Target met exactly (0 difference)";
?>