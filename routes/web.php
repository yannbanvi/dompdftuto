<?php

use Barryvdh\DomPDF\Facade\Pdf;
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
    return view('welcome');
});

Route::post("/generate", function(){
    $users = \App\Models\User::all()->take(500);

    $pdf = Pdf::loadView('pdf.list_users', [
        "users" => $users
    ]);
    $pdf->setPaper("a4", "portrait");


    return $pdf->stream("myfile.pdf");

})->name("pdf.generate");



Route::post("/download", function(){
    $users = \App\Models\User::all()->take(500);

    $pdf = Pdf::loadView('pdf.list_users', [
        "users" => $users
    ]);
    $pdf->setPaper("a4", "portrait");


    return $pdf->download("myfile.pdf");
})->name("pdf.download");

