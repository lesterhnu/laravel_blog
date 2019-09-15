<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('articles/list', ArticleController::class);
    $router->resource('articles/tags', TagController::class);
    $router->resource('settings', SettingsController::class);
    $router->resource('categories', CategoryController::class);

});
