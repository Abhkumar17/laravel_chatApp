<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Auth::routes();

Route::get('/', function () {
	
   return view('welcome');
 });

  Route::get('chats','AjaxController@getindex');

  Route::post('/chats/registration','AjaxController@store');
 
 /*Route::group(['middleware' => ['Customermiddleware']],function()
 {*/
   Route::post('/chats/ajaxRequest', 'AjaxController@ajaxRequestPost');
   Route::post('/chats/retrieveChatMessages', 'AjaxController@retrieveChatMessages');
   Route::post('/chats/retrieveChatMessages1', 'AjaxController@retrieveChatMessages1');
   Route::post('/chats/isTyping','AjaxController@isTyping');
   Route::post('/chats/notTyping','AjaxController@notTyping');
   Route::post('/chats/agentfetch_custo_record','AjaxController@agentfetch_custo_record');
   Route::get('/chats/customer_session_logout','AjaxController@customer_session_logout');
   Route::post('/chats/livechating','AjaxController@livechating');
   Route::post('/chats/livechating_agent','AjaxController@livechating_agent');
   Route::post('/chats/livechating_admin','AjaxController@livechating_admin');
   Route::post('/chats/customerdocument','AjaxController@customerdocument');
   Route::post('/chats/agent_update_id','AjaxController@agent_update_id');
   Route::get('/chats/downloadJSONFile', 'AjaxController@downloadJSONFile');
/*});
*/

    Route::get('/Agent','AgentController@login');
    Route::post('/Agent/dologin','AgentController@dologin');
    Route::get('/Agent/dashboard','AgentController@dashboard');
    Route::get('/Agent/logout','AgentController@logout');
    Route::post('/Agent/dashboard/getalluser/','AgentController@getalluser')->name('dashboard.getalluser');
    Route::post('/Agent/dashboard/getUnreadMessageCount','AjaxController@documentupload')->name('dashboard.getUnreadMessageCount');
    Route::post('/Agent/dashboard/documentupload','AjaxController@documentupload')->name('dashboard.documentupload');
    Route::get('/Agent/closechat/'."{id}",'AgentController@closechat'); 
    
    Route::post('/Agent/reset','AgentController@reset');




Route::match(['get', 'post'], '/admin','AdminController@admin');
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::post('/chats/notificationsend','AdminController@notificationsend');
    Route::get('/admin/analytics','AdminController@analytics');
    Route::get('/admin/manage_agent','AdminController@manage_agent');
    Route::get('/admin/manage_agent/getagentlist','AdminController@getagentlist')->name('manage_agent.getagentlist');
    Route::get('/admin/customer','AdminController@customer');
    Route::get('/admin/customer/getcustomerlist','AdminController@getcustomerlist')->name('customer.getcustomerlist');
    Route::get('/admin/addagent','AdminController@addagent');
    Route::post('/admin/addagent/postdata','AdminController@postdata')->name('addagent.postdata');
    Route::get('/admin/manage_agent/fetchdata','AdminController@fetchdata')->name('manage_agent.fetchdata');
    Route::get('/admin/customerview/custfetchdata','AdminController@custfetchdata')->name('customerview.custfetchdata');
    Route::post('/admin/analytics/chatreport','AdminController@chatreport')->name('analytics.chatreport');
    Route::get('/admin/delcustomer','AdminController@delcustomer');
    Route::get('/admin/delagent','AdminController@delagent');
    Route::get('/admin/logout','AdminController@logout');
    Route::get('/admin/chat_page','AdminController@chat_page');
    Route::get('/admin/account','AdminController@account');
    Route::get('/admin/appearance','AdminController@appearance');
    Route::post('/admin/accountupdate','AdminController@acc_update');
    Route::post('/admin/changepassword','AdminController@resetpassword');
    Route::post('/admin/companydetail','AdminController@companydetailpost');
    

    Route::get('/admin/export', 'MyController@export')->name('export');
    Route::get('/admin/importExportView', 'MyController@importExportView');
    Route::post('/admin/import', 'MyController@import')->name('import');
    
    //View Page
    Route::get('/admin/analytics',  'ChathistoryController@history');
    Route::post('/admin/analytics', 'ChathistoryController@history'); 







