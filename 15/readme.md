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

### Reflection: Why develop a Wordpress theme from scratch?

- Full control over the design
- No bloat from pre-built themes
- Learn how Wordpress works
- Customize the theme to your needs

As we keep going, I want to highlight our overarching goal: utilizing WordPress not just as a blogging platform, but as a robust Content Management System (CMS). A CMS is essentially a sophisticated tool for managing digital content, and WordPress offers a versatile framework for doing just that.

Our ambition is to harness WordPress to build custom themes from scratch. This will allow us to create tailored digital experiences, reflecting specific design visions and functional requirements. Building a theme from the ground up offers control over the website's appearance, behavior, and content organization, turning WordPress into a powerful engine behind personalized, dynamic websites.

By focusing on WordPress as a CMS, we will eventually explore its capabilities beyond the basics, delving into custom post types, taxonomies, and metadata to manage and present content in innovative ways. This approach positions WordPress as an integral part of our web development toolkit, enabling us to craft unique online platforms with precision and creativity.

In our upcoming classes, we'll break down the process of theme development step-by-step, from initial concept to final implementation. We'll cover the essentials of theme structure, the WordPress Loop, template tags, and how to create specific templates for different types of content.

I encourage you to embrace this challenge with enthusiasm and curiosity. The journey of building a WordPress theme from scratch is not only a technical skill but a pathway to expressing your creative ideas through web design.


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

