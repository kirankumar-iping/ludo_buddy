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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes();
Route::post('register', 'UserController@store1');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blank', 'BlankController@index')->name('blank');
Route::group(['middleware' => ['auth']], function () {

    Route::resource('roles', 'RoleController');

    Route::resource('users', 'UserController');
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::resource('products','ProductController');
    Route::get('how-to-play', 'InstructionController@howtoPlay');
    Route::get('faqs', 'InstructionController@Faq');
    Route::get('terms-and-conditions', 'InstructionController@TermsCondition');

    Route::get('editprofile', 'UserController@editProfile');
    Route::get('mymatches', 'TransactionController@myMatches');
    Route::get('buy-chips', 'TransactionController@byChips');
    Route::get('redeemchips', 'TransactionController@redeemChips');
    Route::get('transaction', 'TransactionController@transaction');
});

//Auth::routes();
