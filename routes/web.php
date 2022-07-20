<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

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

Route::get('/stats/logs/country', [StatisticsController::class, 'index']);


Route::get('/xml-parser', function () {
    $xmlString = file_get_contents(storage_path('app/public/files/notes.xml'));
    $xmlObject = simplexml_load_string($xmlString);
               
    $json = json_encode($xmlObject);
    $phpArray = json_decode($json, true);
    
    dd($phpArray);
});


Route::get('/app/{path?}', function () {
    return view('react');
});


Route::get('/testing', function () {
    $sockMerchant = function ($n, $ar) {
        $ar = explode(' ', $ar);

        $sortedSocks = [];
        $sortedSocks = array_reduce($ar, function ($sortedSocks, $sock) {
            $count = $sortedSocks[$sock] ?? 0;
            $sortedSocks[$sock] = $count + 1;
            return $sortedSocks;
        }, $sortedSocks);

        $pairedSocks = (int)array_reduce($sortedSocks, function ($pairedSocks, $colorGroup) {
            return $pairedSocks + floor($colorGroup/2);
        });

        return $pairedSocks;

        dd($pairedSocks);
    };
    
    $n = 9;
    $ar = '10 20 20 10 10 30 50 10 20';

    $sockMerchant($n, $ar);

});
