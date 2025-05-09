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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/jugadores' => [
            [['_route' => 'create_jugador', '_controller' => 'App\\Controller\\JugadorController::createJugador'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'jugador_list', '_controller' => 'App\\Controller\\JugadorController::createJugador'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/jugadores/login' => [[['_route' => 'login_jugador', '_controller' => 'App\\Controller\\JugadorController::loginJugador'], null, ['POST' => 0], null, false, false, null]],
        '/api/clubs' => [[['_route' => 'club_list', '_controller' => 'App\\Controller\\ClubController::createClub'], null, ['POST' => 0], null, false, false, null]],
        '/api/clubs/login' => [[['_route' => 'login_club', '_controller' => 'App\\Controller\\ClubController::loginClub'], null, ['POST' => 0], null, false, false, null]],
        '/api/admins/login' => [[['_route' => 'login_admin', '_controller' => 'App\\Controller\\AdminController::loginAdmin'], null, ['POST' => 0], null, false, false, null]],
        '/api/ofertas' => [
            [['_route' => 'crear_oferta', '_controller' => 'App\\Controller\\Api\\OfertaController::crearOferta'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'listar_ofertas', '_controller' => 'App\\Controller\\Api\\OfertaController::listarOfertas'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/ofertas/favorito' => [
            [['_route' => 'agregar_oferta_favorita', '_controller' => 'App\\Controller\\Api\\OfertaController::agregarFavorito'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'quitar_oferta_favorita', '_controller' => 'App\\Controller\\Api\\OfertaController::quitarFavorito'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/api/ofertas/categorias' => [[['_route' => 'obtener_categorias', '_controller' => 'App\\Controller\\Api\\OfertaController::obtenerCategorias'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors/(\\d+)(*:65)'
                        .'|validation_errors/([^/]++)(*:98)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:134)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:165)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:207)'
                            .'|lubs/email/([^/]++)(?'
                                .'|(*:237)'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:276)'
                        .')'
                        .'|jugadores/(?'
                            .'|email/([^/]++)(?'
                                .'|(*:315)'
                            .')'
                            .'|([^/]++)(*:332)'
                        .')'
                        .'|ofertas/(?'
                            .'|(\\d+)(?'
                                .'|(*:360)'
                            .')'
                            .'|club/(\\d+)(*:379)'
                            .'|favoritos/(\\d+)(*:402)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:444)'
                    .'|wdt/([^/]++)(*:464)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:506)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:543)'
                                .'|router(*:557)'
                                .'|exception(?'
                                    .'|(*:577)'
                                    .'|\\.css(*:590)'
                                .')'
                            .')'
                            .'|(*:600)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        65 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        98 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        134 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        165 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        207 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        237 => [
            [['_route' => 'club_show', '_controller' => 'App\\Controller\\ClubController::getClubByEmail'], ['email'], ['GET' => 0], null, false, true, null],
            [['_route' => 'club_update_by_email', '_controller' => 'App\\Controller\\ClubController::updateClubByEmail'], ['email'], ['PUT' => 0], null, false, true, null],
        ],
        276 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        315 => [
            [['_route' => 'get_jugador_by_email', '_controller' => 'App\\Controller\\JugadorController::getJugadorByEmail'], ['email'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_jugador_by_email', '_controller' => 'App\\Controller\\JugadorController::updateJugadorByEmail'], ['email'], ['PUT' => 0], null, false, true, null],
        ],
        332 => [[['_route' => 'jugador_show', '_controller' => 'App\\Controller\\JugadorController::getJugador'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [
            [['_route' => 'ver_oferta', '_controller' => 'App\\Controller\\Api\\OfertaController::verOferta'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'eliminar_oferta', '_controller' => 'App\\Controller\\Api\\OfertaController::eliminarOferta'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        379 => [[['_route' => 'ofertas_por_club', '_controller' => 'App\\Controller\\Api\\OfertaController::ofertasPorClub'], ['clubId'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'favoritos_por_jugador', '_controller' => 'App\\Controller\\Api\\OfertaController::favoritosPorJugador'], ['jugadorId'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        464 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        506 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        543 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        557 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        577 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        590 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        600 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
