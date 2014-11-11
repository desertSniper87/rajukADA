@extends("layout")
@section("content")
<?php
	$conn = new mysqli("127.0.0.1", "root", "1234" , "rajukADA");
	$email = $_POST["email"];
	$password = $_POST["password"];

	//echo $_POST["email"];

	$sql = sprintf("SELECT users.password FROM users WHERE email = %s", $email);
	$result = $conn->query($sql);

	if (!$result)
			die();

	while ($row = mysql_fetch_assoc($result))
		echo $row["password"];
?>
@stop