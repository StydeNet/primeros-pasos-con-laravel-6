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

use App\Note;

Route::get('/', function () {
    $notes = Note::all();

    return view('notes', ['notes' => $notes]);
})->name('notes');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
})->name('notes.show');

Route::get('notas/crear', function () {
    return view('add-note');
})->name('notes.create');

Route::get('notas/{id}/editar', function ($id) {
    $note = Note::find($id);

    return ['note' => $note];
})->name('notes.edit');
