<?php

use Illuminate\Support\Facades\Route;
use App\Group;
use App\Unit;
use App\Book;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//進入功能
Route::get('/custom', function () {
    $group=Group::Leftjoin("countries","cid","countries.id")->Leftjoin("grouptypes","gtype_id","grouptypes.id")->orderby("gtype_id")->select('type_name','groups.id','country_name','group_name')->get();
    $units=Unit::all();
    return view('frontend.showdata.custom',compact(['group','units']));
});

Route::get('/book', function () {
    $books=Book::all();
        return view('frontend.bookdata.book',compact(['books']));
});

Route::get('/inquire', function () {
    return view('frontend.orderdata.inquire');
});

Route::get('/exportexcel', function () {
    return view('frontend.exportdata.exportexcel');
});

Route::get('users/export/',"\App\Http\Controllers\UserControllerB@export");
Route::get('users/store/',"\App\Http\Controllers\UserControllerB@storeExcel");
