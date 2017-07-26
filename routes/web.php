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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',					array('as' => 'home',				'uses' => 'HomeController@index' ));
Route::get('/product',			array('as' => 'product_details',	'uses' => 'ProductController@details' ));
Route::get('/product/list',		array('as' => 'product_list',		'uses' => 'ProductController@lists' ));

Route::get('/admin', 			array('as' => 'admin_login', 		'uses' => 'admin\LoginController@index'));
Route::post('/admin', 			array('as' => 'admin_login_submit', 'uses' => 'admin\LoginController@login'));
Route::get('/admin/logout', 	array('as' => 'admin_logout', 		'uses' => 'admin\LoginController@logout'));

Route::group(array('prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'admin'), function(){

	Route::get('/dashboard', array('as' => 'admin_dashboard', 'uses' => 'DashboardController@index'));

	Route::group(array('prefix' => 'country'),function(){
		Route::get('/', 				array('as' => 'country', 			'uses' => 'CountryController@index'));
		Route::get('/add',				array('as' => 'country_add', 		'uses' => 'CountryController@add'));
		Route::post('/add',				array('as' => 'country_store', 		'uses' => 'CountryController@store'));
		Route::get('/edit/{id}',		array('as' => 'country_edit', 		'uses' => 'CountryController@edit'));
		Route::post('/edit/{id}',		array('as' => 'country_update', 	'uses' => 'CountryController@update'));
		Route::get('/delete/{id}',		array('as' => 'country_delete', 	'uses' => 'CountryController@delete'));
	});

	Route::group(array('prefix' => 'state'), function(){
		Route::get('/',					array('as' => 'state', 				'uses' => 'StateController@index'));
		Route::get('/add',				array('as' => 'state_add', 			'uses' => 'StateController@add'));
		Route::post('/add',				array('as' => 'state_store', 		'uses' => 'StateController@store'));
		Route::get('/edit/{id}',		array('as' => 'state_edit', 		'uses' => 'StateController@edit'));
		Route::post('/edit/{id}',		array('as' => 'state_update', 		'uses' => 'StateController@update'));
		Route::get('/delete/{id}',		array('as' => 'state_delete', 		'uses' => 'StateController@delete'));
	});

	Route::group(array('prefix' => 'category'),function(){
		Route::get('/', 				array('as' => 'category', 			'uses' => 'CategoryController@index'));
		Route::get('/add', 				array('as' => 'category_add',		'uses' => 'CategoryController@add'));
		Route::post('/add', 			array('as' => 'category_store',		'uses' => 'CategoryController@store'));
		Route::get('/edit/{id}',		array('as' => 'category_edit', 		'uses' => 'CategoryController@edit'));
		Route::post('/edit/{id}',		array('as' => 'category_update', 	'uses' => 'CategoryController@update'));
		Route::get('/delete/{id}',		array('as' => 'category_delete', 	'uses' => 'CategoryController@delete'));
	});

	Route::group(array('prefix' => 'product'),function(){
		Route::get('/', 				array('as' => 'product', 			'uses' => 'ProductController@index'));
		Route::get('/add', 				array('as' => 'product_add',		'uses' => 'ProductController@add'));
		Route::post('/add', 			array('as' => 'product_store',		'uses' => 'ProductController@store'));
		Route::get('/edit/{id}',		array('as' => 'product_edit', 		'uses' => 'ProductController@edit'));
		Route::post('/edit/{id}',		array('as' => 'product_update', 	'uses' => 'ProductController@update'));
		Route::get('/delete/{id}',		array('as' => 'product_delete', 	'uses' => 'ProductController@delete'));
		Route::post('/getsubcategory',	array('as' => 'getsubcategory', 	'uses' => 'ProductController@getsubcategory'));
		Route::get('/attributes/{id}', 	array('as' => 'product_attributes', 'uses' => 'ProductController@attributes'));
		Route::post('/getattrvalue',	array('as' => 'getattrvalue', 		'uses' => 'ProductController@getAttributeValues'));
		Route::post('/attributes/{id}',	array('as' => 'storeattrvalue', 	'uses' => 'ProductController@storeAttributeValues'));
		Route::post('/getattrdetails',	array('as' => 'getattrdetails', 	'uses' => 'ProductController@get_attribute_details'));
		Route::post('/editattribute/{id}',	array('as' => 'editattribute',  'uses' => 'ProductController@updateAttributeValues'));
		Route::get('/deleteattribute/{id}',	array('as' => 'deleteattribute',  'uses' => 'ProductController@deleteattribute'));
	});


	Route::group(array('prefix' => 'banner'),function(){
		Route::get('/', 				array('as' => 'banner', 			'uses' => 'BannerController@index'));
		Route::get('/add', 				array('as' => 'banner_add',			'uses' => 'BannerController@add'));
		Route::post('/add', 			array('as' => 'banner_store',		'uses' => 'BannerController@store'));
		Route::get('/edit/{id}',		array('as' => 'banner_edit', 		'uses' => 'BannerController@edit'));
		Route::post('/edit/{id}',		array('as' => 'banner_update', 		'uses' => 'BannerController@update'));
		Route::get('/delete/{id}',		array('as' => 'banner_delete', 		'uses' => 'BannerController@delete'));
	});


	Route::group(array('prefix' => 'sitesetting'),function(){
		Route::get('/', 				array('as' => 'sitesetting', 		'uses' => 'SitesettingController@index'));
		Route::get('/add', 				array('as' => 'sitesetting_add',	'uses' => 'SitesettingController@add'));
		Route::post('/add', 			array('as' => 'sitesetting_store',	'uses' => 'SitesettingController@store'));
		Route::get('/edit/{id}',		array('as' => 'sitesetting_edit', 	'uses' => 'SitesettingController@edit'));
		Route::post('/edit/{id}',		array('as' => 'sitesetting_update', 'uses' => 'SitesettingController@update'));
	});

	Route::group(array('prefix' => 'cms'),function(){
		Route::get('/', 				array('as' => 'cms', 				'uses' => 'CmsController@index'));
		Route::get('/add', 				array('as' => 'cms_add',			'uses' => 'CmsController@add'));
		Route::post('/add', 			array('as' => 'cms_store',			'uses' => 'CmsController@store'));
		Route::get('/edit/{id}',		array('as' => 'cms_edit', 			'uses' => 'CmsController@edit'));
		Route::post('/edit/{id}',		array('as' => 'cms_update', 		'uses' => 'CmsController@update'));
	});

	Route::group(array('prefix' => 'emailtemplate'),function(){
		Route::get('/', 				array('as' => 'emailtemplate', 		'uses' => 'EmailTemplates@index'));
		Route::get('/add', 				array('as' => 'emailtemplate_add',	'uses' => 'EmailTemplates@add'));
		Route::post('/add', 			array('as' => 'emailtemplate_store','uses' => 'EmailTemplates@store'));
		Route::get('/edit/{id}',		array('as' => 'emailtemplate_edit', 'uses' => 'EmailTemplates@edit'));
		Route::post('/edit/{id}',		array('as' => 'emailtemplate_update','uses' => 'EmailTemplates@update'));
		Route::get('/delete/{id}',		array('as' => 'emailtemplate_delete','uses' => 'EmailTemplates@delete'));
	});

	Route::group(array('prefix' => 'subscriber'),function(){
		Route::get('/', 				array('as' => 'subscriber', 		'uses' => 'SubscriberController@index'));
		Route::get('/delete/{id}',		array('as' => 'subscriber_delete',	'uses' => 'SubscriberController@delete'));
		Route::get('/status/{id}/{status}',	array('as' => 'subscriber_status',	'uses' => 'SubscriberController@status'));
		Route::get('/send',				array('as' => 'send_newsletter',	'uses' => 'SubscriberController@sendnewsletter'));
		Route::post('/send',			array('as' => 'newsletter_send',	'uses' => 'SubscriberController@send'));
	});

	Route::group(array('prefix' => 'contactus'),function(){
		Route::get('/', 				array('as' => 'contactus', 			'uses' => 'ContactUsController@index'));
		Route::get('/delete/{id}',		array('as' => 'contactus_delete',	'uses' => 'ContactUsController@delete'));
		Route::get('/reply/{id}',		array('as' => 'contactus_reply',	'uses' => 'ContactUsController@reply'));
		Route::post('/reply/{id}',		array('as' => 'reply_contactus',	'uses' => 'ContactUsController@reply_submit'));
	});

	Route::group(array('prefix' => 'attribute'),function(){
		Route::get('/', 				array('as' => 'attribute', 			'uses' => 'AttributeController@index'));
		Route::get('/add',				array('as' => 'attribute_add', 		'uses' => 'AttributeController@add'));
		Route::post('/add',				array('as' => 'attribute_store', 	'uses' => 'AttributeController@store'));
		Route::get('/edit/{id}',		array('as' => 'attribute_edit', 	'uses' => 'AttributeController@edit'));
		Route::post('/edit/{id}',		array('as' => 'attribute_update', 	'uses' => 'AttributeController@update'));
		Route::get('/delete/{id}',		array('as' => 'attribute_delete', 	'uses' => 'AttributeController@delete'));
	});

	Route::group(array('prefix' => 'attributevalue'),function(){
		Route::get('/', 				array('as' => 'attributevalue', 		'uses' => 'AttributeValueController@index'));
		Route::get('/add',				array('as' => 'attributevalue_add', 	'uses' => 'AttributeValueController@add'));
		Route::post('/add',				array('as' => 'attributevalue_store', 	'uses' => 'AttributeValueController@store'));
		Route::get('/edit/{id}',		array('as' => 'attributevalue_edit', 	'uses' => 'AttributeValueController@edit'));
		Route::post('/edit/{id}',		array('as' => 'attributevalue_update', 	'uses' => 'AttributeValueController@update'));
		Route::get('/delete/{id}',		array('as' => 'attributevalue_delete', 	'uses' => 'AttributeValueController@delete'));
	});

});