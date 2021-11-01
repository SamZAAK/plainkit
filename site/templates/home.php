<?php snippet('header') ?>
<div>
    <h1><?= $page->title() ?></h1>

    <aside>
        <ul class="tags">
            <li>
                <a href="<?= url($page->url(), ['params' => ['tag' => '']]) ?>">
                    Home
                </a>
            </li>
            <?php foreach ($tags as $tag) : ?>
                <li>
                    <a href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
                        <?= html($tag) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </aside>

    <!-- projects -->
    <?php foreach ($articles as $article) : ?>
        <article>
            <h1><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h1>
            <a href="<?= $article->url() ?>">
                <div>
                    <div id=articleOverviewTitle> <?= $article->title() ?></div>
                    <image src="<?= $article->cover()->toFile()->url() ?>"></image>

                </div>
            </a>
        </article>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>