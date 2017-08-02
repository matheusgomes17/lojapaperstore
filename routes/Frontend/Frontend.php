<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('produto/{id}', 'FrontendController@product')->name('product')->where('id', '[0-9]+');
Route::get('categoria/{id}', 'FrontendController@category')->name('category')->where('id', '[0-9]+');
Route::get('pesquisa', 'FrontendController@search')->name('search');
Route::get('duvidas-frequentes', 'FrontendController@faq')->name('faq');
Route::get('politica-de-privacidade', 'FrontendController@privacy')->name('privacy');
Route::get('como-e-onde-aplicar', 'FrontendController@howToApply')->name('howtoapply');
Route::get('politica-de-entrega', 'FrontendController@delivery')->name('delivery');
Route::get('termos-de-uso', 'FrontendController@terms')->name('terms');
Route::get('sobre-nos', 'FrontendController@about')->name('about');

Route::group(['prefix' => 'contato'], function () {
    Route::get('/', 'ContactController@index')->name('contact.index');
    Route::get('/mensagem-enviada', 'ContactController@created')->name('contact.created');
    Route::post('/', 'ContactController@store')->name('contact.store');
});

Route::group(['prefix' => 'carrinho', 'namespace' => 'Cart'], function () {
    Route::get('/', 'CartController@index')->name('cart');
    Route::get('adiciona/{id}', 'CartController@store')->name('cart.add');
    Route::get('remove/{id}', 'CartController@destroy')->name('cart.destroy');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('checkout', 'CheckoutController@store')->name('cart.checkout');
        Route::get('orcamento/{id}', 'CheckoutController@show')->name('cart.checkout.view');
        Route::get('orcamento/{id}/resposta', 'CheckoutController@done')->name('cart.checkout.done');
    });
});
 
/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('minha-conta', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('perfil/atualizar', 'ProfileController@update')->name('profile.update');

        /*
         * Budget Specific
         */
        Route::get('orcamento/{id}', 'BudgetController@index')->name('budget');
    });
});
