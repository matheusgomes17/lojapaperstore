<?php

/**
 * All route names are prefixed with 'admin.general'.
 */
Route::group([
    'prefix'     => 'general',
    'as'         => 'general.',
    'namespace'  => 'General',
], function () {

    /*
     * Slider Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-general',
    ], function () {
        Route::group(['namespace' => 'Slider'], function () {
            /*
             * For DataTables
             */
            Route::post('slider/get', 'SliderTableController')->name('slider.get');

            /*
             * Slider Status'
             */
            Route::get('slider/deactivated', 'SliderStatusController@getDeactivated')->name('slider.deactivated');
            Route::get('slider/deleted', 'SliderStatusController@getDeleted')->name('slider.deleted');

            /*
             * Slider CRUD
             */
            Route::resource('slider', 'SliderController');

            /*
             * Slider Status
             */
            Route::get('slider/{slider}/mark/{status}', 'SliderStatusController@mark')->name('slider.mark')->where(['status' => '[0,1]']);

            /*
             * Deleted Slider
             */
            Route::group(['prefix' => 'slider/{deletedSlider}'], function () {
                Route::get('delete', 'SliderStatusController@delete')->name('slider.delete-permanently');
                Route::get('restore', 'SliderStatusController@restore')->name('slider.restore');
            });
        });
    });

    /*
     * Contact Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-general',
    ], function () {
        Route::group(['namespace' => 'Contact'], function () {
            /*
             * For DataTables
             */
            Route::post('contact/get', 'ContactTableController')->name('contact.get');

            /*
             * Contact CRUD
             */
            Route::resource('contact', 'ContactController', ['only' => 'index']);

            /*
             * Answer Management
             */
            Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
                Route::get('answer', 'AnswerController@index')->name('answer.index');
                Route::get('{id}/answer', 'AnswerController@create')->name('answer.create');
                Route::post('{id}/answer', 'AnswerController@store')->name('answer.store');
                Route::get('{id}/preview', 'AnswerController@show')->name('answer.show');
                Route::post('answer/get', 'AnswerTableController')->name('answer.get');
            });
        });
    });
});
