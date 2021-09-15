<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use GuzzleHttp\Psr7\Request;

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');



Route::get('admin', 'Admin\AdminLoginController@show_login_form')->name('admin.show_login_form');
Route::post('admin/ad-login', 'Admin\AdminLoginController@login')->name('admin.login');
Route::get('admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');



// admin routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
	Route::group(['middleware' => 'auth:admin'], function () {
		Route::get('/dashboard', 'BackendController@index')->name('home');


		Route::get('user', 'BackendController@user_index')->name('user_index');
		Route::get('user/create', 'BackendController@user_create')->name('user_create');
		Route::post('user', 'BackendController@user_store')->name('user_store');
		Route::get('user/{id}/edit', 'BackendController@user_edit')->name('user_edit');
		Route::put('user/{id}', 'BackendController@user_update')->name('user_update');
		Route::delete('user/{id}', 'BackendController@user_destroy')->name('user_destroy');




		Route::get('setting', 'SettingController@index')->name('setting_index');
		Route::post('setting', 'SettingController@update')->name('setting_update');

		Route::get('about-us', 'AboutUsController@index')->name('about_us_index');
		Route::post('about-us', 'AboutUsController@update')->name('about_us_update');

		Route::get('carosel', 'HomepageController@carosel_index')->name('carosel_index');
		Route::get('carosel/create', 'HomepageController@carosel_create')->name('carosel_create');
		Route::post('carosel', 'HomepageController@carosel_store')->name('carosel_store');
		Route::get('carosel/{id}/edit', 'HomepageController@carosel_edit')->name('carosel_edit');
		Route::put('carosel/{id}', 'HomepageController@carosel_update')->name('carosel_update');
		Route::delete('carosel/{id}', 'HomepageController@carosel_destroy')->name('carosel_destroy');

		Route::get('partner', 'HomepageController@partner_index')->name('partner_index');
		Route::get('partner/create', 'HomepageController@partner_create')->name('partner_create');
		Route::post('partner', 'HomepageController@partner_store')->name('partner_store');
		Route::get('partner/{id}/edit', 'HomepageController@partner_edit')->name('partner_edit');
		Route::put('partner/{id}', 'HomepageController@partner_update')->name('partner_update');
		Route::delete('partner/{id}', 'HomepageController@partner_destroy')->name('partner_destroy');

		Route::get('pages', 'PagesController@index')->name('pages_index');
		Route::get('pages/create', 'PagesController@create')->name('pages_create');
		Route::post('pages', 'PagesController@store')->name('pages_store');
		Route::get('pages/{id}/edit', 'PagesController@edit')->name('pages_edit');
		Route::put('pages/{id}', 'PagesController@update')->name('pages_update');
		Route::delete('pages/{id}', 'PagesController@destroy')->name('pages_delete');

		Route::resource('product-category', 'ProductCategoryController', [
			'except' => ['create', 'show']
		]);

		Route::resource('layout', 'LayoutController', [
			'except' => ['create', 'show']
		]);

		Route::resource('product-tag', 'ProductTagController', [
			'except' => ['create', 'show']
		]);

		Route::delete('/media-library/bulk-delete', 'MediaLibraryController@bulk_destroy')->name('media-library.bulk-delete');
		Route::resource('media-library', 'MediaLibraryController', [
			'except' => ['show', 'edit', 'update', 'destroy']
		]);

		Route::resource('product', 'ProductController');

		Route::get('cancel/{id}', 'OrderController@cancel')->name('order.cancel');
		Route::get('process/{id}', 'OrderController@process')->name('order.process');
		Route::get('ship/{id}', 'OrderController@ship')->name('order.ship');
		Route::get('storeinvoice/{id}', 'OrderController@invoice')->name('order.invoice');
		Route::get('download-invoice/{id}', 'OrderController@download_invoice')->name('order.download.invoice');
		Route::resource('order', 'OrderController')->except([
			'create', 'store', 'edit', 'update', 'destroy'
		]);



		Route::resource('shipment', 'ShipmentController')->except([
			'create', 'store', 'edit', 'update'
		]);

		Route::resource('invoice', 'InvoiceController')->except([
			'create', 'store', 'edit', 'update'
		]);
		
		
		Route::resource('advertisement', 'AdvertisementController');
	});
});





// customer route
Route::namespace('Customer')->prefix('customer')->name('customer.')->group(function () {
	Route::group(['middleware' => ['auth']], function () {

		Route::get('reset_password_without_token', 'ResetPasswordController@show_password_reset_form')->name('show_password_reset_form');
		Route::post('reset_password_without_token', 'ResetPasswordController@reset_password')->name('reset_password');

		Route::get('dashboard', 'CustomerboardController@index')->name('dashboard');


		Route::delete('wishlist/bulk-delete', 'WishlistController@bulkdel')->name('wishlist.bulkdel');

		Route::resource('wishlist', 'WishlistController');

		Route::resource('order', 'OrderController');
	});
});

/**
 * These controllers are type of controller that share its functions
 * with different types of users.
 * 
 */
Route::resource('review', 'ReviewController');


// frontend routes
Route::get('/', 'Frontend\FrontendController@index')->name('frontend_index');
Route::get('about-us', 'Frontend\FrontendController@about')->name('frontend.aboutUs');
Route::get('shop', 'Frontend\FrontendController@shop')->name('frontend.shop');
Route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('frontend.contactUs');
Route::get('product/{slug}', 'Frontend\FrontendController@product_single')->name('frontend.product_single');
Route::post('contact-us', 'Frontend\FrontendController@contactUs_store')->name('frontend.contactUs_store');
Route::get('pages/{slug}', 'Frontend\FrontendController@view_page')->name('frontend.view_page');

// route for cart
Route::get('cart/empty', 'Frontend\CartController@flush')->name('cart.flush');
Route::resource('cart', 'Frontend\CartController');

// route for compare
Route::get('compare', 'Customer\CompareController@index')->name('compare.index');
Route::get('add-to-compare/{id}', 'Customer\CompareController@store')->name('compare.store');
Route::delete('compare/{id}', 'Customer\CompareController@destroy')->name('compare.destroy');
Route::delete('forget-compare-session', 'Customer\CompareController@forget')->name('compare.forget');


// Route::get('checkout/empty', 'Frontend\CartController@flush')->name('cart.flush');
Route::resource('checkout', 'Frontend\CheckoutController');

// for category and search
Route::get('search', 'Frontend\SearchController@search')->name('frontend.search');
Route::get('filter', 'Frontend\SearchController@filter')->name('frontend.filter');
Route::get('category/{cat?}/{filter?}', 'Frontend\SearchController@show')->name('frontend.category.show');
Route::get('tag/{tag?}/{filter?}', 'Frontend\SearchController@tag')->name('frontend.tag.show');

// ajax requesting handling controller
Route::get('get_categories', 'JsonController@get_categories')->name('get_categories');