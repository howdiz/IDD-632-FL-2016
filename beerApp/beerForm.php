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

$sql = "SELECT id, name FROM Breweries";

$result = $conn->query($sql);

?>

<h1>Add Beer</h1>
<form action="addBeer.php" method="post">
    <div>
        <label for="brewery_id">brewery:</label>
        <select name="brewery_id">
          <?php
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row["id"]. "'>" . $row["name"] .  "</option>";
              }
          }
          ?>
        </select>

    </div>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="style">style:</label>
        <input type="text" name="style" />
    </div>
    <div>
        <label for="abv">abv:</label>
        <input type="text" name="abv" />
    </div>
    </div>
    <div>
        <label for="rating">rating:</label>
        <input type="text" name="rating" />
    </div>
    <div>
        <label for="notes">notes:</label>
      <textarea name="notes"></textarea>
    </div>


    <div class="button">
        <button type="submit">submit</button>
    </div>
</form>
