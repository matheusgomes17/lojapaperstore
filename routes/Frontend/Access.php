<?php

/**
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {

    /*
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LoginController@logout')->name('logout');

        //For when admin is logged in as user from backend
        Route::get('logout-as', 'LoginController@logoutAs')->name('logout-as');

        // Change Password Routes
        Route::patch('password/change', 'ChangePasswordController@changePassword')->name('password.change');
    });

    /*
     * These routes require no user to be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login');

        // Socialite Routes
        Route::get('login/{provider}', 'SocialLoginController@login')->name('social.login');

        // Registration Routes
        if (config('access.users.registration')) {
            Route::get('registrar', 'RegisterController@showRegistrationForm')->name('register');
            Route::post('registrar', 'RegisterController@register')->name('register');
        }

        // Confirm Account Routes
        Route::get('conta/confirma/{token}', 'ConfirmAccountController@confirm')->name('account.confirm');
        Route::get('conta/confirma/resend/{user}', 'ConfirmAccountController@sendConfirmationEmail')->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('senha/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email.reset');
        Route::post('senha/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        Route::get('senha/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
        Route::post('senha/reset', 'ResetPasswordController@reset')->name('password.reset');
    });
});
