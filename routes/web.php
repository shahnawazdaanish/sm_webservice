<?php

use App\Http\Controllers\NomineeController;
use App\Models\CilOrderRequest;
use App\Models\CilOrderRequestSet;
use Illuminate\Support\Facades\Hash;
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
    $data = \Illuminate\Support\Facades\DB::connection('mysql')->table('cil_requests')
        ->first();
    return $data;
    return 'Hello, You are not supposed to be here';
});


Route::any('WebService/Nominee.asmx', [NomineeController::class, 'index']);
Route::any('Webservice/Nominee.asmx', [NomineeController::class, 'index']);
