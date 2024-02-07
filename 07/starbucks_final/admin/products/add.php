<?php
require_once '../../partials/header.php';
?>

<main>
    <h1>Add New Product</h1>
    <form action="add.php" method="post">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit" name="submit">Add Product</button>
    </form>
</main>

<?php
// 1. Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// 2. Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
// 3. Check if the form was submitted
if (isset($_POST['submit'])) {
    // Directly assign posted values to variables
    $title = $_POST['title'];
    $price = $_POST['price']; // Note: In real applications, ensure proper validation
    $description = $_POST['description'];

    // Create a SQL query string with variables directly embedded
    // IMPORTANT: This approach is vulnerable to SQL injection and is used here purely for simplicity and educational purposes.
    $sql = "INSERT INTO products (title, price, description) VALUES ('$title', $price, '$description')";

    // Execute the query
    $result = $connection->query($sql);

    // Check if the query was successful
    if ($result) {
        echo "<p>Product added successfully!</p>";
    } else {
        echo "<p>Error adding product: {$connection->error}</p>";
    }

    // Close the database connection
    $connection->close();
}
?>


<?php require_once '../../partials/footer.php'; ?>