<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $teacher = $_POST['teacher'];
    $subject = $_POST['subject'];
    $rating = $_POST['rating'];
    $suggestion = $_POST['suggestion'];

    $sql = "INSERT INTO feedback_records (teacher, subject, rating, suggestion)
            VALUES ('$teacher', '$subject', '$rating', '$suggestion')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Feedback submitted successfully!');
        window.location.href='index.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>