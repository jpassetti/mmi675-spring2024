<?php include '../../partials/header.php'; ?>

<main>
    <h1>Admin</h1>

    <?php 
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
    <h2>Products</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            
    <?php
// 6. Check if there are any results
if ($result->num_rows > 0) {
  // output data of each row
  // fetch_assoc() returns an associative array of strings representing the fetched row
  while($row = $result->fetch_assoc()) { ?>

    <tr>
    <td><?php print $row["id"]; ?></td>
      <td><?php print $row["title"]; ?></td>
      <td><?php print $row["description"]; ?></td>
      <td>$<?php print $row["price"]; ?></td>
    </tr>
  <?php }
} else {
  echo "0 results";
}

// Close connection
$connection->close();
?>
</tbody>
</table>

<button>
    <a href="<?php print $basePath; ?>/admin/products/add.php">Add product</a>
</button>

</main>

<?php include '../../partials/footer.php'; ?>