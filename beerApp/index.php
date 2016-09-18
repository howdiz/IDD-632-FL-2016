<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "BeerApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<h1>Beers</h1>

<h2><a href="breweryForm.php">Add a Brewery</a></h2>
<h2><a href="beerForm.php">Add a Beer</a></h2>
