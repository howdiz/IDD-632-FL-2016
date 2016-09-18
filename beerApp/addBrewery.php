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

//print_r($conn);

$name = $_POST['name'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$sql = "INSERT INTO Breweries (name, city, state, country)
VALUES ('$name', '$city', '$state', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

Brewery: <?php echo $name ?><br>
City: <?php echo $city ?><br>
State: <?php echo $state ?><br>
Country: <?php echo $country ?><br>
