### MMI 675: Advanced Web Design and Development

# Review: Databases, MySQL, and PHP

Please watch the video below to review and prepare for the quiz.

[https://youtu.be/6hBqJuBSftI](https://www.youtube.com/watch?v=6hBqJuBSftI)

### Objectives

- Understand the basics of databases and MySQL
- Understand how to connect to a MySQL database using PHP
- Understand how to query a MySQL database using PHP
- Understand how to loop through the results of a MySQL query using PHP

### Resources

- [W3Schools: PHP MySQL](https://www.w3schools.com/php/php_mysql_intro.asp)

### Why use a database?

Databases are used to store data. They are used to store data in a structured way so that it can be easily accessed, managed, and updated. Databases are used in many web applications to store user data, product data, and other types of data.

You can connect a content management system (CMS) to a database to store and manage content. For example, WordPress uses a database to store posts, pages, and other content.

You can connect frontend web applications to request and display data from a database. For example, you can use a database to store product data and then use PHP to query the database and display the product data on a website.

### What is MySQL?

MySQL is a popular open-source relational database management system (RDBMS). It is used to manage databases. MySQL is used in many web applications to store and manage data.

It is the most popular database system used with PHP. PHP is a server-side scripting language that is used to create dynamic web pages. PHP can be used to connect to a MySQL database to query and display data.

### Connecting to a MySQL database using PHP

To connect to a MySQL database using PHP, you can use the `mysqli_connect()` function. This function takes four parameters: the server name, the username, the password, and the database name.

```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
```

### Querying a MySQL database using PHP

To query a MySQL database using PHP, you can use the `mysqli_query()` function. This function takes two parameters: the connection and the SQL query.

```php
$sql = "SELECT id, title, description, price FROM products";

$result = mysqli_query($conn, $sql);
```

### Looping through the results of a MySQL query using PHP

To loop through the results of a MySQL query using PHP, you can use the `mysqli_fetch_assoc()` function. This function fetches a result row as an associative array.

```php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    print "id: {$row["id"]} - Title: {$row["title"]} - Description: {$row["description"]} - Price: {$row["price"]}<br>";
  }
} else {
  echo "0 results";
}
```

### Admin page with the table element

The table element is used to display data in a tabular format. It is used to display data in rows and columns. You can use the table element to display data from a MySQL database using PHP.

```php
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
if (mysqli_num_rows($result) > 0) {
        // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php print $row["id"]; ?></td>
        <td><?php print $row["title"]; ?></td>
        <td><?php print $row["description"]; ?></td>
        <td><?php print $row["price"]; ?></td>
    </tr>
    <?php }
} else {
    echo "0 results";
}
?>
</tbody>
</table>
```

Note: I closed PHP midway through the table and then opened it again to print the data. This is a common practice when mixing PHP and HTML.

### Close the connection

After you have finished querying the database, you should close the connection to the database.

```php
mysqli_close($connection);
```

### mysqli functions

Note: I'm using more `mysqli` functions are used to interact with a MySQL database using PHP. They offer a cleaner and more secure way to interact with a MySQL database than the older `mysql` functions.

Please don't memorize these functions. You can always look them up when you need to use them. The important thing is to understand the concepts and how to use them.

### Definitions

- **Database**: A structured set of data held in a computer, especially one that is accessible in various ways.
- **MySQL**: An open-source relational database management system (RDBMS).
- **PHP**: A server-side scripting language that is used to create dynamic web pages.
- **mysqli_connect()**: A function used to connect to a MySQL database using PHP.
- **mysqli_query()**: A function used to query a MySQL database using PHP.
- **fetch_assoc()**: A function used to fetch a result row as an associative array.
- **table**: An HTML element used to display data in a tabular format.
- **thead**: An HTML element used to define the header of a table.
- **tbody**: An HTML element used to define the body of a table.
- **tr**: An HTML element used to define a row in a table.
- **th**: An HTML element used to define a header cell in a table.
- **td**: An HTML element used to define a standard cell in a table.

### Conclusion

In this review, we learned about databases, MySQL, and PHP. We learned how to connect to a MySQL database using PHP, how to query a MySQL database using PHP, and how to loop through the results of a MySQL query using PHP. We also learned why databases are used and what MySQL is.
