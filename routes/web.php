<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CrsController;
use App\Http\Controllers\TeamLeadController;
use App\Http\Controllers\FarmManagerController;
use App\Http\Controllers\FieldAssistantController;
use App\Http\Controllers\MeExecController;
use App\Http\Controllers\MeStaffController;

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
    return view('auth.login');
});

Auth::routes();

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');


Route::middleware(['middleware' => 'PreventBackHistory'])->group(function(){
    Auth::routes();
});

/*Corporate Responsibility and Sustainability*/
Route::group(['middleware' => ['isCrs', 'auth','PreventBackHistory']], function() {
    Route::get('/crs-dashboard', [CrsController::class, 'index'])->name('crs-dashboard');
    Route::get('/view_team', [CrsController::class, 'view_team'])->name('view_team');
    Route::get('/fa', [CrsController::class, 'field_assistants'])->name('fa');
    Route::get('/tl', [CrsController::class, 'team_lead'])->name('team_lead');


    Route::get('/add_team', [CrsController::class, 'add_team'])->name('add_team');
    Route::post('/store_team', [CrsController::class, 'store_team'])->name('store_team');
});


/*Team Lead*/
Route::group(['middleware' => ['isTeamLead', 'auth','PreventBackHistory']], function() {
    Route::get('/tl-dashboard', [TeamLeadController::class, 'index'])->name('tl-dashboard');
});


/*Farm Manager*/
Route::group(['middleware' => ['isFarmManager', 'auth','PreventBackHistory']], function() {
    Route::get('/fm-dashboard', [FarmManagerController::class, 'index'])->name('fm-dashboard');
});


/*Field Assistant*/
Route::group(['middleware' => ['isFieldAssistant', 'auth','PreventBackHistory']], function() {
    Route::get('/fa-dashboard', [FieldAssistantController::class, 'index'])->name('fa-dashboard');
});


/*Monitoring and Evaluation Executive*/
Route::group(['prefix' => 'meExec', 'middleware' => ['isMeExec', 'auth','PreventBackHistory']], function() {
    Route::get('/meExec-dashboard', [MeExecController::class, 'index'])->name('meExec-dashboard');
});

/*Monitoring and Evaluation Staff*/
Route::group(['prefix' => 'meExec', 'middleware' => ['isMeExec', 'auth','PreventBackHistory']], function() {
    Route::get('/meExec-dashboard', [MeStaffController::class, 'index'])->name('meExec-dashboard');
});




//Route Names Proposal
/*
 crs-dashboard
 tl-dashboard
 fm-dashboard
 fa-dashboard
 meExec-dashboard
 meStf-dashboard
*/
