
<!DOCTYPE html>
<html>
<head>
  <title>form filling area</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head> 
<body>

<?php
$insert=false;
if(isset($_POST["name"])){

  $server="localhost";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username, $password);
  if(!$con){
  	die("not working ".msqli_connect_error());
  }
  else{
  	//echo "working";
  	$name=$_POST["name"];
  	$fatherName=$_POST["fatherName"];
  	$mobileNo=$_POST["mobileNo"];
  	$email=$_POST["email"];
  	$gender=$_POST["gender"];
  	$grade=$_POST["grade"];
  	$course=$_POST["course"];
  	$comment=$_POST["comment"];
  	
  	$sql="INSERT INTO `form`.`addmission_form` ( `name`, `f_name`, `mobile`, `email`, `gender`, `grade`, `course`, `comment`, `date`) VALUES ('$name', '$fatherName', '$mobileNo', '$email', '$gender', '$grade', '$course', '$comment', current_timestamp());";
  	    //echo $sql;
  	    if($con->query($sql)==true){
  	    	//echo "Successfully ineserted";
  	    	$insert=true;
  	    }
  	    else{
  	    	//echo "Error: $sql <br> $con->error";
  	    }

  	    $con->close();
 
}

}
echo'<div class="form_1">
<p class="page">congratulations my dear student your addmission are confirm, we will response you with via email or phone </p>
</div>';
echo '<p class="back_to_menu"><a href="javascript:history.go(-1)" title="Return to previous page">Go back</a></p>';

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="../jquery/JQuery12.js"></script>
<script src="../jquery/php_jquery.js"></script>
</body>
</html>