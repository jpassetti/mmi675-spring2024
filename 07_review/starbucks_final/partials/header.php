<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/starbucks_db_practice/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks</title>
    <link rel="stylesheet" href="<?php print $basePath; ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php print $basePath; ?>/css/style.css" />
</head>
<body>
    <header>
        <a href="index.php">
            <img 
                src="<?php print $basePath; ?>/images/branding/starbucks-logo.svg"
                alt="Starbucks logo" 
                class="logo"
            />
        </a>
        <nav>
            <ul>
                <li>
                    <a href="<?php print $basePath; ?>/index.php">Home</a>
                </li>
                <li>
                    <a href="<?php print $basePath; ?>/products.php">Products</a>
                </li>
                <li>
                    <a href="<?php print $basePath; ?>/locations.php">Locations</a>
                </li>
                <li>
                    <a href="<?php print $basePath; ?>/about.php">About</a>
                </li>
                <li>
                    <a href="<?php print $basePath; ?>/menu.php">Menu</a>
                </li>
                <li>
                    <a href="<?php print $basePath; ?>/admin/products/index.php">Admin</a>
                </li>
            </ul>
        </nav>
        <button class="btn-ui">
            <img 
                src="<?php print $basePath; ?>/images/icons/menu.svg"
                alt="Menu icon"
            />
        </button>
    </header>