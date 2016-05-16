<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pmcrg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "WHEN THE BUYER HAS LOGGED IN THIS IS WHAT HE SEES";
$sql = "SELECT * FROM items WHERE category='phones'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "PHONES";
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "    - Name:   " . $row["name_of_goods"]. "    selling price   " . $row["selling_price"]. "<br>";
    }
} else {
    echo "NO PHONES AVAILABLE FOR SALE";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$sql = "SELECT * FROM items WHERE category='computers'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "COMPUTERS";
	echo "<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "    - Name:   " . $row["name_of_goods"]. "    selling price   " . $row["selling_price"]. "<br>";
    }
} else {
    echo "NO COMPUTERS AVAILABLE FOR SALE";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$sql = "SELECT * FROM items WHERE category='services'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "SERVICES";
	echo "<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "    - Name:   " . $row["name_of_goods"]. "    selling price   " . $row["selling_price"]. "<br>";
    }
} else {
    echo "NO SERVICES AVAILABLE";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$sql = "SELECT * FROM items WHERE category='miscellenous'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "MISCELLENOUS";
	echo "<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "    - Name:   " . $row["name_of_goods"]. "    selling price   " . $row["selling_price"]. "<br>";
    }
} else {
    echo "NO MISCELLENOUS SALES OR SERVICES AVAILABLE FOR SALE";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$conn->close();
?>

CLICK ON THE ITEM YOU WANT TO BUY<br>
<br>

sellers login <a href="log_in.php">HERE</a>

