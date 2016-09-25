<?php

include 'dbConnection.php';

//Brewery Query for Related data dropdown
$sql = "SELECT id, name FROM Breweries";
$breweries = $conn->query($sql);


//Check if a beer_id was supplied in the URL Query Parameter
if (isset($_GET['beer_id'])) {

  $beer_id = $_GET['beer_id'];

  //Query DB for details on that beer
  $beerSQL = "SELECT * FROM Beers where id = $beer_id";

  $beer =  $conn->query($beerSQL)->fetch_assoc();

}

?>

<h1>Add / Update Beer</h1>
<form action="addBeer.php" method="post">
  <?php if(isset($beer_id)) echo "<input type='hidden' name='beer_id' value=" . $beer_id ." >"; ?>
    <div>
        <label for="brewery_id">Brewery:</label>
        <select name="brewery_id">
          <?php
          if ($breweries->num_rows > 0) {
              // output data of each row
              while($row = $breweries->fetch_assoc()) {
                  echo "<option value='" . $row["id"] ."'";
                  if (isset($beer) and  $beer['brewery_id'] == $row["id"]) echo "selected";
                  echo ">" . $row["name"] . "</option>";
              }
          }
          ?>
        </select>

    </div>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" <?php if (isset($beer['name'])) echo "value='" . $beer['name'] . "'"; ?> />
    </div>
    <div>
        <label for="style">Style:</label>
        <input type="text" name="style" <?php if (isset($beer['style'])) echo "value='" . $beer['style'] . "'"; ?> />
    </div>
    <div>
        <label for="abv">ABV:</label>
        <input type="text" name="abv" <?php if (isset($beer['abv'])) echo "value='" . $beer['abv'] . "'"; ?> />
    </div>
    </div>
    <div>
        <label for="rating">Rating:</label>
        <input type="text" name="rating" <?php if (isset($beer['rating'])) echo "value='" . $beer['rating'] . "'"; ?> />
    </div>
    <div>
      <label for="notes">Notes:</label>
      <textarea name="notes"><?php if (isset($beer['notes'])) echo $beer['notes']; ?></textarea>
    </div>


    <div class="button">
        <button type="submit">Submit</button>
    </div>
</form>
