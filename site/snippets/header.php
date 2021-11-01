<?php if ($site->maintenanceMode()->isTrue() and $page->uid() != 'maintenance') {
    go('maintenance');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>
        <?php echo $site->title()->html() ?> |
        <?php echo $page->title()->html() ?>
    </title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">


    <!-- css -->
    <?= css('assets/css/eat.css') ?>

    <!-- JS -->

</head>

<body>
    <div>
        
    </div>