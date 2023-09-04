<?php

use Illuminate\Support\Facades\Route;

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

//
use App\Http\Controllers\Routes;

route::get('/',[Routes::class, 'index']);
route::get('/tanaman',[Routes::class, 'tanaman']);
route::get('/tentangkami',[Routes::class, 'tentangkami']);
route::get('/contact',[Routes::class, 'contact']);


