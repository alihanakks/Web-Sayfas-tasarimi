
<?php
$servername = "Localhost via UNIX socket";
$database = "sas243comtr_ders";
$username = "sas243comtr_ali";
$password = "alihan.20";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . 
mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>

