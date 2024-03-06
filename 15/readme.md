### MMI 675 Advanced Web Design and Development - Spring 2024

# Wordpress Training | Part 2

### Review

In our last session, we:

- Installed Local WP
- Explored the Wordpress dashboard interface
- Created our own theme
- Added the basic theme files
- Reviewed the basics of PHP and how they work in Wordpress

### Part 2: Dynamic content and the loop

In tonight's session, we will:

- Learn how to create and manage posts
- Understand the Wordpress loop
- Implement the loop on our index.php template
- Link to single post pages
- Quickly creating a single post template and displaying the post content

### Wordpress Posts

A Wordpress post is what makes up the blog content. It's displayed in reverse chronological order on your blog page.

Features of a post:

- Title
- Content
- Categories
- Tags
- Featured image (optional, need to be activated in the theme)
- Author
- Date

### The Loop

The Loop is the PHP code used by Wordpress to display posts. Using The Loop, Wordpress processes each post to be displayed on the current page, and formats it according to how it matches specified criteria within The Loop tags.

### The Loop in action

```php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
    </article>    
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
```

Translation: If there are posts in the database, while there are posts, loop over each post and display the post title. If there are no posts, display a message.

### Template tags

Wordpress has a set of template tags that can be used to display information dynamically. For example, `the_title()` is a template tag that displays the title of the post.

- `the_title()` - Displays the title of the post
- `the_content()` - Displays the content of the post
- `the_date()` - Displays the date of the post
- `the_author()` - Displays the author of the post
- `the_excerpt()` - Displays the excerpt of the post
- `the_permalink()` - Displays the URL of the post

### Use the template tags

```php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <p>Published on: <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    </article>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
```

Translation: If there are posts in the database, while there are posts, loop over each post and display the post title, date, excerpt, and a link to the post. If there are no posts, display a message.

### MySQL comparison

The Loop is similar to a `while` loop in MySQL. It's a way to iterate over a set of data and display it. However, in Wordpress, the data is posts from the database. Wordpress will handle the database connection and querying for you.

### Single post template

Create a new file in your theme directory called `single.php`. This is the template that will be used to display a single post.

```php
<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p>Published on: <?php the_date(); ?></p>
        <?php the_content(); ?>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>
```

Translation: When the Wordpress Loop is used on single.php, it automatically knows to display the content of the single post. `have_posts()` is misleading here, because there is only one post. But it's still used to check if there are posts to display.

### Review

In this session, we:

- Learned how to create and manage posts
- Understood the Wordpress loop
- Implemented the loop on our index.php template
- Linked to single post pages
- Quickly created a single post template and displayed the post content

### Next steps

After spring break, we will learn how to:

- Use pages in Wordpress (very similar to posts)
- Use the featured image module and display the image
- Learn how to handle categories and tags
- Add a menu to our theme
- Add SASS to our theme to enhance our CSS styling
- Learn how to style responsive layouts
- Learn how to search the database and display search results

The goal for the rest of the month is to fully build out a blog in Wordpress, learning how to use the Wordpress CMS at a basic or intermediate level and to code a custom theme from scratch.

