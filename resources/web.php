<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
Use inertia\inertia;

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
    return Inertia::render('Home');
});

Route::get('/contacto', function () {
    return Inertia::render('Contact');
});

Route::get('/chat', function () {
    return Inertia::render('Chat');
});

Route::get('/usuarios', function () {
    //No devuelve los campos indicados
    return Inertia::render('Users',[
        'usuarios' => User::all()->makeHidden([
            'id',
            'email_verified_at',
            'created_at',
            'updated-at',
        ])
        
    ]);
});