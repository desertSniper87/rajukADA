<?php 
	$conn = new mysqli("127.0.0.1", "root", "1234" , "rajukADA");
	$sql = "INSERT INTO BPAForm (
		formID,
		receiptNumber,
		proposedStructureDetailsID,
		documentsID
		) VALUES (
		'$_POST[formID]',
		'$_POST[receiptNumber]', 
		'$_POST[proposedStructureDetailsID]',
		'$_POST[documentsID]' )";

	if ($conn->query($sql) === TRUE) {
    	//echo "New record created successfully";
    	echo "<h1>আপনার আবেদন গৃহীত হয়েছে</h1>";
    	echo "<h3><a href=/home>নীড়পাতায় ফেরত </h3>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

   
?>

 
