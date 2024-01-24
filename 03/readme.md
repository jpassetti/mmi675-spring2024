### MMI 675: Advanced Web Design and Development
# PHP Lesson 2

Tonight, we're going to learn how to move from simple variables to using arrays and then to a bunch of arrays put together, which we call a multi-dimensional array ("array of arrays"). 

First, we start with just one coffee with too many variables, then we'll see how to handle a a coffee item better with an associative array, and then we'll tackle a whole menu of different coffees with a multi-dimensional array. 

You will see why using arrays makes our coding work a lot easier and more powerful, especially when we start building websites.

## Using Individual Variables for Each Attribute

On a menu.php page, we'll start by defining individual variables for each attribute of a coffee item, like a Mocha:

```php
<?php
$mochaTitle = "Mocha";
$mochaPrice = 4;
$mochaDescription = "Espresso with bittersweet mocha sauce and steamed milk.";
?>
```

This becomes cumbersome and impractical when you have multiple menu items, such as a Latte, Cappuccino, etc.

## Associative Arrays for Each Coffee

Next, we'll encapsulate the details of a coffee item into an associative array:

```php
<?php
$mocha = array(
    "title" => "Mocha",
    "price" => 4.00,
    "description" => "Espresso with bittersweet mocha sauce and steamed milk."
);
?>
```

This is more organized because each coffee item becomes its own 'entity'. However, managing multiple menu items is still challenging.


## Transitioning to an Array of Arrays

Finally, use a multi-dimensional array (array of arrays) to manage a collection of coffee items efficiently:

```php
<?php
$coffees = array(
    array(
        "title" => "Mocha",
        "price" => 4,
        "description" => "Espresso with bittersweet mocha sauce and steamed milk."
    ),
    array(
        "title" => "Latte",
        "price" => 3.50,
        "description" => "Espresso with steamed milk and a light layer of foam."
    ),
    array(
        "title" => "Cappuccino",
        "price" => 3.75,
        "description" => "A classic combination of espresso, steamed milk, and foam."
    )
    // ... more coffees ...
);
?>
```

## Accessing and Displaying the Array Data

You can loop through the $coffees array to display each coffee item. Here's an example:

```php
<?php
foreach ($coffees as $coffee) {
    // Format the price as a currency
    $formattedPrice = number_format($coffee['price'], 2);

    print "<article>";
    print "<h2>{$coffee['title']}</h2>";
    print "<p>\${$formattedPrice}</p>"; // Corrected line
    print "<p>{$coffee['description']}</p>";
    print "</article>";
}
?>
```

Note: In the line `print "<p>\${$formattedPrice}</p>";`, the \ before $ is used to escape the dollar sign so that it's treated as a literal character rather than a variable indicator. This way, the formatted price will be displayed correctly.

This loop will iterate over each coffee item in the $coffees array and display its title, price, and description.

# Summary

In PHP, arrays, especially associative arrays and multi-dimensional arrays (arrays of arrays), are super helpful for organizing data. Think of associative arrays as a way to store details about each Starbucks coffee. For each coffee, you can keep track of its name, price, and description. Associative arrays make this easy because you can use clear names, like 'title' for the coffee's name, 'price' for what it costs, and 'description' for a few details about the coffee.

Now, when you have a lot of different coffees to keep track of, you use an array of arrays. It's like having a big menu where each item on the menu has its own set of details. This big menu (the array of arrays) holds smaller menus (each individual coffee's details).

For building a website for Starbucks, these kinds of arrays are really useful. They let you manage all the coffee options easily – like showing every coffee on the menu page. And if you need to add a new coffee or change the price of an existing one, it's easy to do without messing up the rest of the menu.

So, in PHP, using arrays and especially associative arrays and multi-dimensional arrays, is like having a handy toolbox for all the data you need for a website. It helps keep everything organized and makes updating the website a breeze.

Also it sets a strong foundation for working with database queries and loops (we'll get there soon!).

When we store our coffee details in associative arrays, we organize our information in a way that's similar to how databases store data. In a database, information is stored in tables, which can be thought of like more complex versions of associative arrays. Each row in a database table is like an individual coffee array, with columns for 'title', 'price', and 'description'.

Later, when we start fetching data from a database, we'll often receive it in the form of associative arrays. This makes the transition from using hardcoded arrays to working with dynamic database data really smooth. You'll find that the way you access and display data from these arrays is quite similar to how you'll handle data fetched from a database.

Additionally, the loops we use to go through our arrays of coffees are a great practice for the loops we'll use with database data. Whether we're displaying a list of coffees on a menu or fetching records from a database, the looping concept remains the same. We iterate over each item and do something with it, like displaying it on a web page.

So, by learning to organize our data into arrays and looping through them, we're not only making our current Starbucks project more manageable but also preparing ourselves for more advanced programming tasks involving databases. This approach is a stepping stone towards building dynamic, data-driven websites.