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

//Route::get('/', function () {
//    return view('welcome');
//});



// For Home
Route::get('/', 'System\HomeController@homePage')->name('system.home');


// Browse
Route::get('/system/browse/databases_page', 'System\Browse\DatabasesController@databases_page')->name('system.browse.databases_page');


// Analytics
Route::get('/system/analytics/databworkflow_pageases_page', 'System\Analytics\WorkflowController@workflow_page')->name('system.analytics.workflow_page');

Route::get('/system/analytics/api_workflow_get_tools_list', 'System\Analytics\WorkflowController@api_workflow_get_tools_list')->name('system.analytics.api_workflow_get_tools_list');
Route::get('/system/analytics/api_workflow_run_workflow', 'System\Analytics\WorkflowController@api_workflow_run_workflow')->name('system.analytics.api_workflow_run_workflow');
Route::get('/system/analytics/api_workflow_get_job_status', 'System\Analytics\WorkflowController@api_workflow_get_job_status')->name('system.analytics.api_workflow_get_job_status');
Route::get('/system/analytics/api_workflow_get_job_result_list', 'System\Analytics\WorkflowController@api_workflow_get_job_result_list')->name('system.analytics.api_workflow_get_job_result_list');
Route::get('/system/analytics/api_workflow_get_backend_data_to_server', 'System\Analytics\WorkflowController@api_workflow_get_backend_data_to_server')->name('system.analytics.api_workflow_get_backend_data_to_server');


Route::get('/system/analytics/store_params', 'System\Analytics\WorkflowController@store_params')->name('system.analytics.store_params');

Route::get('/system/analytics/api_workflow_job_submit', 'System\Analytics\WorkflowController@api_workflow_job_submit')->name('system.analytics.api_workflow_job_submit');

Route::get('/system/analytics/workflow_get_job_list', 'System\Analytics\WorkflowController@workflow_get_job_list')->name('system.analytics.workflow_get_job_list');

Route::get('/system/analytics/workflow_get_job_parameters', 'System\Analytics\WorkflowController@workflow_get_job_parameters')->name('system.analytics.workflow_get_job_parameters');


// Event
Route::get('/system/event/bigdata_syposium_page', 'System\Event\EventController@BigDataSymposiumPage')->name('system.event.bigdata_syposium_page');
Route::get('/system/event/bigdata_syposium_register_submit', 'System\Event\EventController@BigDataSymposiumRegisterSubmit')->name('system.event.bigdata_syposium_register_submit');
Route::get('/system/event/workshops_page', 'System\Event\EventController@WorkshopsPage')->name('system.event.workshops_page');
Route::get('/system/event/workshops/Workshop_2008_NeuroscienceResearchersPage', 'System\Event\EventController@Workshop_2008_NeuroscienceResearchersPage')->name('system.event.workshops.Workshop_2008_NeuroscienceResearchersPage');

// About

Route::get('/system/about/related_projects', 'System\About\RelatedProjectController@ProjectsPage')->name('system.about.related_projects');

// Upload API
Route::post('/system/UploadAPI/uploadWorkflowInput', 'System\UploadAPI\UploadController@uploadWorkflowInput')->name('system.UploadAPI.uploadWorkflowInput');

// ChatBot Route get method to submit user input and get bot response
Route::get('/chatbot', 'ChatBot@getResponse');


