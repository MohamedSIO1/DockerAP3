<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // $matchHost
    [ // $staticRoutes
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\API\\LoginAPIController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/categories-products' => [[['_route' => 'api_categories_products', '_controller' => 'App\\Controller\\API\\ProductAPIController::categoriesProducts'], null, null, null, false, false, null]],
        '/api/product/ref' => [[['_route' => 'api_product_ref', '_controller' => 'App\\Controller\\API\\ProductAPIController::findProductByRef'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'app_client_cart', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CartController::viewCart'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/mon-panier/ajout-produit-panier' => [[['_route' => 'app_client_add_product_cart', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CartController::addProductCart'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/mon-panier/passer-commande/livraison' => [[['_route' => 'app_client_delivery_choice', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CartController::deliveryChoice'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/mon-panier/passer-commande' => [[['_route' => 'app_client_place_order', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CartController::placeOrder'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/c' => [[['_route' => 'app_client_categories', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CategoryController::viewAllCategories'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_client_home', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\HomeController::home'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null],
            [['_route' => 'app_logistics_home', 'host' => 'logistique.localhost', '_controller' => 'App\\Controller\\Logistics\\HomeController::home'], '{^(?P<host>logistique.localhost)$}sDiu', null, null, false, false, null],
        ],
        '/profil' => [
            [['_route' => 'app_client_profil', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\ProfilController::profil'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null],
            [['_route' => 'app_logistics_account', '_controller' => 'App\\Controller\\Logistics\\AccountController::index'], null, null, null, false, false, null],
        ],
        '/profil/mes-commandes' => [[['_route' => 'app_client_my_orders', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\ProfilController::getOrders'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_client_register', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\RegistrationController::register'], '{^(?P<host>www.localhost)$}sDiu', null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_logistics_dashboard', 'host' => 'logistique.localhost', '_controller' => 'App\\Controller\\Logistics\\DashboardController::index'], '{^(?P<host>logistique.localhost)$}sDiu', null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
            .'|(?:(?:[^./]*+\\.)++)(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:65)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:100)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:131)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:170)'
                        .'|errors/([^/]++)(?'
                            .'|(*:196)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:234)'
                        .')'
                        .'|stores(?'
                            .'|(?:\\.([^/]++))?(*:267)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:301)'
                        .')'
                    .')'
                .')'
            .')|(?i:(www.localhost))\\.(?'
                .'|/c/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)(*:373)'
                .'|/p(?'
                    .'|/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)(*:419)'
                    .'|rofil/commande/([^/]++)(?'
                        .'|(*:453)'
                        .'|/pdf(*:465)'
                    .')'
                .')'
            .')|(?i:(logistique.localhost))\\.(?'
                .'|/dashboard/view/([^/]++)(*:532)'
            .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        65 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        131 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        170 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        196 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        234 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        267 => [[['_route' => '_api_/stores{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => '_api_/stores{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => '_api_/stores/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => '_api_/stores/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'app_client_category', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\CategoryController::viewCategory'], ['host', 'slug'], null, null, false, true, null]],
        419 => [[['_route' => 'app_client_product', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\ProductController::viewProduct'], ['host', 'slug'], null, null, false, true, null]],
        453 => [[['_route' => 'app_client_my_order', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\ProfilController::getOrder'], ['host', 'id'], null, null, false, true, null]],
        465 => [[['_route' => 'app_client_my_confirm_order', 'host' => 'www.localhost', '_controller' => 'App\\Controller\\Client\\ProfilController::getConfirmOrder'], ['host', 'id'], null, null, false, false, null]],
        532 => [
            [['_route' => 'app_logistics_product', 'host' => 'logistique.localhost', '_controller' => 'App\\Controller\\Logistics\\ProductController::index'], ['host', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
