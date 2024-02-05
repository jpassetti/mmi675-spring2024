<?php include "partials/header.php"; ?>

<?php
$coffees = array(
    array(
        "title" => "Mocha",
        "price" => 3.75,
        "description" => "A delicious mocha made with our special blend of coffee."
    ), 
    array(
        "title" => "Cappuccino",
        "price" => 4.75,
        "description" => "A delicious cappuccino made with our special blend of coffee."
    ),
    array(
        "title" => "Latte",
        "price" => 4.75,
        "description" => "A delicious latte made with our special blend of coffee."
    ),
);
?>

<main>
    <h2>Our menu</h2>
    <?php foreach ($coffees as $coffee) { ?>
        <article>
            <h3><?php print $coffee['title']; ?> </h3>
            <h4><?php print $coffee['price']; ?></h4>
            <p><?php print $coffee['description']; ?></p>
        </article>
    <?php } ?>
</main>

<?php include "partials/footer.php"; ?>