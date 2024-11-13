<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

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
Route::get('/',[FeedbackController::class,'index']);
// Route::get('/{name}',function($name){
//     return view($name);
// });

Route::get('/Education',[FeedbackController::class,'eductionSec']);
Route::get('/Skills',[FeedbackController::class,'skillsSec']);
Route::get('/Certificates',[FeedbackController::class,'certificationSec']);
Route::get('/Internships',[FeedbackController::class,'internshipSec']);
Route::get('/Projects',[FeedbackController::class,'projectSec']);
Route::get('/Contact-me',[FeedbackController::class,'contactSec']);

Route::post('/Contact-me',[FeedbackController::class,'storeData']);


