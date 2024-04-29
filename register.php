<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$Password = $_POST['Password'];
	$Country = $_POST['Country'];
	$Pincode = $_POST['Pincode'];
	$State = $_POST['State'];

	// Database connection
	$conn = new mysqli('localhost:2648','root','','bookhub');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
    $sql="insert into registration (Name,email,Password,Country,Pincode,State) values('$_POST[Name]','$_POST[email]','$_POST[Password]','$_POST[Country]','$_POST[Pincode]','$_POST[State]')";
    if($conn->query($sql) === True) {
      echo"Registered successfully.";
     } else {
      echo"Error.".$conn->error;
     }
		$conn->close();
	}
?>