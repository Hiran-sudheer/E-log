<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Route;

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

// Route::get('/login', function () {
//     return view('login');
// })->name('googlelogin');

Route::get('/w', function () {
    return view('welcome');
})->name('w');

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('goole-auth');

Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

Route::get('e-log-home','App\Http\Controllers\ElogController@home')->middleware('auth');

// Route::post('/login',[GoogleAuthController::class,'login'])->name('login');


Route::get('/U', function () {
    
          $to = Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
          $from = Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 9:30:34');
        
          $diff_in_hours = $to->diffInHours($from);
    
          dd($diff_in_hours);
});


Route::get('/t',function(){


  $query ="";
  $query .= "SELECT  * from `e-log-user-log-details`";
  $query .= " WHERE user_id='1'";
  $query .= " AND (DATE(login_time)=CRUDATE() OR DATE(logout_time)=CURDATE())";
  $query .= " ORDER BY id DESC ";
  $query .= "LIMIT 1";

  $res = DB::select($query)[0]; 
  // return $res->login_time;

  $logoff_date  = Carbon::parse($res->login_time);
  $now = Carbon::now() ; 

 return $now->diffInHours($logoff_date);

  return '~~~~~~~~~~~~~~';

});




