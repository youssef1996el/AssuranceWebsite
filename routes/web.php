<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

Route::get('/', function () {

    return view('welcome');
});

Route::get('Contant',function()
{
    return view('Contact');
});

Route::get('Auto',function()
{
    return view('Auto');
});
Route::get('Habitation',function()
{
    return view('Habitation');
});
Route::get('sante',function()
{
    return view('Sante');
});
Route::get('rc-decennale',function()
{
    return view('decennale');
});


Route::get('Emprunteur',function()
{
    return view('Emprunteur');
});

Route::get('SendMail',[MailController::class,'index'])->name('SendMail');

Route::get('SendMailContact',[MailController::class,'SendMessageContact'])->name('SendMailContact');
