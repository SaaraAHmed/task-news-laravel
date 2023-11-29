<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Examplecontroller; 
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
                                                   //task 2

Route::prefix('web structures')->group( function() {
    Route::get('/',function(){
        return 'product home page web structure ';
    });
    Route::get('web/{webstructure}/{About}/{contactus}/{support}', function ($webstructure,$About,$contactus,$support) {
        return  '<ul>'.$webstructure.'<li>'. $About .'</li>'.'<li>'. $contactus.'</li>'.'<li>'. $support.'</li>'.'</ul>';    
    });  
    Route::get('wep/{supports}/{chat}/{call}/{ticket}', function ($supports,$chat,$call,$ticket) {
        return  '<li>'. $supports.'</ol>'.'<ol>'. $chat.'</ol>'.'<ol>'. $call.'</ol>'.'<ol>'. $ticket.'</li>';    
    });  
    Route::get('wap/{training}/{hr}/{ict}/{markting}/{logistics}', function ($training,$hr,$ict,$markting,$logistics) {
        return  '<li>'. $training.'</ol>'.'<ol>'. $hr.'</ol>'.'<ol>'. $ict.'</ol>'.'<ol>'. $markting.'</li>'.'<ol>'. $logistics.'</li>';    
    });
})->whereIn('web structures', ['web','wep','wap']);


                                                //task 3  Add car
Route::get('login',function () {
    return  view('login');    
});

//to get data from login
Route::POST('receive',function () {
    return  ('Data received');    
})->name('receive');

Route::get('news', [NewsController::class,'news']);

// Route::get('login', [Carcontroller::class,'login']);
// Route::post('receive', [Carcontroller::class,'received'])->name('receive');


 //****************************                   //task 4  section news



 Route::post('storenews', [NewsController::class,'store'])->name('storenews');
 Route::get('createnews', [NewsController::class,'create']);



 //*************************************             task 5 edit/update News 

 Route::get('news', [NewsController::class,'index']);
 Route::get('editNews/{id}', [NewsController::class,'edit']);
 Route::put('updateNews/{id}', [NewsController::class,'update'])->name('updateNews');


 //***********************************               task 6 show/delete News

 Route::get('newsDetail/{id}', [NewsController::class,'show'])->name('newsDetail');
 Route::get('deleteNews/{id}', [NewsController::class,'destroy']);


 //***********************************               task 7 softdelete/forcedelete/restore/valiation News


 Route::get('trashed', [NewsController::class,'trashed']); 
Route::get('newsDeleted/{id}', [NewsController::class,'newsDeleted']);
Route::get('restoreNews/{id}', [NewsController::class,'restoreNews']);