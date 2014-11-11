<?php
	$sql = "INSERT INTO user (firstname, lastname, email) VALUES (firstName, lastName, email)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

   ?>