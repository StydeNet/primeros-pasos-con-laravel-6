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

use App\Http\Controllers\NoteController;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

Route::get('/', [NoteController::class, 'index'])->name('notes');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
})->name('notes.show');

Route::get('notas/crear', 'NoteController@create')->name('notes.create');

Route::post('notas', 'NoteController@store')->name('notes.store');

Route::get('notas/{id}/editar', 'NoteController@edit')->name('notes.edit');
