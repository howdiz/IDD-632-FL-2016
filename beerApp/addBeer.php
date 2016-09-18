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
$style = $_POST['style'];
$abv = $_POST['abv'];
$rating = $_POST['rating'];
$notes = $_POST['notes'];

$sql = "INSERT INTO Beers (name, style, abv, rating, notes)
VALUES ('$name', '$style', '$abv', '$rating', '$notes')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

Beer: <?php echo $name ?><br>
Style: <?php echo $style ?><br>
State: <?php echo $abv ?><br>
Country: <?php echo $rating ?><br>
Country: <?php echo $notes ?><br>
