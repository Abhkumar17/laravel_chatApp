<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controller\AdminController;
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
//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});
//Route::post('dologin','API\ApiagentController@dologin');

//Route::group(['middleware' => ['myHeader']],function(){

//Route::get('getalluser','API\ApiagentController@getalluser');
//});
Route::group(['middleware'  => 'auth:api', 
              'headers'     => ['Accept' => 'application/json']
             ], function(){ 
        //Route::post('dologin', 'API\ApiagentController@dologin'); 
             });
Route::post('dologin', 'API\ApiagentController@dologin');

Route::post('addagent','API\ApiagentController@addagent');
//Route::post('dologin', 'API\ApiagentController@dologin');
//Route::get('getalluser','API\ApiagentController@getalluser');
//Route::group(['prefix' => 'auth'], function(){

//Route::group([
  //'middleware' =>'auth:api'
   //], function(){
//Route::get('getalluser','API\ApiagentController@getalluser');
//Route::post('logout','API\ApiagentController@logout');
//});
//});

//Route::post('dologin','API\ApiagentController@dologin');

//Route::get('getalluser','API\ApiagentController@getalluser');

//Route::post('closechat','API\ApiagentController@closechat');

//Route::post('filetransfer','API\ApiagentController@documentupload');

//Route::post('chating','API\ApiagentController@sendMessage');

//Route::post('logout','API\ApiagentController@logout');
/*Route::group(array('middleware' => ['myHeader']), function ()
{
//Route::get('dashboard','HomeController@dashboard');

Route::get('getalluser','API\ApiagentController@getalluser');

Route::post('closechat','API\ApiagentController@closechat');

Route::post('filetransfer','API\ApiagentController@documentupload');

Route::post('chating','API\ApiagentController@sendMessage');

Route::post('logout','API\ApiagentController@logout');
});*/


