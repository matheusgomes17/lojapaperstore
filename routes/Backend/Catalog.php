<?php

/**
 * All route names are prefixed with 'admin.catalog'.
 */
Route::group([
    'prefix'     => 'catalog',
    'as'         => 'catalog.',
    'namespace'  => 'Catalog',
], function () {

    /*
     * Product Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-products',
    ], function () {
        Route::group(['namespace' => 'Product'], function () {
            /*
             * For DataTables
             */
            Route::post('product/get', 'ProductTableController')->name('product.get');

            /*
             * Product Status'
             */
            Route::get('product/deactivated', 'ProductStatusController@getDeactivated')->name('product.deactivated');
            Route::get('product/deleted', 'ProductStatusController@getDeleted')->name('product.deleted');

            /*
             * Product CRUD
             */
            Route::resource('product', 'ProductController');

            /*
             * Product Status
             */
            Route::get('product/{product}/mark/{status}', 'ProductStatusController@mark')->name('product.mark')->where(['status' => '[0,1]']);

            /*
             * Deleted Product
             */
            Route::group(['prefix' => 'product/{deletedProduct}'], function () {
                Route::get('delete', 'ProductStatusController@delete')->name('product.delete-permanently');
                Route::get('restore', 'ProductStatusController@restore')->name('product.restore');
            });
        });
    });

    /*
     * Category Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-categories',
    ], function () {
        Route::group(['namespace' => 'Category'], function () {
            Route::resource('category', 'CategoryController', ['except' => ['show']]);

            //For DataTables
            Route::post('category/get', 'CategoryTableController')->name('category.get');
        });
    });

    /*
     * Budget Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-products',
    ], function () {
        Route::group(['namespace' => 'Budget'], function () {
            Route::resource('budget', 'BudgetController', ['except' => ['show']]);

            Route::get('budget/answer', 'BudgetAnswerController@index')->name('budget.answer.index');
            Route::get('budget/{id}/answer', 'BudgetAnswerController@create')->name('budget.answer.create');
            Route::post('budget/{id}/answer', 'BudgetAnswerController@store')->name('budget.answer.store');
            Route::get('budget/{id}/answer/{answerId}', 'BudgetAnswerController@show')->name('budget.answer.show');
            Route::post('budget/answer/get', 'BudgetAnswerTableController')->name('budget.answer.get');

            //For DataTables
            Route::post('budget/get', 'BudgetTableController')->name('budget.get');
        });
    });
});
