<?php
$servername = "localhost";
$username = "emr";
$password = "emr";
$dbname = "bd_w3_emr2";

// Create connection (procedural)
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Prepare statement
$stmt = mysqli_prepare($conn, "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

// Bind parameters
mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);

// Set parameters and execute first record
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
mysqli_stmt_execute($stmt);

// Second record
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
mysqli_stmt_execute($stmt);

// Third record
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
mysqli_stmt_execute($stmt);

echo "New records created successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

