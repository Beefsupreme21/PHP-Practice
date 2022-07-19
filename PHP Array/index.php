<?php

class Post {
    public $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title; 
        $this->published = $published; 
    }
}

$posts = [
    new Post('First First Post', true),
    new Post('First Second Post', true),
    new Post('First Third Post', true),
    new Post('First Fourth Post', false),
];


$unpublishedPosts = array_filter($posts, function ($post) {
    return ! $post->published; 
});

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published; 
});

function format($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

format($unpublishedPosts);
format($publishedPosts);




$modified = array_map(function ($post) {
    return 'foobar';
}, $posts);

format($modified);

$titles = array_column($posts, 'title');

format($titles);


