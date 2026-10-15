<?php
$server = "localhost";
$user = "root";
$password = " ";
$database = "sundarban";
$port = 3306;

$conn = new mysqli($server,$user,$password,$database,$port);

//question1
$sql1 = "SELECT CategoryName,SUM(*) AS TotalRevenue
FROM sales_data
GROUP BY CategoryName";

$res = $conn->query($sql1);

while($row = $res->fetch_assoc()){
    echo $row['CategoryNmae']." : " . $row['TotalRevenue'] ."<br>";
}

//question2
$sql2 = "UPDATE sales_data
SET CategoryName = 'Low Performing' 
WHERE Revenue < 40000";

$conn->query($sql2);
echo "Updated";

//question3
$sql3 = "UPDATE sales_data
SET Revenue = Revenue+(Revenue*0.10)
WHERE Revenue > 70000";

$conn->query($sql3);
echo "Updated Bonus Revenue";

// question4
$sql4 = "SELECT * FROM sales_data";

$res = $conn->query($sql4);

while($row = $res->fetch_assoc())
{
    $sql5 = "SELECT AVG(Revenue) AS AverageRevenue
             FROM sales_data
             WHERE CategoryID = " . $row['CategoryID'];

    $res2 = $conn->query($sql5);
    $row2 = $res2->fetch_assoc();

    echo $row['ProductName'] . " - ";
    echo $row['CategoryName'] . " - ";

    if($row['Revenue'] > $row2['AverageRevenue'])
        echo "Top Seller";
    else
        echo "Regular Seller";

    echo "<br>";
}
?>