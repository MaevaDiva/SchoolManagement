<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/anneepedagogique' => [[['_route' => 'app_anneepedagogique_index', '_controller' => 'App\\Controller\\AnneepedagogiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/anneepedagogique/new' => [[['_route' => 'app_anneepedagogique_new', '_controller' => 'App\\Controller\\AnneepedagogiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eleve' => [[['_route' => 'app_eleve_index', '_controller' => 'App\\Controller\\EleveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/eleve/new' => [[['_route' => 'app_eleve_new', '_controller' => 'App\\Controller\\EleveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/anneepedagogique/([^/]++)(?'
                    .'|(*:36)'
                    .'|/edit(*:48)'
                    .'|(*:55)'
                .')'
                .'|/eleve/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:140)'
                    .'|wdt/([^/]++)(*:160)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:206)'
                            .'|router(*:220)'
                            .'|exception(?'
                                .'|(*:240)'
                                .'|\\.css(*:253)'
                            .')'
                        .')'
                        .'|(*:263)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_anneepedagogique_show', '_controller' => 'App\\Controller\\AnneepedagogiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_anneepedagogique_edit', '_controller' => 'App\\Controller\\AnneepedagogiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_anneepedagogique_delete', '_controller' => 'App\\Controller\\AnneepedagogiqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_eleve_show', '_controller' => 'App\\Controller\\EleveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_eleve_edit', '_controller' => 'App\\Controller\\EleveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        140 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        160 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        220 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        240 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        253 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        263 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
