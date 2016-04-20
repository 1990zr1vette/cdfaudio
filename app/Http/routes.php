<?php
//Event::listen('illuminate.query', function($sql)
//{
	//echo $sql . PHP_EOL;

   // dd([
   //     $query,  // prepared statement
    //    $params, // query params (? symbols will be replaced with)
   //     $time    // execution time
   // ]);
//});

// ********** ADMIN ********** //
Route::get('admin', 'AdminController@index');

Route::resource('admin/brands', 'BrandController');
Route::resource('admin/brands.products', 'BrandProductController');
Route::resource('admin/brands.products', 'BrandProductController');
Route::resource('admin/brands.products', 'BrandProductController');
Route::resource('admin/brands.products.inventoryitems', 'InventoryItemController');

Route::resource('admin/products', 'ProductController');
Route::resource('admin/products.producttypes', 'ProductTypeController');

Route::resource('admin/announcements', 'AnnouncementController');
Route::resource('admin/events', 'EventController');
Route::resource('admin/editorials', 'EditorialController');

Route::resource('admin/adminusers', 'AdminUserController');

Route::resource('admin/artists', 'ArtistController');
Route::resource('admin/boutiques', 'BoutiqueController');
Route::resource('admin/professionals', 'ProfessionalController');
Route::resource('admin/restaurants', 'RestaurantController');
Route::resource('admin/testimonials', 'TestimonialController');

Route::resource('admin/team', 'TeamController');

Route::resource('admin/culture', 'CultureController');

Route::post('admin/announcements/setcurrent', 'AnnouncementController@setcurrent');
// ********** ADMIN ********** //

// ********** HOME ********** //
Route::get('/', 'HomeController@home');
Route::get(HOME, 'HomeController@home');
Route::get(HOME_FR, 'HomeController@acceuil');
// ********** HOME ********** //

// ********** BRANDS ********** //
Route::get(BRANDS, 'BrandController@brands');
Route::get(BRANDS_FR, 'BrandController@marques');

Route::get(BRANDS . '/{brand}/{id}', 'BrandController@brand');
Route::get(BRANDS_FR . '/{brand}/{id}', 'BrandController@marque');

Route::get(BRANDS . '/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@brandproduct');
Route::get(BRANDS_FR . '/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@marqueproduit');
// ********** BRANDS ********** //

// ********** PRODUCTS ********** //
Route::get(PRODUCTS . '/{product}/{product_id}', 'InventoryItemController@products');
Route::get(PRODUCTS_FR . '/{product}/{product_id}', 'InventoryItemController@produits');

Route::get(PRODUCTS . '/{product}/{product_id}/brand/{brand}/{brand_id}', 'InventoryItemController@products');
Route::get(PRODUCTS_FR . '/{product}/{product_id}/marque/{brand}/{brand_id}', 'InventoryItemController@produits');

Route::get(PRODUCTS . '/{product}/{type}/{product_id}/{type_id}', 'InventoryItemController@typesen');
Route::get(PRODUCTS_FR . '/{product}/{type}/{product_id}/{type_id}', 'InventoryItemController@typesfr');

Route::get(PRODUCTS . '/{product}/{type}/{product_id}/{type_id}/brand/{brand}/{brand_id}', 'InventoryItemController@typesen');
Route::get(PRODUCTS_FR . '/{product}/{type}/{product_id}/{type_id}/marque/{brand}/{brand_id}', 'InventoryItemController@typesfr');
// ********** PRODUCTS ********** //

// ****************************** ABOUT US ****************************** //
Route::get(ABOUTUSURL, 'AboutUsController@aboutus');
Route::get(ABOUTUSURL_FR, 'AboutUsController@aboutusfr');

Route::get(CULTUREURL, 'AboutUsController@culture');
Route::get(CULTUREURL_FR, 'AboutUsController@culturefr');

Route::get(EXPERIENCEURL, 'AboutUsController@experience');
Route::get(EXPERIENCEURL_FR, 'AboutUsController@experiencefr');

Route::get(STUDIOSRERVICESURL, 'AboutUsController@services');
Route::get(STUDIOSRERVICESURL_FR, 'AboutUsController@servicesfr');

Route::get(TEAMURL, 'AboutUsController@team');
Route::get(TEAMURL_FR, 'AboutUsController@teamfr');
// ****************************** ABOUT US ****************************** //

// ********** ANNOUNCEMENTS ********** //
Route::get(ANNOUNCEMENTSURL, 'AnnouncementController@announcements');
Route::get(ANNOUNCEMENTSURL_FR, 'AnnouncementController@announcementsfr');
// ********** ANNOUNCEMENTS ********** //

// ********** EDITORIALS ********** //
Route::get(EDITORIALSURL, 'EditorialController@editorials');
Route::get(EDITORIALSURL_FR, 'EditorialController@editorialsfr');
// ********** EDITORIALS ********** //

// ********** EVENTS ********** //
Route::get(EVENTSURL, 'EventController@events');
Route::get(EVENTSURL_FR, 'EventController@eventsfr');
// ********** EVENTS ********** //

View::composer('layout.partials.header', function($view)
{
	$view->with('Products', \App\Models\Product::getProducts());
});

View::composer('layout.partials.footer', function($view)
{
	$view->with('Products', \App\Models\Product::getProducts());
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
