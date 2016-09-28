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
      <div class="starter-template">

      <?php
      if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>New record created successfully</h2> <br>";
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
      </div>
    </div>
  </body>
</html>
