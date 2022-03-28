<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColossiansController;

Route::get('/chapter/{chapter_number}',[ColossiansController::class,'readByChapter']);
Route::get('/all-chapters',[ColossiansController::class, 'readAll']);