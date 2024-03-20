### MMI 675 Advanced Web Design and Development - Spring 2024

# Wordpress Training | Part 3

#### Objectives

- Review the basic concepts of WordPress theming
- Review how to list pages in a menu (wp_list_pages)
- Review how to create a default page template (page.php)
- Review how to create a search results template (search.php)
- Learn how to use the featured image module
- Learn how to use tags and categories

#### Resources

- [WordPress Codex: Theme Development](https://codex.wordpress.org/Theme_Development)
- [WordPress Codex: wp_list_pages](https://codex.wordpress.org/Function_Reference/wp_list_pages)
- [WordPress Codex: Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)


### Using WordPress as a CMS and a theming engine

We'll be using WordPress as a Content Management System (CMS) to manage the content of our website. WordPress has many features that make it easy to manage content, such as posts, pages, and media. 

WordPress also has a powerful theming engine that allows you to create custom themes for your website. A theme is a collection of files that work together to create the design and functionality of a website. We'll be using PHP, HTML, and CSS to create the theme. 

More importantly, we'll work within WordPress's theme system to create a custom theme, using its functions and template hierarchy. You'll quickly see how easy it is to create a custom theme in WordPress.


#### wp_list_pages

The `wp_list_pages` function is used to list pages in a menu. It has a number of parameters that can be used to customize the output. For example, to list the pages in a horizontal menu, you can use the following code:

```php
<nav>
    <ul>
        <?php wp_list_pages('title_li='); ?>
    </ul>
</nav>
```

The `title_li` parameter is used to remove the title of the list.

You can read more about the wp_list_pages function in the [WordPress Codex](https://codex.wordpress.org/Function_Reference/wp_list_pages).


#### page.php

The `page.php` file is used to create a default page template. Use the Wordpress Loop to display the content of the page. For example:

```php
<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no page exists with this slug.' ); ?></p>
<?php endif; ?>
</main>
```

### search.php

The `search.php` file is used to create a search results template. Use the Wordpress Loop to display the search results. For example:

```php
<main>
    <h1>Search results: <?php echo get_search_query(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Learn more</a></p>
    </article>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
```

Definitions:
- get_search_query(): Returns the search query as a string.

### Featured images

The featured image module is used to add an image to a post or page. The image can be displayed in the post or page using the `the_post_thumbnail` function. For example:

```php
<?php if ( has_post_thumbnail() ) { ?>
    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>
<?php } ?>
```

You can read more about the featured image module in the [WordPress Codex](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/).

### Important: Enable featured images

To enable featured images in your theme, you need to add the following code to your `functions.php` file. 

Please create a new file called `functions.php` in the root of your theme folder and add the following code:

```php
<?php
// Turn on featured images
add_theme_support( 'post-thumbnails' );
```

### Featured image parameters

The `the_post_thumbnail` function has a number of parameters that can be used to customize the output. For example, to display the image at preset dimensions, you can use the following code:

```php
<?php the_post_thumbnail( 'thumbnail' ); ?>
```

Other presets include `medium`, `large`, and `full`. You can also specify custom dimensions by using an array. For example:

```php
<?php the_post_thumbnail( array( 100, 100 ) ); ?>
```

To add a class to the image, you can use the `class` parameter. For example:

```php
<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'responsive-img' ) ); ?>
```

And then in CSS, you can style the image as follows:

```css
.responsive-img {
    width: 100%;
    height: auto;
}
```

You can read more about the the_post_thumbnail function in the [WordPress Codex](https://developer.wordpress.org/reference/functions/the_post_thumbnail/).

### Tags and categories

Tags and categories are used to organize posts. Tags are used to describe the content of a post, while categories are used to group posts by topic. You can add tags and categories to a post using the Tags and Categories modules in the post editor.

You can display the tags and categories of a post using the `the_tags` and `the_category` functions. For example:

```php
<p>Tags: <?php the_tags( '', ', ', '' ); ?></p>
<p>Categories: <?php the_category( ', ' ); ?></p>
```

Definitions:
- `the_tags('before', 'separator', 'after')`: Displays the tags of a post. The parameters are: before, separator, and after. For example, `the_tags( '', ', ', '' )` will display the tags separated by commas.
- `the_category('separator')`: Displays the categories of a post. The parameter is the separator. For example, `the_category( ', ' )` will display the categories separated by commas.

You can read more about the the_tags and the_category functions in the [WordPress Codex](https://developer.wordpress.org/reference/functions/the_tags/) and [WordPress Codex](https://developer.wordpress.org/reference/functions/the_category/).

### Tags and categories templates

The `tag.php` and `category.php` files are used to create tag and category templates. Use the Wordpress Loop to display the posts. For example:

```php
// tag.php
<main>
    <h1><?php single_tag_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>">Learn more</a></p>
        </article>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
```


```php
// category.php
<main>
    <h1><?php single_cat_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>">Learn more</a></p>
        </article>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
```

Definitions:
- `single_tag_title()`: Displays the title of the tag.
- `single_cat_title()`: Displays the title of the category.

You can read more about the single_tag_title and single_cat_title functions in the [WordPress Codex](https://developer.wordpress.org/reference/functions/single_tag_title/) and [WordPress Codex](https://developer.wordpress.org/reference/functions/single_cat_title/).

### Conclusion

In this part, we reviewed the basic concepts of WordPress theming and learned how to list pages in a menu, create a default page template, create a search results template, use the featured image module, and use tags and categories. We also learned how to create tag and category templates.

In the next part, we will learn how to add a menu to the theme, create a custom page template, and how to add SASS to the theme.

