### MMI 675: Advanced Web Design and Development

# Editing a Product to the Database

```php
<?php require_once '../../partials/header.php'; ?>

<main>
    <h1>Edit Product</h1>

    <?php
    // Initialize $product to ensure it's always defined
    $product = ['id' => '', 'title' => '', 'description' => '', 'price' => ''];

    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if (isset($_POST['update'])) {
        // Handling form submission for update
        $product_id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $sql = "UPDATE products SET title = '$title', description = '$description', price = $price WHERE id = $product_id";
        
        if ($connection->query($sql) === TRUE) {
            //echo "<p>Product updated successfully.</p>";
            // Optionally redirect or re-fetch product to show updated details
            header('Location: list.php');
            exit; // Stop the rest of the script from running
        } else {
            echo "<p>Error updating product: " . $connection->error . "</p>";
        }
    } elseif (isset($_GET['id'])) {
        // Fetch product details to edit
        $product_id = $_GET['id'];
        $sql = "SELECT id, title, price, description FROM products WHERE id = $product_id";
        $result = $connection->query($sql);
        if ($result) {
            $product = $result->fetch_assoc();
        }
    }
    ?>

    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php print $product["id"]; ?>" />

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php print $product["title"]; ?>" />

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" required><?php print $product["description"]; ?></textarea>

        <label for="price">Price</label>
        <input type="number" id="price" name="price" step="0.01" value="<?php print $product["price"]; ?>" required />

        <button type="submit" name="update">Update Product</button>
    </form>

</main>

<?php require_once '../../partials/footer.php'; ?>
```