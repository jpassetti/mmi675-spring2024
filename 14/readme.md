### MMI 675 Advanced Web Design and Development - Spring 2024

# Wordpress Training | Part 1

### Part 1: Installation, dashboard, basic theming

In tonight's session, we will:

- Install Local WP
- Quickly explore the Wordpress dashboard interface
- Create our own theme
- Add the basic theme files
- Review the basics of PHP and how they work in Wordpress

# What is Wordpress?

Wordpress is a content management system (CMS). It powers more than 42% of the web!

Everything from simple websites, to blogs, to complex portals and enterprise websites, and even applications, are built with WordPress.

# Advantages

- Works out of the box
- Publishing tools
- User management
- Easy theme system
- Global community

# Wordpress.com or .org?

Wordpress.com is for free blogs. They host the blog for you. You can change the theme, but you can't edit the code.

Wordpress.org is for developers. We can download the CMS and upload it to a server. We're not going to be doing this entire process.

Instead, we're going to utilize **Local WP**.

# Local WP

Local WP is a powerful WordPress development tool to set up sites in a staging environment on your local machine.

Download and install now at [localwp.com](https://localwp.com/)

# New site in Local WP

- Click the plus sign to add a site.
- What's your site's name? "MMI 675 Blog"
- No need to change anything under advanced options.
- Use the preferred environment.
- Create a basic username/password.
- Local WP might prompt you to enter your computer admin credentials to install the site.
- Click `OPEN SITE` to see the front-end.
- Click `ADMIN` to log into the back-end.

# Where are my Wordpress files?

On my Mac, Local WP is installing the sites in a directory called "Local Sites".

`/users/jpassetti/Local Sites/mmi-675-blog`

Note: Your path will likely be different.

# Wordpress theming

All of your theming will take place in the `/wp-content/themes` directory.

`...mmi-675-blog/app/public/wp-content/themes/`

Go ahead and create your theme directory `/blog` in the `/wp-content/themes` directory.

`...wp-content/themes/blog`

# Wordpress theming

According to Wordpress.org guidelines, every theme needs AT LEAST two files: `style.css` and `index.php`.

Open your `/blog` directory in VS Code, simply by dragging the directory into the VS Code icon. Or go to `File > Open`, and browse for the `/wp-content/themes/blog` directory and click `open`.

Create two files `style.css` and `index.php` in your `/blog` directory in VS Code.

# Wordpress theming

Place a **stylesheet header** at the top of your `style.css` file. This will give your theme a name, allowing you to activate it in the Wordpress dashboard.

```css
/*
Theme name: MMI 675 Blog
*/

body {
  background-color: yellow;
}
```

# index.php

Create a basic HTML "scaffolding" in your `index.php` file.

You can do this easily in VS Code by typing **!** (exclamation point) and the click `tab` on your keyboard.

Create an `<h1>` element and place it in your `<body>` so that we see something after we activate the theme.

```html
...
<body>
  <h1>Blog</h1>
</body>
...
```

# Link to your CSS

Add this inside your `<head>` element.

```php
...
	<link
		rel="stylesheet"
		href="<?php echo get_stylesheet_uri(); ?>"
	/>
</head>
```

# PHP

`<?php` and `?>` are PHP syntax.

PHP is server-side code that gets **preprocessed** by the server before it gets delivered to the user's browser.

# bloginfo() function

```php
<?php echo get_stylesheet_uri(); ?>
```

This function will be processed by the server and output:
`https://mmi-675-blog.local/wp-content/themes/blog/style.css`

Note: No one can view your URL. It's only available on your local machine. 

# Activate the theme

- Go into your Wordpress dashboard (the back-end).
- Go to `Appearance > Themes` on the left.
- Find your `blog` theme in the list and click `activate`.
- Refresh the front-end of the website and you should see
  yellow and your `h1` headline.

# Template partials

Split your template into smaller files, so they can be re-used on different templates.

Create `header.php` and `footer.php` in your `/blog` directory.

Now you'll have four files in the directory: `index.php`, `header.php`, `footer.php` and `style.css`.

# header.php

Cut the entire "top" part of your HTML code from `index.php` and paste it into `header.php`.

```html 
<!DOCTYPE html>
<html lang="en">
  <head>
    ...
  </head>
  <body>
```
   
# footer.php

Cut the entire "bottom" part of your HTML code from `index.php` and paste it in your `footer.php`.

```html
</body>
</html>
```

# index.php

Composite the template partials together in your `index.php` by using Wordpress PHP functions:

```php
<?php get_header(); ?>

<main>
 Content in the middle
</main>

<?php get_footer(); ?>
```

# Add more to header.php

```html
...
<body>
  <header>
    <h1>Blog</h1>
  </header>
  <nav>Navigation menu will go here.</nav>
</body>
```

# Add more to footer.php

```html
	<footer>
		Copyright information goes here.
	</footer>
</body>
</html>
```

# Add basic styles

```css
header {
  background-color: orange;
}
header h1 {
  margin: 0;
}
nav {
  background-color: limegreen;
}
main {
  background-color: white;
}
footer {
  background-color: gray;
}
```

# Save the files and refresh the front-end

- The server is pulling in the contents of `header.php` and `footer.php` into your `index.php`.
- The website visitor will see a seamless composited homepage and will never see the PHP code, just the result of all of the server preprocessing.
- SEO: Google will only scan the HTML on the client-side.

# More to learn (next class)

- Query the database, retrieve posts, and output them on the homepage.
- Build a menu and link to other pages
- Set up other PHP templates to handle the display posts and pages.
- Add a CSS reset

# And get ready for advanced lessons after spring break

- Create page templates for page.php, single.php and category.php
- Add searchresults.php
- Install and utilize SASS

# Attendance

Zip your `/blog` theme directory, NOT your entire Wordpress installation.

How do you zip a folder?

- On a Mac, right-click on the folder and click `compress`
- On a PC, right-click on the folder and click `send to > compressed zip folder`

Attach `blog.zip` on your assignment submission on Blackboard.

# Questions?

Please stay after class or email me. japasset@syr.edu.

Thank you!
