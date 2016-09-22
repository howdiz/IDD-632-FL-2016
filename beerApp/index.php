<?php

include 'dbConnection.php';

$sql = "SELECT
  Beers.id as beer_id, Beers.name as beerName, style, abv, rating, notes,
  Breweries.name as BreweryName, city, state, country
FROM Beers JOIN Breweries ON Breweries.id = Beers.brewery_id";
$result = $conn->query($sql);

?>

<h1>Beers</h1>

<h2><a href="breweryForm.php">Add a Brewery</a></h2>
<h2><a href="beerForm.php">Add a Beer</a></h2>



<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['beerName'] . " | " . $row['style'] . " | " . $row['abv'] .
        " | " . $row['BreweryName'] . " | " . $row['city'] . " | " . $row['state'] .
         " | " . $row['country'] . " | <a href=deleteBeer.php?beer_id=" . $row['beer_id']  ."> delete</a><br>";
    }
}
?>
