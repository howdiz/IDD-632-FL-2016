<?php

include 'dbConnection.php';

$name = $_POST['name'];
$brewery_id = $_POST['brewery_id'];
$style = $_POST['style'];
$abv = $_POST['abv'];
$rating = $_POST['rating'];
$notes = $_POST['notes'];

//Check if a beer_id was provided if so, we're updating a beer, otherwise we're inserting
if (isset($_POST['beer_id']))
{
  $beer_id = $_POST['beer_id'];
  $sql =  "UPDATE Beers SET name='$name', style='$style', abv = '$abv', rating='$rating', notes = '$notes'
  WHERE id = $beer_id";

} else {
  $sql = "INSERT INTO Beers (name, brewery_id, style, abv, rating, notes)
  VALUES ('$name', '$brewery_id', '$style', '$abv', '$rating', '$notes')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

Beer: <?php echo $name ?><br>
Style: <?php echo $style ?><br>
abv: <?php echo $abv ?><br>
rating: <?php echo $rating ?><br>
notes: <?php echo $notes ?><br>
