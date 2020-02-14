<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/app' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, true, false, null]],
        '/app/add' => [[['_route' => 'app_add', '_controller' => 'App\\Controller\\AppController::add'], null, null, null, false, false, null]],
        '/app/edit' => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\AppController::edit'], null, null, null, false, false, null]],
        '/app/remove' => [[['_route' => 'app_remove', '_controller' => 'App\\Controller\\AppController::remove'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/equipo' => [
            [['_route' => 'equipo', '_controller' => 'App\\Controller\\EquipoController::index'], null, null, null, false, false, null],
            [['_route' => 'main_equipo', '_controller' => 'App\\Controller\\MainController::indexEquipo'], null, null, null, false, false, null],
        ],
        '/eventos' => [
            [['_route' => 'eventos', '_controller' => 'App\\Controller\\EventosController::index'], null, null, null, false, false, null],
            [['_route' => 'main_eventos', '_controller' => 'App\\Controller\\MainController::indexEventos'], null, null, null, false, false, null],
        ],
        '/grupo/usuario' => [[['_route' => 'grupo_usuario_index', '_controller' => 'App\\Controller\\GrupoUsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/grupo/usuario/new' => [[['_route' => 'grupo_usuario_new', '_controller' => 'App\\Controller\\GrupoUsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/grupos' => [[['_route' => 'grupos_index', '_controller' => 'App\\Controller\\GruposController::index'], null, ['GET' => 0], null, true, false, null]],
        '/grupos/new' => [[['_route' => 'grupos_new', '_controller' => 'App\\Controller\\GruposController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'main_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/usuarios' => [[['_route' => 'usuarios_index', '_controller' => 'App\\Controller\\UsuariosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuarios/new' => [[['_route' => 'usuarios_new', '_controller' => 'App\\Controller\\UsuariosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/grupo(?'
                    .'|/usuario/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:241)'
                        .'|/edit(*:254)'
                        .'|(*:262)'
                    .')'
                .')'
                .'|/usuarios/([^/]++)(?'
                    .'|(*:293)'
                    .'|/edit(*:306)'
                    .'|(*:314)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'grupo_usuario_show', '_controller' => 'App\\Controller\\GrupoUsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'grupo_usuario_edit', '_controller' => 'App\\Controller\\GrupoUsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'grupo_usuario_delete', '_controller' => 'App\\Controller\\GrupoUsuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        241 => [[['_route' => 'grupos_show', '_controller' => 'App\\Controller\\GruposController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'grupos_edit', '_controller' => 'App\\Controller\\GruposController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'grupos_delete', '_controller' => 'App\\Controller\\GruposController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'usuarios_show', '_controller' => 'App\\Controller\\UsuariosController::show'], ['dni'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'usuarios_edit', '_controller' => 'App\\Controller\\UsuariosController::edit'], ['dni'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [
            [['_route' => 'usuarios_delete', '_controller' => 'App\\Controller\\UsuariosController::delete'], ['dni'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
