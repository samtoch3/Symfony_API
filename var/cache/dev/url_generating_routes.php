<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_posts_collection_get' => [[], ['_controller' => 'App\\Controller\\PostController::collection'], [], [['text', '/api/posts']], [], []],
    'api_posts_item_get' => [['id'], ['_controller' => 'App\\Controller\\PostController::item'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/posts']], [], []],
    'api_posts_collection_post' => [[], ['_controller' => 'App\\Controller\\PostController::post'], [], [['text', '/api/posts']], [], []],
    'api_posts_item_put' => [['id'], ['_controller' => 'App\\Controller\\PostController::put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/posts']], [], []],
    'api_posts_item_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/posts']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
