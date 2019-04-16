<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'AuctionController@index',
    'as' => 'index'
]);

Auth::routes();

Route::post('/customer/login', [
    'uses' => 'Auth\LoginController@customerLogin',
    'as' => 'customer.login'
]);

Route::post('register/customer', [
    'uses' => 'Auth\RegisterController@createCustomer',
    'as' => 'customer.create'
]);

Route::get('/item/{id}', [
    'uses' => 'AuctionController@item_single',
    'as' => 'item.single'
]);

Route::get('/items', [
    'uses' => 'AuctionController@items_display',
    'as' => 'items'
]);


############################# ADMIN ################################################

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'admin'], function() {

        Route::resource('categories', 'CategoriesController');

//        Route::resource('items', 'ProductsController');

        Route::resource('users', 'UsersController');

        Route::resource('customers', 'CustomersController');

        Route::get('/customers', [
            'uses' => 'AuctionController@customers',
            'as' => 'admin.customers'
        ]);

        Route::get('/items/approved', [
            'uses' => 'HomeController@items_approved',
            'as' => 'admin.items.approved'
        ]);

        Route::get('/items/unapproved', [
            'uses' => 'HomeController@items_unapproved',
            'as' => 'admin.items.unapproved'
        ]);

        Route::get('/items/approve/{id}', [
            'uses' => 'HomeController@approve_item',
            'as' => 'admin.items.approve'
        ]);

        Route::get('/item/bids/{id}', [
            'uses' => 'HomeController@item_bids',
            'as' => 'admin.item.bids'
        ]);

        Route::get('/reports', [
            'uses' => 'HomeController@reports',
            'as' => 'admin.reports'
        ]);

        Route::post('/reports/generate', [
            'uses' => 'HomeController@custom',
            'as' => 'admin.generate'
        ]);


    });

});


####################################### CUSTOMERS SIDE #######################################################


Route::group(['middleware' => ['auth:buyer']], function() {

    Route::get('/sell', [
        'uses' => 'AuctionController@sell',
        'as' => 'sell.index'
    ]);

    Route::get('/sell/item', [
        'uses' => 'AuctionController@add_item',
        'as' => 'sell.item.add'
    ]);

    Route::post('/sell/item/store', [
        'uses' => 'AuctionController@store_item',
        'as' => 'sell.item.store'
    ]);


    Route::post('/item/bid/store', [
        'uses' => 'AuctionController@store_bid',
        'as' => 'item.bid.store'
    ]);

    Route::get('/item/bids/{id}', [
        'uses' => 'AuctionController@item_bids',
        'as' => 'item.bids'
    ]);

    Route::get('/item/bids/status/{item}/{bid}', [
        'uses' => 'AuctionController@bid_accept',
        'as' => 'item.accept'
    ]);


    Route::get('/mybids', [
        'uses' => 'AuctionController@my_bids',
        'as' => 'mybids'
    ]);


});