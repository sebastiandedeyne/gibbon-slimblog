<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../src/application.php';

$app->get('/posts/:id', function ($id) use ($app) {
    echo $app->blog->getPost($id)->getHtmlBody();
});

$app->run();
