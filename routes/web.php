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
    $notes = [
        'Mi primera nota',
        'Mi segunda nota',
        'Mi tercera nota',
        'Mi cuarta nota',
    ];

    return view('notes', ['notes' => $notes]);
});

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
});

Route::get('notas/crear', function () {
    return view('add-note');
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Aquí podremos editar la nota: '.$id;
});
