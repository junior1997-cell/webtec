<?php

use Illuminate\Support\Facades\Route;

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
    return view('main');
});

// Route::get('/main', function () {
//     return view('main');
// });

Route::get('/index', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/main/precios', function () {
    return view('precios');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard/perfil', function () {
    return view('users.perfil');
});
Route::get('/dashboard/herramientas/parametros', function () {
    return view('herramientas.parametros');
});

Route::get('/dashboard/movimientos/ubicardoc', function () {
    return view('movimientos.ubicardoc');
});

Route::get('/dashboard/mantenimiento/articulo', function () {
    return view('mantenimiento.articulo');
});

Route::redirect('/login', '/main');

Route::get('/dashboard/mantenimiento/cproveedor', function () {
    return view('mantenimiento.cliente_proveedor');
});

Route::get('/dashboard/mantenimiento/tcliente', function () {
    return view('mantenimiento.tipo_cliente');
});

Route::get('/dashboard/mantenimiento/artixpro', function () {
    return view('mantenimiento.artixpro');
});

Route::redirect('/login', '/main');
