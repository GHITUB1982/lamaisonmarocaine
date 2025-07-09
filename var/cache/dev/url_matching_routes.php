<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/carrier' => [[['_route' => 'admin_carrier_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carrier/new' => [[['_route' => 'admin_carrier_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/carrier/batch-delete' => [[['_route' => 'admin_carrier_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/carrier/autocomplete' => [[['_route' => 'admin_carrier_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carrier/render-filters' => [[['_route' => 'admin_carrier_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category/batch-delete' => [[['_route' => 'admin_category_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category/autocomplete' => [[['_route' => 'admin_category_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/render-filters' => [[['_route' => 'admin_category_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order2' => [[['_route' => 'admin_order2_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order2/new' => [[['_route' => 'admin_order2_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/order2/batch-delete' => [[['_route' => 'admin_order2_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/order2/autocomplete' => [[['_route' => 'admin_order2_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order2/render-filters' => [[['_route' => 'admin_order2_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order' => [[['_route' => 'admin_order_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order/new' => [[['_route' => 'admin_order_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/order/batch-delete' => [[['_route' => 'admin_order_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/order/autocomplete' => [[['_route' => 'admin_order_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order/render-filters' => [[['_route' => 'admin_order_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/batch-delete' => [[['_route' => 'admin_product_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/autocomplete' => [[['_route' => 'admin_product_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/render-filters' => [[['_route' => 'admin_product_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account/addresses' => [[['_route' => 'app_address', '_controller' => 'App\\Controller\\Account\\AddressController::index'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\Account\\HomeController::index'], null, null, null, false, false, null]],
        '/account/edit' => [[['_route' => 'app_account_edit', '_controller' => 'App\\Controller\\Account\\PasswordController::edit'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/command' => [[['_route' => 'app_command', '_controller' => 'App\\Controller\\CommandController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/commande/livraison' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/summary' => [[['_route' => 'app_order_summary', '_controller' => 'App\\Controller\\OrderController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|ca(?'
                            .'|rrier/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:50)'
                                    .'|delete(*:63)'
                                .')'
                                .'|(*:71)'
                            .')'
                            .'|tegory/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:105)'
                                    .'|delete(*:119)'
                                .')'
                                .'|(*:128)'
                            .')'
                        .')'
                        .'|order(?'
                            .'|2/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:167)'
                                    .'|delete(*:181)'
                                .')'
                                .'|(*:190)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:219)'
                                    .'|delete(*:233)'
                                .')'
                                .'|(*:242)'
                            .')'
                        .')'
                        .'|product/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:279)'
                                .'|delete(*:293)'
                            .')'
                            .'|(*:302)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:335)'
                                .'|delete(*:349)'
                            .')'
                            .'|(*:358)'
                        .')'
                    .')'
                    .'|ccount/addresses/(?'
                        .'|ajouter(?:/([^/]++))?(*:409)'
                        .'|delete/([^/]++)(*:432)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:473)'
                    .'|wdt/([^/]++)(*:493)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:535)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:572)'
                                .'|router(*:586)'
                                .'|exception(?'
                                    .'|(*:606)'
                                    .'|\\.css(*:619)'
                                .')'
                            .')'
                            .'|(*:629)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:667)'
                            .'|decrease/([^/]++)(*:692)'
                        .')'
                        .'|tegorie/([^/]++)(*:717)'
                    .')'
                    .'|ommande/paiement/([^/]++)(*:751)'
                .')'
                .'|/produit/([^/]++)(*:777)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'admin_carrier_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        63 => [[['_route' => 'admin_carrier_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        71 => [[['_route' => 'admin_carrier_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarrierCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarrierCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'admin_category_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        119 => [[['_route' => 'admin_category_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        128 => [[['_route' => 'admin_category_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        167 => [[['_route' => 'admin_order2_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        181 => [[['_route' => 'admin_order2_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        190 => [[['_route' => 'admin_order2_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\Order2CrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\Order2CrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'admin_order_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        233 => [[['_route' => 'admin_order_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        242 => [[['_route' => 'admin_order_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OrderCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'admin_product_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        293 => [[['_route' => 'admin_product_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        302 => [[['_route' => 'admin_product_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        349 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        358 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        409 => [[['_route' => 'app_account_address_form', 'id' => null, '_controller' => 'App\\Controller\\Account\\AddressController::Form'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'app_account_address_delete', '_controller' => 'App\\Controller\\Account\\AddressController::delete'], ['id'], null, null, false, true, null]],
        473 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        493 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        535 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        572 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        586 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        606 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        619 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        629 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        667 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        692 => [[['_route' => 'app_cart_decrease', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        717 => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\CategoryController::Show'], ['slug'], null, null, false, true, null]],
        751 => [[['_route' => 'app_payement', '_controller' => 'App\\Controller\\PayementController::index'], ['id_order'], null, null, false, true, null]],
        777 => [
            [['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
