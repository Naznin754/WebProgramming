<?php
$ct1 = $_POST['ct1'];
$ct2 = $_POST['ct2'];
$ct3 = $_POST['ct3'];

$midterm = $_POST['midterm'];
$final = $_POST['final'];

$arr = array($ct1,$ct2,$ct3);
rsort($arr);

$best = $arr[0]+$arr[1];

$total = $best + $midterm + $final;

echo "Best two CT's total " . $best."<br>";
echo "Midterm Marks:" . $midterm ."<br>";
echo "Final Marks:" . $final."<br>"."<br>";

echo "Total Marks:" . $total."<br>";

if($total >54)
    echo "Status : Passed";
else
    echo "Status : Failed";
?>