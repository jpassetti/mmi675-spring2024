### MMI 675: Advanced Web Design and Development

# Adding a Product to the Database

### Objectives

- Learn how to use PHP to use the form submission to add a new product to the database

### Add the product to the database

We will add the following code to the main section of the add.php file, below all of the form elements from last class. 

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


### Homework

Please repeat the structure from products and apply it to a new table called `locations`. The locations table should have the following columns:

- id INT AUTO_INCREMENT PRIMARY KEY,
- name VARCHAR(255) NOT NULL,
- address VARCHAR(255) NOT NULL,
- city VARCHAR(255) NOT NULL,
- state VARCHAR(2) NOT NULL,
- zip VARCHAR(5) NOT NULL,
- phone VARCHAR(15),
- email VARCHAR(255)

Definitions:

- `id`: An integer that automatically increments with each new entry, serving as a unique identifier for each location.
- `name`: A variable character string up to 255 characters, to store the name of the location. It's marked as NOT NULL because every location should have a name.
- `address`: Similar to name, this stores the street address of the location and is required.
- `city`: This stores the city name where the location is based, also required.
- `state`: A short string to store the state abbreviation. It's limited to 2 characters, fitting the standard US state code format.
- `zip`: A variable character string limited to 5 characters, suitable for storing US zip codes.
- `phone`: A string that can store a phone number up to 15 characters, allowing for international numbers as well. This field is not marked as NOT NULL, implying it's optional.
- `email`: Stores the email address associated with the location, up to 255 characters.


Steps:

1. Create a new table in your database called `locations`
2. Add the columns listed above
3. Add your first location to the table while in phpMyAdmin
4. Go to your locations.php page, query the database and display the locations in article elements (like our products page)
5. Create a new subdirectory in your `admin` directory called `locations` and add a new file called `list.php`.
6. In `list.php`, query the database and display the locations in a table (like our products admin page)
7. Add a button link to the locations add page below the table (like our products admin page)
8. Add a new file called `add.php` to the `locations` directory and add a form to add a new location to the database (like our products add page).
9. Add a form to the locations add page, and create the necessary label and input fields.
10. Add the PHP code to add the location to the database.

You'll realize that the process is very similar to what we did with the products table. This is a good way to practice and reinforce what we've learned so far.