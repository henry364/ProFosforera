<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

use App\Http\Controllers\Admin\controllerproducto;

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

/*inicio*/

Route::get('/', function () {
    return view('welcome');
});

/*dashboard*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*genero*/

route::resource('genero','App\Http\Controllers\generocontroller');

/*cliente*/

route::resource('cliente','App\Http\Controllers\clientecontroller');

/*proveedor*/

route::resource('proveedor','App\Http\Controllers\proveedorcontroller');

/*marca*/

route::resource('marca','App\Http\Controllers\marcacontroller');

/*almacen*/

route::resource('almacen','App\Http\Controllers\almacencontroller');

/*tipo_producto*/

route::resource('tipo_producto','App\Http\Controllers\tipo_productocontroller');

/*producto*/

route::resource('producto','App\Http\Controllers\productocontroller');

/*rol*/

route::resource('rol','App\Http\Controllers\rolcontroller');

/*usuarios*/

route::resource('user','App\Http\Controllers\usercontroller');


/*orden de pedido*/

route::resource('pedido','App\Http\Controllers\pedidocontroller');
route::get('productos/{id}','App\Http\Controllers\pedidocontroller@pdf');
route::get('/pedido/pdf/{id}','PDFcontroller@PDF')->name('descargarPDF');

/*orden de compra*/

route::resource('compra','App\Http\Controllers\compracontroller');
route::get('productos/{id}','App\Http\Controllers\proveedorcontroller@getproductos');

/*PDF*/

route::get('/pdf','PDFcontroller@PDF')->name('descargarPDF');

/*Respaldo*/

route::resource('respaldo','App\Http\Controllers\respaldocontroller');

/*BitacoraRespaldo*/

route::resource('bitacora','App\Http\Controllers\bitacoracontroller');

/*acabado*/

route::resource('acabado','App\Http\Controllers\acabadocontroller');

/*movimiento inventario*/

route::resource('movimiento','App\Http\Controllers\movimientocontroller');