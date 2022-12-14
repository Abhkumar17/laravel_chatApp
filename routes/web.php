<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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

Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('product',[ProductController::class,'index']);
Auth::routes();

Route::get('/', function () {
	
   return view('welcome');
 });

//   Route::get('chats','AjaxController@getindex');

//   Route::post('/chats/registration','AjaxController@store');
 
//  /*Route::group(['middleware' => ['Customermiddleware']],function()
//  {*/
//    Route::post('/chats/ajaxRequest', 'AjaxController@ajaxRequestPost');
//    Route::post('/chats/retrieveChatMessages', 'AjaxController@retrieveChatMessages');
//    Route::post('/chats/retrieveChatMessages1', 'AjaxController@retrieveChatMessages1');
//    Route::post('/chats/isTyping','AjaxController@isTyping');
//    Route::post('/chats/notTyping','AjaxController@notTyping');
//    Route::post('/chats/agentfetch_custo_record','AjaxController@agentfetch_custo_record');
//    Route::get('/chats/customer_session_logout','AjaxController@customer_session_logout');
//    Route::post('/chats/livechating','AjaxController@livechating');
//    Route::post('/chats/livechating_agent','AjaxController@livechating_agent');
//    Route::post('/chats/livechating_admin','AjaxController@livechating_admin');
//    Route::post('/chats/customerdocument','AjaxController@customerdocument');
//    Route::post('/chats/agent_update_id','AjaxController@agent_update_id');
//    Route::get('/chats/downloadJSONFile', 'AjaxController@downloadJSONFile');
// /*});
// */

//     Route::get('/Agent','AgentController@login');
//     Route::post('/Agent/dologin','AgentController@dologin');
//     Route::get('/Agent/dashboard','AgentController@dashboard');
//     Route::get('/Agent/logout','AgentController@logout');
//     Route::post('/Agent/dashboard/getalluser/','AgentController@getalluser')->name('dashboard.getalluser');
//     Route::post('/Agent/dashboard/getUnreadMessageCount','AjaxController@documentupload')->name('dashboard.getUnreadMessageCount');
//     Route::post('/Agent/dashboard/documentupload','AjaxController@documentupload')->name('dashboard.documentupload');
//     Route::get('/Agent/closechat/'."{id}",'AgentController@closechat'); 
    
//     Route::post('/Agent/reset','AgentController@reset');




Route::match(['get', 'post'], '/admin',[AdminController::class,'admin']);
    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    Route::post('/chats/notificationsend',[AdminController::class,'notificationsend']);
    Route::get('/admin/analytics',[AdminController::class,'analytics']);
    Route::get('/admin/manage_agent',[AdminController::class,'manage_agent']);
    Route::get('/admin/manage_agent/getagentlist',[AdminController::class,'getagentlist'])->name('manage_agent.getagentlist');
    Route::get('/admin/customer',[AdminController::class,'customer']);
    Route::get('/admin/customer/getcustomerlist',[AdminController::class,'getcustomerlist'])->name('customer.getcustomerlist');
    Route::get('/admin/addagent',[AdminController::class,'addagent']);
    Route::post('/admin/addagent/postdata',[AdminController::class,'postdata'])->name('addagent.postdata');
    Route::get('/admin/manage_agent/fetchdata',[AdminController::class,'fetchdata'])->name('manage_agent.fetchdata');
    Route::get('/admin/customerview/custfetchdata',[AdminController::class,'custfetchdata'])->name('customerview.custfetchdata');
    Route::post('/admin/analytics/chatreport',[AdminController::class,'chatreport'])->name('analytics.chatreport');
    Route::get('/admin/delcustomer',[AdminController::class,'delcustomer']);
    Route::get('/admin/delagent',[AdminController::class,'delagent']);
    Route::get('/admin/logout',[AdminController::class,'logout']);
    Route::get('/admin/chat_page',[AdminController::class,'chat_page']);
    Route::get('/admin/account',[AdminController::class,'account']);
    Route::get('/admin/appearance',[AdminController::class,'appearance']);
    Route::post('/admin/accountupdate',[AdminController::class,'acc_update']);
    Route::post('/admin/changepassword',[AdminController::class,'resetpassword']);
    Route::post('/admin/companydetail',[AdminController::class,'companydetailpost']);
    

    // Route::get('/admin/export', 'MyController@export')->name('export');
    // Route::get('/admin/importExportView', 'MyController@importExportView');
    // Route::post('/admin/import', 'MyController@import')->name('import');
    
    // //View Page
    // Route::get('/admin/analytics',  'ChathistoryController@history');
    // Route::post('/admin/analytics', 'ChathistoryController@history'); 







