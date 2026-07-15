<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('forms/details', function () {
        return view('forms.details');
    });

    Route::get('forms/details', function () {
        return view('forms.details');
    });
});

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // ------------------------login ----------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'authenticate');
        Route::get('logout', 'logout')->name('logout');
    });

    // ----------------------- register -------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'register')->name('register');
         Route::post('register','storeUser')->name('register');    
       
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    Route::middleware('auth')->group(function () {

    //-----------------------------------Form------------------//
       Route::controller(FormController::class)->group(function () {
             Route::get('details', 'personaldetails')->name('details');
             Route::post('details','storePersonalDetails')->name('details');    
             Route::get('details/{id}','verifyDataUserExist')->name('details'); 
             Route::post('details/{id}','updateData')->name('details');    
       });
        Route::controller(CustomerListController::class)->group(function () {
        Route::get('clientlist', 'customerlist')->name('clientlist');
        Route::get('clientlist', 'clientCollections')->name('clientlist');

       });
        Route::controller(FinancialIndependenceController::class)->group(function () {
             Route::get('financialindependence', 'financialindependence')->name('financialindependence');
       });
        Route::controller(IncomeController::class)->group(function () {
             Route::get('income', 'income')->name('income');
       });
  
        Route::controller(SuperannuationController::class)->group(function () {
             Route::get('contribution', 'contribution')->name('contribution');
       });
         Route::controller(AssetsLiabilitiesController::class)->group(function () {
             Route::get('assets-liabilities', 'assetsliabilities')->name('assets-liabilities');
       });
        Route::controller(EstimationController::class)->group(function () {
             Route::get('estimation', 'estimation')->name('estimation');
       });
        Route::controller(DebtRatesController::class)->group(function () {
             Route::get('debt-rates', 'debtrates')->name('debt-rates');
       });
  
  
 
    
    });
});