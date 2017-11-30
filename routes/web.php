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

Route::get('/', 'PageController@welcome');

Route::get('about', 'MainController@aboutus' );

//services page
Route::get('services', 'MainController@services' );

// News
Route::get('news', 'ArticleController@index');
Route::get('news/{slug}', 'ArticleController@show');
Route::get('news/category/{slug}', 'ArticleController@category');

//network page
Route::get('branches', 'MainController@branches' );
//quote page

//road transport page
Route::get('road-transport', 'MainController@roadTransport' );
//air freight page
Route::get('air-freight', 'MainController@airFreight' );
// shipping  page
Route::get('shipping', 'MainController@shipping' );
//packaging page
Route::get('packaging-distribution', 'MainController@packaging' );
//road transport page
Route::get('storage', 'MainController@storage' );

Route::get('mysitemap', 'SiteMapController@index');

// Newsletter
Route::post('subscription', 'NewsletterController@store');
// Quote
Route::resource('quotes', 'QuoteController');
// Contact
Route::resource('contacts', 'ContactController', ['only' => ['store']]);

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
    CRUD::resource('slide', 'SlideCrudController');
    CRUD::resource('quote', 'QuoteCrudController');
    CRUD::resource('comment', 'CommentCrudController');
    CRUD::resource('contact', 'ContactCrudController');
    CRUD::resource('newsletter', 'NewsletterCrudController');
    CRUD::resource('testmonial', 'TestmonialCrudController');
});

Route::get('events', ['uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@index']);
Route::get('events/{event}/{subs?}', ['as' => 'view-event', 'uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@view'])
    ->where(['event' => '^((?!admin).)*$', 'subs' => '.*']);

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

Route::get('/home', 'HomeController@index')->name('home');
