<?php

$Height = filter_input(INPUT_POST, 'Height');
$Weight = filter_input(INPUT_POST, 'Weight');
$BMI = filter_input(INPUT_POST, 'BMI');


if(!empty($Height)){
if(!empty($Weight)){


$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'setanitt544';
$dbname = 'iworkout';

//Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errno() .') '
	. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO user ( Height, Weight,BMI) 
	values ($Height,$Weight)"; 
	if($conn->query($sql)){
		echo "New record is inserted succesfully";
	}
	else{
		echo "Error: ". $sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
else{
	echo"Height should not be empty";
	die();
}
}
else{
	echo "Weight should not be empty";
	die();
}


	

?>

<html lang="en">
<body>
<a href="../Sub/sub.php" class="loginhere-link">NEXT STEP</a>
</body>
</html>
