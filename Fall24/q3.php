<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "uiuweb_final";
$port = 3306;

$conn = new mysqli($server,$user,$password,$database,$port);

//question1
$sql1 = "SELECT LetterGrade, COUNT(*) AS Total
FROM student_final
GROUP BY LetterGrade";

$res = $conn->query($sql1);

while($row = $res->fetch_assoc()){
    echo $row["LetterGrade"] . ":" . $row["Total"] . "<br>";
}

//question2
$sql2 = "UPDATE student_final
SET LetterGrade = 'C'
WHERE Grade < 75
AND LetterGrade != 'D'";

$conn->query($sql2);

echo "Updated<br>";

//question3
$sql3 = "UPDATE student_final
SET Grade = Grade + 5
WHERE Grade > 80
AND Grade + 5 <= 90";

$conn->query($sql3);

echo "Updated<br>";

//question4
$sql4 = "SELECT CourseTitle, COUNT(*) AS TotalStudents
FROM student_final
GROUP BY CourseTitle
ORDER BY TotalStudents DESC";

$res = $conn->query($sql4);

while($row = $res->fetch_assoc()){
    echo $row["CourseTitle"] . ":" . $row["TotalStudents"] . "<br>";
}
?>