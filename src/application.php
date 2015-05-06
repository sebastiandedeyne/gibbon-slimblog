<?php

use GibbonCms\Blog\Blog;
use Slim\Slim;

$app = new Slim;

$app->container->singleton('blog', function() {
    return new Blog(__DIR__.'/../content/posts');
});

return $app;
