### MMI 675: Advanced Web Design and Development

# PHP Admin pages

### Objectives

- Understand how to create a PHP admin page
- Learn how to add a new product to a database using a PHP admin page

### Introduction

In this tutorial, we will create a PHP admin page that will allow us to add new products to our database. We will use the "starbucks_db" database that we created in the previous tutorial. The "starbucks_db" database has a table called "products" that stores information about Starbucks drinks. The "products" table has four columns: id, title, price, and description.

### Create a configuration file

To create the PHP admin page, we will first create a configuration file that will allow us to connect to the "starbucks_db" database. We will create a new subdirectory called "config" in the "starbucks" project directory. We will then add a config.php file to the "config" subdirectory. The config.php file will contain the following code:

```php

<?php
// error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// base path
$basePath = "/starbucks"; // change this to the name of your project folder in htdocs

// db credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "starbucks_db_practice"; // change this to your db name
?>

```

### Import the configuration file

To import the configuration file, we will add the following code to the top of the header.php file in the "starbucks/partials" project directory:

```php
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/starbucks_db_practice/config/config.php';
?>
```

Translation: "Require the config.php file from the config directory."

The `$_SERVER['DOCUMENT_ROOT']` variable returns the root directory of the server. We use this variable to specify the absolute path to the config.php file.

### Update paths

We will also update the paths in the header.php file to use the `$basePath` variable. We will replace the following code:

```php
<link rel="stylesheet" href="/starbucks/css/style.css">
```

with this code:

```php
<link rel="stylesheet" href="<?php print $basePath; ?>/css/style.css">
```

Do the same thing for your logo and menu button icon.

The navigation needs to be updated, too. Replace the following code:

```php
<a href="index.php">Home</a>
```

with this code:

```php
<a href="<?php print $basePath; ?>/index.php">Home</a>
```

Repeat this structure for all links.

### Creating the PHP admin page

To create the PHP admin page, we will create a new subdirectory called "admin" in the "starbucks" project directory. We will then add an index.php file to the "admin" subdirectory. The index.php file will contain the following code:

```php
<?php include '../../partials/header.php'; ?>

<main>
    <h1>Admin</h1>
    <!-- product admin information goes here -->
</main>

<?php include '../../partials/footer.php'; ?>
```

This is the typical format for any page on our website, however, notice the extra `../` in the `include` statements. This is because the admin directory is one level deeper than the partials directory.

### Display the products as a table

We will display the products as a table on the admin page. We will add the following code to the main section of the index.php file:

```php
 <?php
// 1. Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// 1. Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// 3. SQL query to select all products
$sql = "SELECT id, title, price, description FROM products";

// 4. Execute the query
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
// 5. Check if there are any results
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
```

Notice it's the same code we used for displaying the products on the menu page. The only different is that we're displaying the information in a table format.

### Vocabulary

`<table>` - creates a table

`<thead>` - creates a table header

`<tr>` - creates a table row

`<th>` - creates a table header cell

`<tbody>` - creates a table body

`<td>` - creates a table data cell

And notice the `button` and `a` tags at the bottom. This is a link to the add product page. We'll create that next.

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

1. Created a configuration file that stores reusable variables and allows us to connect to the "starbucks_db" database easily
2. Imported the configuration file into the header.php file
3. Updated the paths in the header.php file to use the `$basePath` variable
4. Created a PHP admin page that displays the products as a table
5. Created an add product page that allows us to add new products to the database
