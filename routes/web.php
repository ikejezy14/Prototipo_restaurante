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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@getUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de clientes

$router->get('cliente',[
    'as' =>'cliente.index', 'uses'=>'ClientesController@index',
]);

$router->get('cliente/create', [
    'as' => 'cliente.create', 'uses'=>'ClientesController@create',
]);

$router->post('cliente', [
    'as' => 'cliente.store', 'uses'=>'ClientesController@store',
]);

$router->get('cliente/{id}/edit', [
    'as' => 'cliente.edit', 'uses'=>'ClientesController@edit',
]);

$router->patch('cliente/{id}', [
    'as' => 'cliente.update', 'uses'=>'ClientesController@update',
]);

$router->get('cliente/{id}/delete', [
    'as' => 'cliente.delete', 'uses'=>'ClientesController@delete',
]);

//rutas de locales

$router->get('local',[
    'as' =>'local.index', 'uses'=>'LocalesController@index',
]);

$router->get('local/create', [
    'as' => 'local.create', 'uses'=>'LocalesController@create',
]);

$router->post('local', [
    'as' => 'local.store', 'uses'=>'LocalesController@store',
]);

$router->get('local/{id}/edit', [
    'as' => 'local.edit', 'uses'=>'LocalesController@edit',
]);

$router->patch('local/{id}', [
    'as' => 'local.update', 'uses'=>'LocalesController@update',
]);

$router->get('local/{id}/delete', [
    'as' => 'local.delete', 'uses'=>'LocalesController@delete',
]);

//rutas de proveedores

$router->get('proveedor',[
    'as' =>'proveedor.index', 'uses'=>'ProveedoresController@index',
]);

$router->get('proveedor/create', [
    'as' => 'proveedor.create', 'uses'=>'ProveedoresController@create',
]);

$router->post('proveedor', [
    'as' => 'proveedor.store', 'uses'=>'ProveedoresController@store',
]);

$router->get('proveedor/{id}/edit', [
    'as' => 'proveedor.edit', 'uses'=>'ProveedoresController@edit',
]);

$router->patch('proveedor/{id}', [
    'as' => 'proveedor.update', 'uses'=>'ProveedoresController@update',
]);

$router->get('proveedor/{id}/delete', [
    'as' => 'proveedor.delete', 'uses'=>'ProveedoresController@delete',
]);

//rutas de categorias

$router->get('categoria',[
    'as' =>'categoria.index', 'uses'=>'CategoriasController@index',
]);

$router->get('categoria/create', [
    'as' => 'categoria.create', 'uses'=>'CategoriasController@create',
]);

$router->post('categoria', [
    'as' => 'categoria.store', 'uses'=>'CategoriasController@store',
]);

$router->get('categoria/{id}/edit', [
    'as' => 'categoria.edit', 'uses'=>'CategoriasController@edit',
]);

$router->patch('categoria/{id}', [
    'as' => 'categoria.update', 'uses'=>'CategoriasController@update',
]);

$router->get('categoria/{id}/delete', [
    'as' => 'categoria.delete', 'uses'=>'CategoriasController@delete',
]);

//rutas de productos

$router->get('producto',[
    'as' =>'producto.index', 'uses'=>'ProductosController@index',
]);

$router->get('producto/create', [
    'as' => 'producto.create', 'uses'=>'ProductosController@create',
]);

$router->post('producto', [
    'as' => 'producto.store', 'uses'=>'ProductosController@store',
]);

$router->get('producto/{id}/edit', [
    'as' => 'producto.edit', 'uses'=>'ProductosController@edit',
]);

$router->patch('producto/{id}', [
    'as' => 'producto.update', 'uses'=>'ProductosController@update',
]);

$router->get('producto/{id}/delete', [
    'as' => 'producto.delete', 'uses'=>'ProductosController@delete',
]);

//rutas de empleados

$router->get('empleado',[
    'as' =>'empleado.index', 'uses'=>'EmpleadosController@index',
]);

$router->get('empleado/create', [
    'as' => 'empleado.create', 'uses'=>'EmpleadosController@create',
]);

$router->post('empleado', [
    'as' => 'empleado.store', 'uses'=>'EmpleadosController@store',
]);

$router->get('empleado/{id}/edit', [
    'as' => 'empleado.edit', 'uses'=>'EmpleadosController@edit',
]);

$router->patch('empleado/{id}', [
    'as' => 'empleado.update', 'uses'=>'EmpleadosController@update',
]);

$router->get('empleado/{id}/delete', [
    'as' => 'empleado.delete', 'uses'=>'EmpleadosController@delete',
]);

//rutas de pedido

$router->get('pedido',[
    'as' =>'pedido.index', 'uses'=>'PedidosController@index',
]);

$router->get('pedido/create', [
    'as' => 'pedido.create', 'uses'=>'PedidosController@create',
]);

$router->post('pedido', [
    'as' => 'pedido.store', 'uses'=>'PedidosController@store',
]);

/*$router->get('pedido/{id}/edit', [
    'as' => 'pedido.edit', 'uses'=>'PedidosController@edit',
]);

$router->patch('pedido/{id}', [
    'as' => 'pedido.update', 'uses'=>'PedidosController@update',
]);*/

$router->get('pedido/{id}/delete', [
    'as' => 'pedido.delete', 'uses'=>'PedidosController@delete',
]);
/*
//rutas de pedidos_productos

$router->get('pedido_producto',[
    'as' =>'pedido_producto.index', 'uses'=>'Pedidos_productosController@index',
]);

$router->get('pedido_producto/create', [
    'as' => 'pedido_producto.create', 'uses'=>'Pedidos_productosController@create',
]);

$router->post('pedido_producto', [
    'as' => 'pedido_producto.store', 'uses'=>'Pedidos_productosController@store',
]);

$router->get('pedido_producto/{id}/edit', [
    'as' => 'pedido_producto.edit', 'uses'=>'Pedidos_productosController@edit',
]);

$router->patch('pedido_producto/{id}', [
    'as' => 'pedido_producto.update', 'uses'=>'Pedidos_productosController@update',
]);

$router->get('pedido_producto/{id}/delete', [
    'as' => 'pedido_producto.delete', 'uses'=>'Pedidos_productosController@delete',
]);