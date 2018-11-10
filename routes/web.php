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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','WelcomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/products','ProductController@index');	//listado
Route::get('admin/products/create','ProductController@create');	//formulario
Route::post('admin/products','ProductController@store');		//registrar
Route::get('admin/products/{id}/edit','ProductController@edit');	//formulario edit
Route::post('admin/products/{id}/edit','ProductController@update');		//registrar
Route::delete('admin/products/{id}','ProductController@destroy');	//eliminar

Route::get('admin/categories','CategoryController@index');	//listado
Route::get('admin/categories/create','CategoryController@create');	//formulario
Route::post('admin/categories','CategoryController@store');		//registrar
Route::get('admin/categories/{id}/edit','CategoryController@edit');	//formulario edit
Route::post('admin/categories/{id}/edit','CategoryController@update');		//registrar
Route::delete('admin/categories/{id}','CategoryController@destroy');	//eliminar

Route::get('admin/providers','ProviderController@index');	//listado
Route::get('admin/providers/create','ProviderController@create');	//formulario
Route::post('admin/providers','ProviderController@store');		//registrar
Route::get('admin/providers/{id}/edit','ProviderController@edit');	//formulario edit
Route::post('admin/providers/{id}/edit','ProviderController@update');		//registrar
Route::delete('admin/providers/{id}','ProviderController@destroy');	//eliminar
//Detail Product
Route::post('admin/details/{id}/edit','DetailController@store');			//crea un producto-detalle
Route::delete('admin/details/{id}/{id_prod}','DetailController@destroy');	//elimina un producto-detalle
Route::get('details/{id}/list', 'DetailController@index');
//Operation Sale
Route::get('admin/sales','SaleController@index');			//muestra todas las ventas
Route::post('admin/sales/store','SaleController@store');		//registra una "factura"
Route::get('admin/sales/{id}/edit','SaleController@edit');	//Me envia a la factura para llenar de productos
Route::delete('admin/sales/{id}','SaleController@destroy');	//elimina una factura
//Operation Purchase
Route::get('admin/purchases','PurchaseController@index');
Route::post('admin/purchases/store','PurchaseController@store');		//registra una "compra"
Route::get('admin/purchases/{id}/edit','PurchaseController@edit');
//Operation Order
Route::get('customer/orders','OrderController@index');			//muestra todas las ordenes
Route::post('customer/orders/store','OrderController@store');	
Route::get('customer/orders/{id}/edit','OrderController@edit');		//registra una nueva orden
Route::delete('customer/orders/{id}','OrderController@destroy');	//elimina una pedido