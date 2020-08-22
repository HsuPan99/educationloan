<?php

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
Route::get('/','FrontendController@home')->name('homepage');

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');
<<<<<<< HEAD
Route::resource('students', 'StudentController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('educations', 'EducationController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('financials', 'FinancialController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('loans', 'LoanController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('payments', 'PaymentController'); //7 (get-4/post-1/put-1/delete-1)






=======
Route::resource('students','StudentController');
Route::resource('financial','FinancialController');
>>>>>>> 50b9e789bfe59733272e9dc5cd14fdc848ce0c45

