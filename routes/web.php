<?php

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
    return view('auth.login');
});

// Route::get('/', function () {
    //     return view('examples.index', ['currentExample' => 'List of examples']);
    // });
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');
Route::get('users/profile','UserController@profile');
// Route::get('users/export','UserController@export');
Route::resource('users','UserController');

/*=============================================================================
   The routes below are written for the examples only. 
   You can delete them because you do not need them for a real application.
*/
Route::get('examples/emails', 'ExamplesController@emails');
Route::get('examples/icons', 'ExamplesController@icons');
Route::get('examples/momentjs', 'ExamplesController@momentjs');
Route::get('examples/datepicker', 'ExamplesController@datepicker');
Route::get('examples/flatpickr', 'ExamplesController@flatpickr');
Route::get('examples/bootstrap', 'ExamplesController@bootstrap');
Route::get('examples/bootstrap', 'ExamplesController@bootstrap');
Route::get('examples/chartjs', 'ExamplesController@chartjs');
Route::get('examples/fullCalendar', 'ExamplesController@fullCalendar');
Route::get('examples/select2', 'ExamplesController@select2');
Route::get('examples/richtexteditor', 'ExamplesController@richtexteditor');
Route::get('examples/treeview', 'ExamplesController@treeview');
Route::get('examples/noto', 'ExamplesController@noto');
Route::get('examples/rest', 'ExamplesController@rest');
Route::get('examples/barcode', 'ExamplesController@barcode');
Route::get('examples/pdf', 'ExamplesController@pdf');
Route::get('examples/translation', 'ExamplesController@translation');

//Switch language code
Route::get('examples/translation/switch/{langCode}', function ($langCode) {
    App::setLocale($langCode);
    Session::put('langCode', $langCode);
    return Redirect::back();
});

//Service endpoints
Route::get('examples/emails/sendFakeEmail', 'ExamplesController@sendEmail');
Route::get('examples/rest/getServerTime', 'ExamplesController@getServerTime');
Route::get('examples/barcode/generate', 'ExamplesController@generateBarcode');
Route::get('examples/pdf/generatePDF', 'ExamplesController@generatePDF');
Route::get('examples/pdf/downloadPDF', 'ExamplesController@downloadPDF');

//Landing page for the examples:
Route::get('examples', 'ExamplesController@index')->name('examples');
/*
=============================================================================*/

Route::get('/openNewCall','PageController@OpenNewCall');

Route::resource('/contracttype','contracttypeController');
Route::resource('/userCall','UserCallController');

Route::get('/location','PageController@location');
Route::resource('/client','ClientController');

// Route::get('/userCall','UserCallController@index');

Route::resource('contract','ContractController');


Route::resource('/clientAchive','clientAchiveController');

Route::get('/clientStatus','clientAchiveController@status');
Route::resource('payment','paymentController');
Route::post('payment/showData','paymentController@showData');
Route::post('payment/showBill','paymentController@showBill');
Route::post('payment/addData','paymentController@addData');

Route::resource('/call','callController');
 Route::post('payment/updateStatus','paymentController@updateStatus');

Route::post('call/showCallData','callController@showCallData');

Route::get('/calendar','CalendarController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'ProfileController');
Route::post('/uploadprofile', 'ProfileController@upload');
Route::resource('clientDisable', 'disableClientActiveController');
Route::resource('clientUnable', 'unableClientController');
Route::resource('updateClient', 'updateClientPayment');
Route::resource('updateContract', 'updateContractPayment');

Route::get('chart', 'ChartController@index');
Route::post('/paymentOption','ChartController@payment');

Route::post('/uploadprofile', 'ProfileController@upload');


//export pdf file 
Route::get('/note','NotesController@index');
Route::get('/pdf','NotesController@pdf');
Route::get('/notepayment','PaymentPdfController@index');
Route::get('/paymentpdf','PaymentPdfController@pdf');
 //Route::get('/pdf','NotesController@pdf');
// Route::get('/admin/addContract',function(){
//     return view('pages.addContract');
// });
//Route::get('/download/{id?}', 'PaymentPdfController@download')->name('Documento.download');
 
