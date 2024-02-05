<?php include 'partials/header.php'; ?>

<?php
$locations = array(
    array(
        'title' => 'Erie Blvd',
        'street' => '123 Erie Blvd',
        'city' => 'Syracuse',
        'state' => 'NY',
        'zip' => '13202',
        'phone' => '315-555-5555'
    ),
    array(
        'title' => 'Erie Blvd',
        'street' => '123 Erie Blvd',
        'city' => 'Syracuse',
        'state' => 'NY',
        'zip' => '13202',
        'phone' => '315-555-5555'
    ),
    array(
        'title' => 'Erie Blvd',
        'street' => '123 Erie Blvd',
        'city' => 'Syracuse',
        'state' => 'NY',
        'zip' => '13202',
        'phone' => '315-555-5555'
    ),
);
?>

<main>
    <h1>Locations</h1>
    <?php foreach($locations as $location ) { ?>
        <article class="location">
            <h2><?php print $location['title']; ?></h2>
            <p><?php print $location['street']; ?><br />
            <?php print $location['city']; ?>, <?php print $location['state']; ?> <?php print $location['zip']; ?></p>
        </article>
   <?php } ?>
</main>

<?php include 'partials/footer.php'; ?>