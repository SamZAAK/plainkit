<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<h2><?= $page->author()->toPage()->title() ?></h2>
<div>
    <?= $page->blocks()->toBlocks() ?>
</div>
<?php snippet('similarArticles') ?>
<?php snippet('footer') ?>