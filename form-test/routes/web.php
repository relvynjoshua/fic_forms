<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('form');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::post('/generate-pdf2', [WordController::class, 'generatePDF'])->name('generate-pdf2');
