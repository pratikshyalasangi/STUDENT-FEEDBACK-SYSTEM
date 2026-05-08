<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h2>Feedback Form</h2>

<form action="submit.php" method="POST">

<select name="teacher" required>
<option value="">Select Teacher</option>
<option>Prof. G. N. Chanderki</option>
<option>Prof. S. A. Langote</option>
<option>Prof. V. A. Sangolagi</option>
<option>Prof. N. B. Aherwadi</option>
<option>Prof. U. K. Jadhav</option>
</select>

<select name="subject" required>
<option value="">Select Subject</option>
<option>Web Development</option>
<option>CNS</option>
<option>Deep Learning</option>
<option>AML</option>
<option>ESD</option>
</select>

<select name="rating" required>
<option value="">Rating</option>
<option>Excellent</option>
<option>Good</option>
<option>Average</option>
<option>Poor</option>
</select>

<textarea name="suggestion" placeholder="Suggestion"></textarea>

<button type="submit">Submit</button>

</form>

</div>

</body>
</html>