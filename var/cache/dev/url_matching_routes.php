<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/posts' => [
            [['_route' => 'api_posts_collection_get', '_controller' => 'App\\Controller\\PostController::collection'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_posts_collection_post', '_controller' => 'App\\Controller\\PostController::post'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/posts/([^/]++)(?'
                    .'|(*:29)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:65)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [
            [['_route' => 'api_posts_item_get', '_controller' => 'App\\Controller\\PostController::item'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_posts_item_put', '_controller' => 'App\\Controller\\PostController::put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_posts_item_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        65 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
