### MMI 675: Advanced Web Design and Development

# Adding a Product to the Database

### Objectives

- Learn how to add a new product to a database using a PHP admin page

### Create the add product page

To create the add product page, we'll create an add.php file to the "products" subdirectory. The add.php file will contain the following code:

```php
<?php
require_once '../../partials/header.php';
?>

<main>
    <h1>Add New Product</h1>
    <!-- HTML form goes here -->
    <!-- backend logic goes after the form -->
</main>

<?php
require_once '../../partials/footer.php';
?>
```

### Create the form

We will add the following code to the main section of the add.php file:

```php
<form action="add.php" method="post" class="form">
    <div class="form--group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div class="form--group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
    </div>
    <div class="form--group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit" name="submit">Add Product</button>
</form>
```

Translation: "Create a form with a title, price, and description input fields and an add product button."

### Vocabulary

`<form>` - creates a form

In the form element, we have an `action` attribute set to "add.php" and a `method` attribute set to "post". This means that when the form is submitted, the data will be sent to the "add.php" file using the POST method.

`<label>` - creates a label for an input field for accessibility

`<input>` - creates an input field. These elements can have different types, such as text, number, email, and password.

The input `name` attribute is used to identify the form data after it is submitted.

The input `id` attribute is used to associate the label with the input field.

The input `required` attribute is used to specify that the input field must be filled out before submitting the form.

The input `step` attribute is used to specify the number intervals for an input field.

`<textarea>` - creates a multi-line text input field

`<button>` - creates a button

`<div class="form--group">` - creates a group of form elements. The class is for styling purposes.

### Add the product to the database

We will add the following code to the main section of the add.php file, below all of the form elements:

```php
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
```

Notice it's almost the same code as the menu page, but we're adding a new product to the database instead of displaying the products.

### Vocabulary

`isset()` - checks if a variable is set and is not NULL

`$_POST` - this is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".

`$title`, `$price`, and `$description` - these are variables that store the form data

`INSERT INTO` - this is an SQL command that adds new records to a table in a database

`VALUES` - this is an SQL command that specifies the values to be inserted into the table

### Conclusion

In this tutorial, we did the following:

- Created an add product page that allows the content editor to input information about a new product
- Utilize an HTML form element with input fields for the product title, price, and description
- Create backend logic to add the product to the database
