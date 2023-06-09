<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_anneepedagogique_index' => [[], ['_controller' => 'App\\Controller\\AnneepedagogiqueController::index'], [], [['text', '/anneepedagogique/']], [], [], []],
    'app_anneepedagogique_new' => [[], ['_controller' => 'App\\Controller\\AnneepedagogiqueController::new'], [], [['text', '/anneepedagogique/new']], [], [], []],
    'app_anneepedagogique_show' => [['id'], ['_controller' => 'App\\Controller\\AnneepedagogiqueController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/anneepedagogique']], [], [], []],
    'app_anneepedagogique_edit' => [['id'], ['_controller' => 'App\\Controller\\AnneepedagogiqueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/anneepedagogique']], [], [], []],
    'app_anneepedagogique_delete' => [['id'], ['_controller' => 'App\\Controller\\AnneepedagogiqueController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/anneepedagogique']], [], [], []],
    'app_eleve_index' => [[], ['_controller' => 'App\\Controller\\EleveController::index'], [], [['text', '/eleve/']], [], [], []],
    'app_eleve_new' => [[], ['_controller' => 'App\\Controller\\EleveController::new'], [], [['text', '/eleve/new']], [], [], []],
    'app_eleve_show' => [['id'], ['_controller' => 'App\\Controller\\EleveController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], [], []],
    'app_eleve_edit' => [['id'], ['_controller' => 'App\\Controller\\EleveController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], [], []],
    'app_eleve_delete' => [['id'], ['_controller' => 'App\\Controller\\EleveController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
