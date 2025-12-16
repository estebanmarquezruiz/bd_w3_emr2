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

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
telephone INT(15),
cod_user CHAR(6) CHECK (cod_user LIKE 'u[0-9][0-9][0-9][0-9][0-9]'),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)==false) {
  echo "Error creating table: " . mysqli_error($conn);
} else {
  echo "Table MyGuests created successfully";
}

// Close connection
mysqli_close($conn);
?> 
