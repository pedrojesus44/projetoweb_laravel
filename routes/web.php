<?php

use App\Models\agendamentos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agendamentoscontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/consulta', function () {
  //  return view('consulta');
//});

Route::get('/consulta', [agendamentoscontroller::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::post('/cadastrar', [agendamentoscontroller::class, 'store']);

Route::get('/editar', function () {
  return view('editar');
});

Route::get('/editar/{id}', [agendamentoscontroller::class, 'edit']);

Route::put('/atualizar/{id}', [agendamentoscontroller::class, 'update']);

Route::delete('/excluir/{id}', [agendamentoscontroller::class, 'delete']);
