### MMI 675: Advanced Web Design and Development
# PHP Lesson 1



# What is PHP?

PHP, which stands for "PHP: Hypertext Preprocessor," is a popular open-source, server-side scripting language used for web development. PHP scripts are executed on the server, and the result is returned to the client as plain HTML.

## Key features of PHP

- __Server-Side:__ PHP is primarily used for server-side scripting. This means that PHP code is executed on the server, and the client (the user's browser) only receives the output, not the PHP code itself.

- __Embedded with HTML:__ PHP code can be embedded within and around HTML code. This makes it easy to add dynamic content to web pages.

- __Database interaction:__ PHP is very effective for creating dynamic and interactive web pages. It's commonly used to interact with databases, such as MySQL, to store and retrieve data. We'll be doing this in a couple weeks.

- __Cross-platform:__ PHP runs on various platforms (Windows, Linux, Unix, etc.) and is compatible with almost all servers used today (Apache, IIS, etc.).

- __Large community and resources:__ PHP has a large community and a vast range of resources and frameworks, which makes it a good choice for many types of web applications. It's been around for a long time (since early 2000s), so there's a lot of documentation and support available.

## Flow of a PHP request

When a user requests a website that contains PHP, the following steps occur:

1. The web server recognizes that the page contains PHP code and passes the request to the PHP interpreter.

2. The PHP interpreter executes the PHP code and generates HTML output.

3. The web server returns the HTML output to the client.


## PHP vs. JavaScript

PHP and JavaScript are both scripting languages, but they are used for different purposes. PHP is primarily used for server-side scripting, while JavaScript is used for client-side scripting. PHP is executed on the server, and the result is returned to the client as plain HTML. JavaScript is executed on the client-side, in the user's browser.

## PHP vs. HTML

PHP and HTML are not the same thing. HTML is a markup language used to create web pages. PHP is a scripting language used to create (or composite) dynamic web pages. PHP can be embedded within HTML, but it's not the same thing.

## PHP vs. CSS

PHP and CSS are not the same thing. CSS is a style sheet language used to style web pages. PHP is a scripting language used to create dynamic web pages. PHP can be used to generate CSS, but it's not the same thing.

## Using Template Partials in PHP

One of the easiest benefits of using PHP is __template partials__. Template partials are a great way to organize your code and make it easier to maintain. They also make it easier to reuse code across multiple pages. For example, if you have a header and footer that are the same on every page, you can put them in a template partial and include them on every page.

```php
<?php include 'partials/header.php'; ?>

<h1>Page Title</h1>
<p>Page content goes here.</p>

<?php include 'partials/footer.php'; ?>
```

```

Translation: "Include the contents of header.php here."

Translation: "Include the contents of footer.php here."

```

A few steps are involved in using template partials:

- Create the partials: First, create a partials subdirectory in your project. Then create the partial files. For example, you might have header.php, footer.php, and sidebar.php as your partials.

- Include the partials: In your main index.php file, you can then include these partials where necessary.

- Dynamic content: You can pass variables or data to your partials to make them dynamic. For instance, you can have a variable for the title in the header.php partial.

- Organized file structure: It’s important to organize your files in a logical manner. Keeping all your partials in a dedicated folder like "partials/" is a common practice.

## Why use template partials?

- Using template partials not only makes your code cleaner but also helps in reusing code across different web pages, thus adhering to the DRY (Don't Repeat Yourself) principle.

- Modular design: breaking a webpage into smaller, reusable components (like headers, footers, navigation bars) not only simplifies the development process but also makes maintenance easier. This modular approach aligns with modern web development practices.

## PHP Variables

Variables are used to store data, like text strings, numbers, or arrays. Variables are declared with the $ sign, followed by the variable name. The value is assigned with the = sign, followed by the value.

```php
<?php
$name = "Alice";
?>

<p><?php print $name; ?></p>
```

## Exercise: Dynamic About Me Paragraph

Create a PHP script that uses basic personal information stored in variables to dynamically generate an "About Me" paragraph.

Learning outcomes:
- Understand how to declare and manipulate variables in PHP.
- Learn how to combine strings and variables to create a dynamic output.
- Gain experience in generating readable and user-friendly content with PHP.

Instructions:
- Edit the provided variables to include your personal information.
- Use __string interpolation__ to construct a paragraph that describes you.
- Run the script to view your About Me paragraph.
- Include additional variables or use HTML tags to format the output.

Create an about.php file and add the following code:

```php
<?php
$name = "Alice";
$age = 25;
$major = "Advanced Media Management";
$hometown = "New York, NY";
?>

<p>
    <?php print "My name is $name. I am $age years old. I study $major and I'm from $hometown."; ?>
</p>

```

## Attendance

Please take a screenshot of your about.php page in the browser. Upload the screenshot to the attendance assignment on Blackboard/Assignments.

## Reading Assignment

- Read Chapter 1 of "Programming PHP" (4th edition) by Kevin Tatroe, Peter MacIntyre, and Rasmus Lerdorf.
- Skim Chapter 2 of "Programming PHP". This chapter is overwhelming to read and we'll be covering the material in class. It's a good reference to have, though.