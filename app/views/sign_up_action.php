<?php 
	$conn = new mysqli("127.0.0.1", "root", "1234" , "rajukADA");
	$sql = "INSERT INTO users (
		firstName,
		lastName,
		email,
		password,
		gender,
		dateOfBirth,
		phoneNumber,
		currentAddress,
		permanentAdress) VALUES (
		'$_POST[firstName]',
		'$_POST[lastName]', 
		'$_POST[email]',
		'$_POST[password]', 
		'$_POST[gender]', 
		'$_POST[dateOfBirth]', 
		'$_POST[phoneNumber]', 
		'$_POST[currentAddress]', 
		'$_POST[permanentAddress]')";

	if ($conn->query($sql) === TRUE) {
    	//echo "New record created successfully";
    	echo "<h1>সাইন আপ করার জন্য আপনাকে ধন্যবাদ</h1>";
    	echo "<h3><a href=/login>লগইন পেজে ফেরত </h3>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

   
?>

