 <?php
$servername = "localhost";
$username = "emr";
$password = "emr";
$dbname = "bd_w3_emr2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$sql = "UPDATE MyGuests SET lastname='Smith' WHERE id=2";

if (!mysqli_query($conn, $sql)) {
  echo "Error updating record: " . mysqli_error($conn);
}elseif (mysqli_affected_rows($conn)==0){ //Ese id no existe

    echo "Record doesn't exist. Impossible to update it.";} else {
  echo "Record updated successfully";
}

// Close connection
mysqli_close($conn);
?>

