<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [WelcomeController::class, 'index'])->name('welcome')->middleware('store-visitor-location');
Route::post('/send', [WelcomeController::class, 'submit'])->name('send');
Route::get('/{slug}', [WelcomeController::class, 'details'])->name('details');
Route::get('/projects/all', [WelcomeController::class, 'all'])->name('all.projects');


Route::get('admin/login', [DashboardController::class, 'login'])->name('admin.login');
Route::post('admin/login', [DashboardController::class, 'loginPost'])->name('admin.login.post');


/*Admin Dashboard*/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/views', [DashboardController::class, 'views'])->name('admin.views.index');

    Route::get('/skills', [DashboardController::class, 'skills'])->name('admin.skills.index');
    Route::get('/skills/create', [DashboardController::class, 'createSkill'])->name('admin.skills.create');
    Route::post('/skills/store', [DashboardController::class, 'storeSkill'])->name('admin.skills.store');
    Route::get('/skills/edit/{id}', [DashboardController::class, 'editSkill'])->name('admin.skills.edit');
    Route::post('/admin/skills/{id}/update', [DashboardController::class, 'updateSkill'])->name('admin.skills.update');
    Route::delete('/admin/skills/{id}/destroy', [DashboardController::class, 'destroySkill'])->name('admin.skills.destroy');

    Route::get('/project', [DashboardController::class, 'projects'])->name('admin.projects.index');
    Route::get('/project/create', [DashboardController::class, 'createProject'])->name('admin.projects.create');
    Route::get('/project/edit/{id}', [DashboardController::class, 'editProject'])->name('admin.projects.edit');
    Route::post('/project/store', [DashboardController::class, 'storeProject'])->name('admin.projects.store');
    Route::post('/admin/projects/{id}/update', [DashboardController::class, 'updateProject'])->name('admin.projects.update');


    Route::get('/visitor', [DashboardController::class, 'visitor'])->name('admin.visitor.index');
});

