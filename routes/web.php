<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;

Route::get('/users', [UserControler::class, 'loadAllUser']);
Route::get('/', [UserControler::class, 'loadAllUser']);
Route::get('/add/user', [UserControler::class, 'loadAddUser']);
Route::post('/add/user', [UserControler::class, 'AddUser'])->name('AddUser');
Route::get('/edit/{id}', [UserControler::class, 'Edit']);
Route::get('/delete/{id}', [UserControler::class, 'Delete']);
Route::post('/edit/user', [UserControler::class, 'EditUser'])->name('EditUser');
Route::get('/practice', [UserControler::class, 'forpractice']);
/*Route::get('/users', function()
{
    return view('users');
});*/
?>
