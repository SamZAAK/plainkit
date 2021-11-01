<footer>
</footer>
<nav class="languages">
    <ul>
        <?php foreach ($kirby->languages() as $language) : ?>
            <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                <a href="<?php e($page->content($language->code())->language() != $site->language($language->code()), page('home')->url($language->code()), $page->url($language->code())) ?>"><?php echo $language->code(); ?></a>
                </li>
            <?php endforeach ?>
    </ul>
</nav>

</body>

</html>