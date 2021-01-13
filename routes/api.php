<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Taikhoan;
use App\Models\Baiviet;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('user', function () {
    $data = Taikhoan::all();
    $a= json_encode($data);
    $a = substr($a, 1);   
    $a = substr($a,0, -1);   
    return json_encode($data);
    // return ;
});
Route::get('baiviet', function () {
    $data = Baiviet::all();
    $a= json_encode($data);
    $a = substr($a, 1);   
    $a = substr($a,0, -1);   
    return json_encode($data);
    
});
Route::post('register', function (Request $request ) {
    $user = new TaiKhoan();
    $user->username= $request->username;    
    $user->pass= $request->pass;    
    $user->save();
});