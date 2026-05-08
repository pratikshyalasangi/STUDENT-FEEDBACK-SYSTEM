<?php
include "db.php";

$teacher = $_POST['teacher'];
$subject = $_POST['subject'];

$sql = "SELECT * FROM feedback_records 
        WHERE teacher='$teacher' AND subject='$subject'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Feedback</title>
<link rel="stylesheet" href="style.css">

<style>
table{
    margin:auto;
    width:80%;
    border-collapse:collapse;
    background:white;
    color:black;
    border-radius:10px;
    overflow:hidden;
}

th{
    background:#667eea;
    color:white;
}

th, td{
    padding:10px;
}

tr:nth-child(even){
    background:#f2f2f2;
}

body{
    display:block;
    padding:30px;
    text-align:center;
}
</style>

</head>

<body>

<h2>Confirmation</h2>

<table>
<tr>
<th>Teacher</th>
<th>Subject</th>
<th>Rating</th>
<th>Suggestion</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['teacher']."</td>
        <td>".$row['subject']."</td>
        <td>".$row['rating']."</td>
        <td>".$row['suggestion']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No feedback found</td></tr>";
}
?>

</table>

</body>
</html>