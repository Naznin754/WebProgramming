<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "sales_db";
$port = 3306;

$conn = new mysqli($server,$user,$password,$database,$port);

//question1
$sql1 = "SELECT product_id, SUM(quantity_sold) AS TotalQuantity,
SUM(total_price) AS TotalRevenue
FROM sales
WHERE sale_date >= '2024-01-01'
AND sale_date < '2024-02-01'
GROUP BY product_id";

$res = $conn->query($sql1);

while($row = $res->fetch_assoc()){
    echo $row["product_id"] . ":" . $row["TotalQuantity"] . ":" . $row["TotalRevenue"] . "<br>";
}

//question2
$sql2 = "SELECT sale_date, SUM(total_price) AS TotalRevenue
FROM sales
WHERE sale_date >= '2024-01-01'
AND sale_date < '2024-02-01'
GROUP BY sale_date
ORDER BY TotalRevenue DESC
LIMIT 2";

$res = $conn->query($sql2);

while($row = $res->fetch_assoc()){
    echo $row["sale_date"] . ":" . $row["TotalRevenue"] . "<br>";
}

//question3
$sql3 = "SELECT product_id, AVG(quantity_sold) AS AverageQuantity
FROM sales
WHERE sale_date >= '2024-01-01'
AND sale_date < '2024-02-01'
GROUP BY product_id
HAVING COUNT(DISTINCT sale_date) >= 2";

$res = $conn->query($sql3);

while($row = $res->fetch_assoc()){
    echo $row["product_id"] . ":" . $row["AverageQuantity"] . "<br>";
}
?>
