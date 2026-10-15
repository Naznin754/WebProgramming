<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "uiutech_final";
$port = 3306;

$conn = new mysqli($server,$user,$password,$database,$port);

//question1
$sql1 = "SELECT PerformanceRating, COUNT(*) AS Total
FROM employee_final
GROUP BY PerformanceRating";

$res=$conn->query($sql1);

while($row=$res->fetch_assoc()){
    echo $row["PerformanceRating"] . ":" . $row["Total"]."<br>";

}

//question2
$sql2 = "UPDATE enployee_final
SET PerformanceRating = 'C'
WHERE Salary < 40000
AND PerformanceRating != 'D'";

$conn->query($sql2);

echo "Updated";

//question3
$sql3 = "UPDATE employee_final
SET Salary = Salary + 5000
WHERE Salary > 50000
AND Salary+5000 <= 60000";

$conn->query($sql3);
echo "Updated";


//question4
$sql4 = "SELECT DepartmentName,COUNT(*) AS TotalEmployees
FROM employee_final
GROUP BY DepartmentName
ORDER BY TotalEmployees desc";

$res = $conn->query($sql4);

while($row = $res->fetch_assoc()){
    echo $row["DepartmentName"].":" .$row["TotalEmployee"]."<br>";
}
?>