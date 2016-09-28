<?php

include 'dbConnection.php';

$sql = "SELECT
  Beers.id as beer_id, Beers.name as beerName, style, abv, rating, notes,
  Breweries.name as BreweryName, city, state, country
FROM Beers JOIN Breweries ON Breweries.id = Beers.brewery_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>beerApp Beer Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/myCss.css" rel="stylesheet">

  </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">

      <h1 class="form-signin-heading">Beers</h1>

      <h2><a href="breweryForm.php">Add a Brewery</a></h2>
      <h2><a href="beerForm.php">Add a Beer</a></h2>



      <?php
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $row['beerName'] . " | " . $row['style'] . " | " . $row['abv'] .
              " | " . $row['BreweryName'] . " | " . $row['city'] . " | " . $row['state'] .
               " | " . $row['country'] .
               " | <a href=deleteBeer.php?beer_id=" . $row['beer_id']  ."> delete</a>" .
               " | <a href=beerForm.php?beer_id=" . $row['beer_id']  ."> update</a>" . "<br>";
          }
      }
      ?>
    </div>
  </body>
</html>
