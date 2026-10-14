<?php
$server = "localhost";
$user = "root";
$password = " ";
$database = "campus_library";
$port = 3306;

$conn = new mysqli($server,$user,$password,$database,$port);

//question1
$sql1 = "SELECT Status,COUNT(*) AS TotalBooks
FROM book_loans
GROUP BY Status
HAVING COUNT(*) > 1";

$res = $conn->query($sql1);

while($row = $res->fetch_assoc()){
    echo $row["Status"]. " " . $row["TotalBooks"]."<br>";
}

//question2
$sql2 = "UPDATE book_loans
SET Status='Grace Period',PenaltyFee = 0
WHERE Status = 'Overdue'
AND DaysOverdue < 7";

$res = $conn->query($sql2);
echo "Updated Successfully <br>";

//question3
$sql3 = "UPDATE book_loans
SET PenaltyFee = PenaltyFee*1.1
WHERE PenaltyFee > 20
AND PenaltyFee * 1.1 <= 50";

$conn->query($sql3);
echo "Processing Charge Updated <br>";

//question4
$sql4 = "SELECT BookTitle,
SUM(PenaltyFee) AS TotalPenalty
FROM book_loans
GROUP BY BookTitle
ORDER BY TotalPenalty desc";

$res = $conn->query($sql4);

while($row = $res->fetch_assoc()){
    echo $row["BookTitle"]." ".number_format($row["TotalPenalty"],2)."<br>";
}
$conn->close();
?>