<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" />
</head>
<body>
    <header>
        <h1>MMI 675 Blog</h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </nav>
    <div>
        <?php echo get_search_form(); ?>
    </div>