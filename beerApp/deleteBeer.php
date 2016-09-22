<?php

include 'dbConnection.php';

$beer_id = $_GET['beer_id'];

$sql = "DELETE FROM Beers WHERE id=$beer_id";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
