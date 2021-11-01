<?php
return function () {
    return page('authors')
        ->children()
        ->listed();
};
