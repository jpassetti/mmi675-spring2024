### MMI 675: Advanced Web Design and Development

### Objectives

- Learn how to delete a product from the database
- Learn how to add styles to forms, tables and buttons

### Instructions

- Create a delete product page in `admin/products/delete.php`
- Add a delete button to the list of products in `admin/products/list.php`
- Reuse the code from edit.php, but change the SQL statement to delete the product
- Add classes to the form (form, form**group, form**label, form**input, form**textarea)
- Add classes to the table (table, table**heading, table**cell)
- Add classes to the buttons (btn, primary, delete, secondary)
- Add styles to style.css for the form, table and buttons

# Delete a Product to the Database

The code below is VERY similar to edit.php, with the exception of the SQL statement.

I've also added a cancel link to the form, simply linking back to list.php.

```php
<?php require_once '../../partials/header.php'; ?>

<main>
    <h1>Delete Product</h1>

    <?php
    // 1. Create connection
    $connection = mysqli_connect("servername", "username", "password", "dbname");

    // 2. Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // 3. Check if the form was submitted, specifically if the button with name="confirm" was clicked and added to the $_POST array
    if (isset($_POST['confirm'])) {
        // 3a. Get the product ID from the form
        $product_id = $_POST['id'];

        // SQL to delete the product
        $sql = "DELETE FROM products WHERE id = $product_id";

        if ($connection->query($sql) === TRUE) {
            //echo "<p>Product deleted successfully.</p>";
            header('Location: list.php');
        } else {
            print "<p>Error deleting product: " . $connection->error . "</p>";
        }

        $connection->close();
    } else if (isset($_GET['id'])) {
        // 3b. Get the product ID from the URL
        $product_id = $_GET['id'];

        // Fetch the product title
        $sql = "SELECT title FROM products WHERE id = $product_id";

        // Execute the SQL statement
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $product_title = $row["title"];
        ?>
            <p>Are you sure you want to delete "<?php print $product_title; ?>"?</p>
            <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php print $product_id; ?>">
                    <button type="submit" name="confirm">Yes, delete it!</button>
                    <a href="list.php">Cancel</a>
             </form>
        <?php
        } else {
            print "<p>Product not found.</p>";
        }
    } else {
        print "<p>No product ID provided.</p>";
    }
    ?>

</main>

<?php require_once '../../partials/footer.php'; ?>

```

### Styling

We need to add styling to a number of items, specifically the table, the form, and the buttons.

#### Table styles

```html
<table class="table">
  <thead>
    <tr>
      <th class="table__heading">ID</th>
      <th class="table__heading">Title</th>
      <th class="table__heading">Price</th>
      <th class="table__heading">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="table__cell">1</td>
      <td class="table__cell">Product 1</td>
      <td class="table__cell">$100.00</td>
      <td class="table__cell">
        <a href="edit.php?id=1">Edit</a>
        <a href="delete.php?id=1">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
```

### CSS class name conventions

We'll use BEM (Block, Element, Modifier) for our class names. This will help us to create a consistent naming convention for our classes, and make it easier to understand the purpose of each class.

BEM is a popular naming convention for CSS classes. It stands for Block, Element, Modifier. It's a way of naming classes that makes it easier to understand the purpose of each class, and to create a consistent naming convention for your classes.

```css
.block__element--modifier {
  /* Styles here */
}
```

- A **block** is a standalone component that is meaningful on its own.
- An **element** is a part of a block, such as a table cell, or a form label. It's not meaningful on its own, and is always part of a block.
- A **modifier** is a class that modifies the style of a block or element. For example, a primary button, or a delete button. Modifiers are indicate variants or flavors of a block or element.

Examples of BEM class names:

- `.table` - The block
- `.table__heading` - The element
- `.table__cell` - The element

or

- `.form` - The block
- `.form__group` - The element
- `.form__label` - The element

or

- `.btn` - The block
- `.btn--primary` - The modifier
- `.btn--secondary` - The modifier
- `.btn--tertiary` - The modifier
- `.btn--delete` - The modifier
- `.btn--large` - The modifier
- `.btn--medium` - The modifier
- `.btn--small` - The modifier

We can add modifiers for both the button's style (--primary, --secondary, --tertiary) and its size (--large, --medium, --small). This allows you to mix and match style and size modifiers as needed while maintaining a clear and consistent naming convention.

### Examples

For a large primary button, you would have:

```html
<button class="btn btn--primary btn--large">Primary Large</button>
```

For a medium secondary button, it would be:

```html
<button class="btn btn--secondary btn--medium">Secondary Medium</button>
```

And for a medium tertiary button:

```html
<button class="btn btn--tertiary btn--medium">Tertiary Medium</button>
```

# Table styles

```css
.table {
  padding: 20px;
  border-collapse: collapse; /* This will
remove the space between the cells */
  font-family: Arial;
  text-align: left;
  margin-bottom: 20px;
}
.table tr:nth-child(odd) {
  background-color: #f2f2f2; /*
Light gray background for odd rows */
}
.table__heading {
  background-color: lightgray;
  padding: 20px;
  text-transform: uppercase;
}
.table__cell {
  padding: 20px;
  border-bottom: 1px solid lightgray;
  vertical-align: top; /* Align text to
the top of the cell */
}
```

#### Form styles

```css
.form {
  margin-bottom: 20px;
}
.form__group {
  margin-bottom: 20px; /* Add space between form groups */
}
.form__label {
  display: block; /* Make the label a block element, so it takes up the full width of the container */
  font-family: Arial;
  font-weight: bold;
}
.form__input,
.form__textarea {
  width: 100%;
  padding: 16px;
  font-size: 16px;
  font-family: Arial;
}
```

#### Button styles

We need to make a system for buttons, so we can easily reuse buttons, or add new buttons with different styles based on their context. We'll use a base class of `.btn` and then add additional classes for different styles.

```html
<button class="btn btn--primary">Primary Button</button>
<button class="btn btn--delete">Delete Button</button>
<button class="btn btn--secondary">Secondary Button</button>
```

```css
.btn {
  padding: 16px;
  color: white;
  font-family: Arial;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none;
  border: 1px solid transparent;
}
.btn--primary {
  background-color: green;
}
.btn--delete {
  background-color: red;
  border-color: red;
}
.btn--secondary {
  background-color: white;
  border-color: black;
  color: black;
}
```
