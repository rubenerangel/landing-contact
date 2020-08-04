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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function() {
    $urlJson = "https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json";
    $json = file_get_contents($urlJson);
    $states = array_keys(json_decode($json, TRUE));

    return view('landing', compact(['states']));
});

Route::post('/cities/{state}', function($stateOfColombia) {
    // var_dump($state);
    $stateOfColombiaSelected = $stateOfColombia;
    
    $urlJson = "https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json";
    $json = file_get_contents($urlJson);
    $arrayStates = json_decode($json, TRUE);

    return response()->json( $arrayStates, 200);
});

Route::post('/contacts/add', 'ContactController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
