<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------             ------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('manager.home');
});


Route::get('home',[
    'uses'  => 'FrontPanel@index',
    'as'    => 'home'
]);


Route::get('incomeTax/newMember',[
    'uses'  => 'GeneralHolding@newIncomeTaxMember',
    'as'    => 'newIncomeTaxMember'
]);
 
Route::post('incomeTax/newMember/save',[
    'uses'  => 'GeneralHolding@saveTaxMember',
    'as'    => 'saveTaxMember'
]);
 
Route::post('incomeTax/holding/update',[
    'uses'  => 'GeneralHolding@updateHoldingPic',
    'as'    => 'updateHoldingPic'
]);
 
Route::post('incomeTax/avatar/update',[
    'uses'  => 'GeneralHolding@updateTaxMemberAvatar',
    'as'    => 'updateTaxMemberAvatar'
]);

Route::get('incomeTax/memberList',[
    'uses'  => 'GeneralHolding@taxMember',
    'as'    => 'taxMember'
]);
 
Route::get('incomeTax/holding/plate/{id}',[
    'uses'  => 'GeneralHolding@printHolding',
    'as'    => 'printHolding'
]);

Route::get('incomeTax/editTaxMember/{id}',[
    'uses'  => 'GeneralHolding@editTaxMember',
    'as'    => 'editTaxMember'
]);

Route::get('incomeTax/active/profile/{id}',[
    'uses'  => 'GeneralHolding@activeTaxPayer',
    'as'    => 'activeTaxPayer'
]);

Route::get('incomeTax/inactive/profile/{id}',[
    'uses'  => 'GeneralHolding@inactiveTaxPayer',
    'as'    => 'inactiveTaxPayer'
]);

Route::get('incomeTax/generate/password/{id}',[
    'uses'  => 'GeneralHolding@generateTaxPass',
    'as'    => 'generateTaxPass'
]);

Route::get('incomeTax/delTaxMember/{id}',[
    'uses'  => 'GeneralHolding@delTaxMember',
    'as'    => 'delTaxMember'
]);

Route::get('incomeTax/delTaxMemberAvatar/{id}',[
    'uses'  => 'GeneralHolding@delTaxPayerAvatar',
    'as'    => 'delTaxPayerAvatar'
]);

Route::get('incomeTax/delHoldingPic/{id}',[
    'uses'  => 'GeneralHolding@delHoldingPic',
    'as'    => 'delHoldingPic'
]);

Route::get('incomeTax/viewTaxMember/{id}',[
    'uses'  => 'GeneralHolding@viewTaxMember',
    'as'    => 'viewTaxMember'
]);
 
Route::post('incomeTax/taxMember/update',[
    'uses'  => 'GeneralHolding@updateTaxMember',
    'as'    => 'updateTaxMember'
]);

// business holding route
Route::get('business/new',[
    'uses'  => 'BusinessController@newBusiness',
    'as'    => 'newBusiness'
]);
 
Route::post('business/save',[
    'uses'  => 'BusinessController@saveBusiness',
    'as'    => 'saveBusiness'
]);

Route::get('business/list',[
    'uses'  => 'BusinessController@businessList',
    'as'    => 'businessList'
]);

Route::get('business/editBusiness/{id}',[
    'uses'  => 'BusinessController@editBusiness',
    'as'    => 'editBusiness'
]);
 
Route::post('business/update',[
    'uses'  => 'BusinessController@updateBusiness',
    'as'    => 'updateBusiness'
]);

Route::get('business/generate/password/{id}',[
    'uses'  => 'BusinessController@generateBusinessPass',
    'as'    => 'generateBusinessPass'
]);

Route::get('business/viewBusiness/{id}',[
    'uses'  => 'BusinessController@viewBusiness',
    'as'    => 'viewBusiness'
]);

Route::get('business/activeBusiness/{id}',[
    'uses'  => 'BusinessController@activeBusiness',
    'as'    => 'activeBusiness'
]);

Route::get('business/inactiveBusiness/{id}',[
    'uses'  => 'BusinessController@inactiveBusiness',
    'as'    => 'inactiveBusiness'
]);

Route::get('business/delBusiness/{id}',[
    'uses'  => 'BusinessController@delBusiness',
    'as'    => 'delBusiness'
]);

Route::get('business/delBusiness/Avatar/{id}',[
    'uses'  => 'BusinessController@delBusinessAvatar',
    'as'    => 'delBusinessAvatar'
]);
 
Route::post('business/update/avatar',[
    'uses'  => 'BusinessController@updateBusinessAvatar',
    'as'    => 'updateBusinessAvatar'
]);

// frontpanel user part here
Route::get('generalUser/home',[
    'uses'  => 'UserDashboard@home',
    'as'    => 'userHome'
]);

Route::get('user/login',[
    'uses'  => 'FrontEnd@login',
    'as'    => 'userLogin'
]);