<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_posts_collection_get' => [[], ['_controller' => 'App\\Controller\\PostController::collection'], [], [['text', '/api/posts']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
