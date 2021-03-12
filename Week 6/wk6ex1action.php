<?php
	$sql = "INSERT INTO test (name, email, phone_number)";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
    var_dump($sql);
	// Connect to server and select database
	$link = mysqli_connect("127.0.0.1", "root", "", "db1_21815369");
    
	// Execute sql statement		
    
	$sql = "SELECT * FROM test";
	$result = mysqli_query($link,$sql);
	// Execute sql statement
	print_r($sql);
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email] $row[phone_number] <br/>";
	}
?>
