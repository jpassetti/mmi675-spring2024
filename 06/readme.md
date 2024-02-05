### MMI 675: Advanced Web Design and Development

# Databases and MySQL

### Objectives

- Understand the basics of databases and MySQL
- Understand how to connect to a MySQL database using PHP
- Learn how to query a MySQL database using PHP

### Introduction

A **database** is a collection of data that is stored in a computer system. Databases allow their users to store, retrieve, and manage data. Databases can be classified according to the type of content they store. For example, some databases store financial data, while others store scientific data. Databases can also be classified according to the way they store data. For example, some databases store data in tables, while others store data in documents.

I personally think of a database as an Excel spreadsheet on steroids.

### MySQL

MySQL is a popular open-source relational database management system (RDBMS). It is used by many web developers to store and manage data. MySQL is a powerful database system that is easy to use and maintain. It is also fast, reliable, and scalable.

### phpMyAdmin

**phpMyAdmin** is a free and open-source web-based database management tool. It is written in PHP and is used to manage MySQL databases. phpMyAdmin allows its users to create, read, update, and delete data from a MySQL database. It also allows its users to execute SQL queries and manage database users and permissions.

### Using phpMyAdmin

To use phpMyAdmin, open XAMPP and its dashboard. Click on "phpMyAdmin" on the navigation bar. You will be taken to the phpMyAdmin dashboard. From there, click on "databases" and create a new database. You can then create tables and insert data into your database.

### New database: "starbucks_db"

For this tutorial, we will create a new database called "starbucks_db".

### New table: "products"

This database will have a table called "products" that will store information about Starbucks drinks. The "products" table will have the four columns:

- id (type: INT, length: 11, default: none, collation: not applicable, attributes: none, index: primary, A_I (auto increment): checked)
- title (type: VARCHAR, length: 255, default: none, collation: utf8mb4_unicode_ci, attributes: none, index: none, A_I: unchecked)
- price (type: DECIMAL, length: 10,2, default: none, collation: not applicable, attributes: none, index: none, A_I: unchecked)
- description (type: TEXT, length: none, default: none, collation: utf8mb4_unicode_ci, attributes: none, index: none, A_I: unchecked)

### What is type?

The **type** of a column specifies the type of data that the column can store. For example, the "id" column has a type of "INT", which means that it can store integers. The "title" column has a type of "VARCHAR", which means that it can store strings. The "price" column has a type of "DECIMAL", which means that it can store decimal numbers. The "description" column has a type of "TEXT", which means that it can store large amounts of text.

### What is length?

The **length** of a column specifies the maximum number of characters that the column can store. For example, the "title" column has a length of "255", which means that it can store up to 255 characters. The "price" column has a length of "10,2", which means that it can store up to 10 digits, with 2 of them being after the decimal point.

### What is default?

The **default** of a column specifies the default value of the column. For example, the "id" column has a default of "none", which means that it does not have a default value. The "title" column has a default of "none", which means that it does not have a default value. The "price" column has a default of "none", which means that it does not have a default value. The "description" column has a default of "none", which means that it does not have a default value.

### What is collation?

The collation utf8mb4_unicode_ci in a database context refers to a specific set of rules for comparing characters in a UTF-8 encoding scheme that is capable of representing the full range of Unicode characters.

### What is attributes?

The **attributes** of a column specify any additional attributes of the column. For example, the "id" column has no attributes, which means that it does not have any additional attributes. We're not using any attributes in this tutorial.

### What is index?

The **index** of a column specifies whether the column is indexed. An index is a data structure that improves the speed of data retrieval operations on a database table. For example, the "id" column has an index of "primary", which means that it is the primary key of the table.

### What is a primary key?

A **primary key** is a unique identifier for a record in a database table. It is a column or a set of columns that uniquely identifies each row in the table. For example, the "id" column is the primary key of the "products" table.

### What is A_I (auto increment)?

**Auto increment** is a feature that automatically generates a unique value for a column whenever a new row is inserted into a table. For example, the "id" column has auto increment checked, which means that its value will be automatically incremented whenever a new row is inserted into the "products" table.

### Connecting to a MySQL database using PHP

```php
<?php
// debugging purposes
error_reporting(E_ALL); // report all errors
ini_set('display_errors', 1); // ini_set() sets the value of a configuration option, in this case, display_errors, which controls whether errors are displayed to the user It's being set to 1, which means that errors are displayed


// inside menu.php

// Database connection variables
$servername = "localhost"; // typically "localhost" for XAMPP
$username = "root"; // typically "root" for XAMPP
$password = ""; // typically blank for XAMPP
$dbname = "starbucks_db";
```

### Create the connection

The mysqli_connect() function is used to connect to a MySQL database. It takes four parameters: the server name, the username, the password, and the database name. The function returns a connection object if the connection is successful, and false if the connection is unsuccessful.

```php
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
```

### SQL query

The mysqli_query() function is used to execute an SQL query on a MySQL database. It takes two parameters: the connection object and the SQL query. The function returns a result object if the query is successful, and false if the query is unsuccessful.

```php
// SQL query
$sql = "SELECT id, title, price, description FROM products";
```

Translation: "Select the id, title, price, and description from the products table."

### Execute the query

```php
// Execute the query
$result = $connection->query($sql);
```

Translation: "Take the connection object and execute the SQL query."

### Display the results

```php
// Display the results
if ($result->num_rows > 0) {
  // output data of each row
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
```

Note: I've closed PHP, written HTML with PHP snippets inside, and then re-opened PHP again. This is a common practice when working with PHP and HTML. It makes it easier to type and read the code.

### Breakdown

`$result` is a variable holding the result set returned by a query executed on the database.

`->fetch_assoc()` is a method called on the $result object. This method retrieves the next row of the result set as an **associative array**.

Each key in the associative array corresponds to the name of a column in the result set.

Each value in the associative array is the data corresponding to that column for the current row.

If there are no more rows to fetch, fetch_assoc() returns NULL, which makes it useful for looping through results with a while loop.

### print_r()

`print_r()` is a PHP function that prints human-readable information about a variable. It is useful for debugging purposes.

```html
<pre>
    <?php print_r($result); ?>
</pre>
```

`<pre>` is an HTML tag that preserves both spaces and line breaks.

### Close the connection

You need to close the connection to the database when you are done with it. This is done using the close() method.

```php
// Close the connection
$connection->close();
```

### Conclusion

In this tutorial, we learned about databases and MySQL. We learned how to connect to a MySQL database using PHP and how to query a MySQL database using PHP. We also learned how to use phpMyAdmin to create a new database and a new table. We created a new database called "starbucks_db" and a new table called "products". We then used PHP to connect to the "starbucks_db" database and query the "products" table. We displayed the results of the query on a web page.

### Reading Assignment

"Programming PHP" (4th edition)
By Kevin Tatroe, Peter MacIntyre, and Rasmus Lerdorf.

**Chapter 5: Arrays**

Sections to read:

- Indexed Versus Associative Arrays
- Identifying Elements of an Array
- Storing Data in Arrays
- Multidimensional Arrays

**Chapter 9: Databases**

Read through the chapter. Pay close attention to the "MySQLi Object Interface" section.
