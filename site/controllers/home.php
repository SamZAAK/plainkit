<?php
return function ($kirby) {

    // fetch the basic set of pages
    $articles = $kirby->collection('articles');

    // fetch all tags
    $tags = $articles->pluck('tags', ',', true);

    // add the tag filter
    if ($tag = urldecode(param('tag'))) {
        $projects = $articles->filterBy('tags', $tag, ',');
    }

    // apply pagination
    $articles = $articles->paginate(10);
    $pagination = $articles->pagination();

    return compact('articles', 'tags', 'tag', 'pagination');
};
