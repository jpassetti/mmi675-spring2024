<?php 
include "./partials/header.php"; 
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// 2. Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// 3. Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// 4. SQL query to select all products
$sql = "SELECT id, title, price, description FROM products";

// 5. Execute the query
$result = $connection->query($sql);
?>

<main>
    <h1>Our menu</h1>

<?php
// 6. Check if there are any results
if ($result->num_rows > 0) {
  // output data of each row
  // fetch_assoc() returns an associative array of strings representing the fetched row
  while($row = $result->fetch_assoc()) { ?>

    <article class="product">
      <h2><?php print $row["title"]; ?></h2>
      <p><?php print $row["description"]; ?></p>
      <p>$<?php print $row["price"]; ?></p>
    </article>
  <?php }
} else {
  echo "0 results";
}

// Close connection
$connection->close();
?>

</main>

<?php include "partials/footer.php"; ?>