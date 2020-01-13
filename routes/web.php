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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $notes = DB::table('notes')->get();

    return view('notes', ['notes' => $notes]);
})->name('notes');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
})->name('notes.show');

Route::get('notas/crear', function () {
    return view('add-note');
})->name('notes.create');

Route::get('notas/{id}/editar', function ($id) {
    $note = DB::table('notes')
        ->where('id', $id)
        ->first();

    return ['note' => $note];

    return 'Aquí podremos editar la nota: '.$id;
})->name('notes.edit');
