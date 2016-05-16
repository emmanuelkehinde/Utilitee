<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pmcrg";

// Create connection
echo "<br>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_POST['id'];
echo $id;

$delete=("DELETE FROM items WHERE id='$id'");

$result= mysqli_query($conn,$delete);

