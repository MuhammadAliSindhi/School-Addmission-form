<?php
$insert=false;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple form</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>
	<div class="form_0">
		<img  src="image/bbg.jpg" alt="Addmission" class="bg">
		<h1>Welcome To new school.</h1>
		
		<p>Addmissions are open for new year</p>
		<?php
		if($insert==true){
		echo'<p class="p1">Thanks for take addmission in our school.</p>';
			}
		?>
		<form action="php/index1.php" method="post">
			<label>Full Name:</label>
			<input type="text" name="name" id="name" placeholder="Enter your full name">
			<label>F_name:</label>
			<input type="text" name="fatherName" id="f_name" placeholder="Enter your father full name">
			<label>Mobile No:</label>
			<input type="number" name="mobileNo" placeholder="Enter your phone number">
			<label>Email Address:</label>
			<input type="email" name="email" placeholder="Enter your email address">
			<label>Gender:</label>
			<select name="gender">
				<option>other</option>
				<option>Female</option>
				<option>Male</option>
			</select>
			<label>Select Class/Grade</label>
			<select name="grade">
				<option>other</option>
				<option>Grade#01</option>
				<option>Grade#02</option>
				<option>Grade#03</option>
				<option>Grade#04</option>
				<option>Grade#05</option>
				<option>Grade#06</option>
				<option>Grade#07</option>
				<option>Grade#08</option>
				<option>Grade#09</option>
				<option>Grade#10</option>
				<option>Grade#11</option>
				<option>Grade#12</option>
			</select>
			<label>Select course</label>
			<select name="course">
				<option>other</option>
				<option>Sindhi</option>
				<option>Mathematics</option>
				<option>Science</option>
				<option>English</option>
				<option>Pak study</option>
				<option>Computer</option>
				<option>Grammar</option>
				<option>Basic math</option>
			</select>
			<br><br>
			<label>Comment:</label>
			<textarea name="comment" id="mag" placeholder="Enter your other information"></textarea>
			<button class="btn">Submit</button>
			<button class="res" type="reset" value="Reset"> reset</button>
		</form>
	</div>
</body>
</html>