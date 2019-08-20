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

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Maid;

Route::get('/', 'MaidController@index');

Route::get('/search/{search?}', 'MaidController@show');
Route::get('/agency', 'AgencyController@index');

Route::get('/agencyProfile/{id?}', 'AgencyController@profile');
Route::get('/maidProfile/{id?}', 'MaidController@profile');
Route::get('/news', 'FeedController@index');
Route::get('/enquiry', 'EnquiryController@index');
Route::get('/agencyJoin', 'AgencyController@join');
Route::get('/FAQ',function(){

    return view('FAQ');
});
Auth::routes();

Route::get('/add', function() {

    $agency         =  DB::table('users')->where('id' , Auth::id())->first();
    $activeMaids    =  DB::table('maids')->where('isActive',0)->where('agency_id',$agency->agency_id)->count();
    $activeNoMaids  =  DB::table('maids')->where('isActive',1)->where('agency_id',$agency->agency_id)->count();
    $maids          =  DB::table('maids')->orderBy('updated_at', 'desc')->where('agency_id',$agency->agency_id)->paginate(8);

    
    return view('add',['maids' => $maids , 'activeMaids' => $activeMaids , 'activeNoMaids' => $activeNoMaids]);

});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addMaid', 'MaidController@add');
Route::get('/delete/{id?}', 'MaidController@delete');
