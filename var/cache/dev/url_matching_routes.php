<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_home', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::home'], null, null, null, false, false, null]],
        '/admin/roomlisting' => [[['_route' => 'app_admin_roomlisting_index', '_controller' => 'App\\Controller\\Admin\\RoomListingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/roomlisting/new' => [[['_route' => 'app_admin_roomlisting_new', '_controller' => 'App\\Controller\\Admin\\RoomListingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_admin_login', '_controller' => 'App\\Controller\\Admin\\SecurityAdminController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_admin_logout', '_controller' => 'App\\Controller\\Admin\\SecurityAdminController::logout'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, true, false, null]],
        '/book' => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\BookController::book'], null, null, null, false, false, null]],
        '/book/now' => [[['_route' => 'app_book_now', '_controller' => 'App\\Controller\\BookNowController::index'], null, null, null, false, false, null]],
        '/booking/login' => [[['_route' => 'app_booking_login', '_controller' => 'App\\Controller\\BookingLoginController::index'], null, null, null, false, false, null]],
        '/bookings' => [[['_route' => 'app_bookings', '_controller' => 'App\\Controller\\BookingsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/landing' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\LandingController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_new', '_controller' => 'App\\Controller\\NewController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/rooms' => [[['_route' => 'app_rooms', '_controller' => 'App\\Controller\\RoomsController::rooms'], null, null, null, false, false, null]],
        '/rooms/studio-deluxe' => [[['_route' => 'app_room_studio_deluxe', '_controller' => 'App\\Controller\\RoomsController::studioDeluxe'], null, null, null, false, false, null]],
        '/rooms/executive-suite' => [[['_route' => 'app_room_executive_suite', '_controller' => 'App\\Controller\\RoomsController::executiveSuite'], null, null, null, false, false, null]],
        '/rooms/family-apartment' => [[['_route' => 'app_room_family_apartment', '_controller' => 'App\\Controller\\RoomsController::familyApartment'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'app_admin_profile_edit', '_controller' => 'App\\Controller\\Admin\\AdminProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/roomlisting/([^/]++)(?'
                    .'|(*:232)'
                    .'|/edit(*:245)'
                    .'|(*:253)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        232 => [[['_route' => 'app_admin_roomlisting_show', '_controller' => 'App\\Controller\\Admin\\RoomListingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_admin_roomlisting_edit', '_controller' => 'App\\Controller\\Admin\\RoomListingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [
            [['_route' => 'app_admin_roomlisting_delete', '_controller' => 'App\\Controller\\Admin\\RoomListingController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
