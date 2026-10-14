 <?php
    if(isset($_POST['submit'])){
        $credits = $_POST['credits'];
        $courses = $_POST['courses'];
        $target = $_POST['target'];

        $total = $credits * $courses;


    if ($total >= 120)
        $progress = "Excellent";
    elseif ($total >= 90)
        $progress = "Good";
    elseif ($total >= 60)
        $progress = "Average";
    else
        $progress = "Poor";

    echo "Total Credits: ".$total ."<br>";
    echo "Progress: ".$progress ."<br>";
    echo "Target Credits: " .$target . "<br>";

    if($total > $target)
        echo "Above target by" .($total-$target);
    elseif($total<$target)
        echo "Below target by " .($target-$total);
    else
        echo "Target met exactly (0 difference)";
    }
?>