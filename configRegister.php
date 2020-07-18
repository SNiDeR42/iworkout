<?php

$Email = filter_input(INPUT_POST, 'Email');
$Full_Name = filter_input(INPUT_POST, 'Full_Name');
$Gender = filter_input(INPUT_POST, 'Gender');
$Password = filter_input(INPUT_POST, 'Password');
$R_Password = filter_input(INPUT_POST, 'R_Password');
$Age = filter_input(INPUT_POST, 'Age');

if(!empty($Email)){
if(!empty($Full_Name)){
if(!empty($Gender)){
if(!empty($Password)){
if(!empty($R_Password)){
if(!empty($Age)){

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
	$paramR_password = password_hash($R_Password, PASSWORD_DEFAULT);
	$param_password = password_hash($Password, PASSWORD_DEFAULT);
	$sql = "INSERT INTO user ( Email, Full_Name, Gender, Password, R_Password, Age) 
	values ('$Email', '$Full_Name', '$Gender', '$param_password', '$paramR_password', '$Age')"; 
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
	echo"Email should not be empty";
	die();
}
}
else{
	echo "Full_Name should not be empty";
	die();
}
	}
else{
	echo "Password should not be empty";
	die();
}
}
	else{
	echo "R_Password should not be empty";
	die();
}
}
	else{
	echo "Age should not be empty";
	die();
}
}

?>

<html lang="en">
<body>
<a href="../Login/login2.php" class="loginhere-link">Go to Login Page</a>
</body>
</html>
