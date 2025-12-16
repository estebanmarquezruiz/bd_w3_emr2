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

//Lanzamos la consulta
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if ($result==false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {

  // Convertir todo a un array asociativo
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Recorrer con foreach
  foreach ($rows as $row) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
  }

} else {
  echo "0 results";
}

// Close connection
mysqli_close($conn);
?>

