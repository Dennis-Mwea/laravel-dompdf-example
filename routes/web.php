<?php

use Illuminate\Support\Facades\Storage;

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
    return view('form');
});

Route::post('submitForm', 'UserDetailsController@store');
Route::get('/index', 'UserDetailsController@index');
Route::get('/downloadPDF/{id}', 'UserDetailsController@downloadPDF');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/image', function () {
    $imagePath = url('logo.png');
    $imageFileName = 'logo';
    // you need to get $imagePath and you need to define $imageFileName from $imagePath somehow and then you can do
    $shadowedFileName = preg_replace('/[^a-zA-Z0-9-]/', '-', substr($imagePath, 0, 3).'/'.substr($imagePath, 3, 3).'/'.substr($imagePath, 6, 3).'/'.preg_replace('/\\.[^.\\s]{3,4}$/', '', $imageFileName).'-'.preg_replace('/\\.[^.\\s]{3,4}$/', '', $imagePath).'-drop-shadow.'.$this->image->extension);
    $fileExists = Storage::disk('s3')->exists('uploads/public/'.$shadowedFileName); // replace uploads/public/ with the path that is being used
    if (!$fileExists) {
        // add the shadow logic here and save locally under substr($shadowedFileName, 12));
            Storage::put('uploads/public/'.$thumbFileName, FileHelper::get(substr($shadowedFileName, 12)), 'public'); // replace uploads/public/ with the path that is being used
            FileHelper::delete(substr($shadowedFileName, 12));
    }
    // get $directoryPath from $imagePath minus the actual filename
    return $directoryPath.$shadowedFileName;
});
