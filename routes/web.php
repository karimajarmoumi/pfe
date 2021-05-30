<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\GestionnaireMiddleware;
//use App\Http\Controllers\Controller;
use App\model\Role;
use App\model\User;
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
    return view('welcome');
});

Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
});


//Route-Administrateur
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/service', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service.view');
Route::get('admin/service/add', [App\Http\Controllers\Admin\ServiceController::class, 'add'])->name('admin.service.add');
Route::get('admin/service/edit/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.service.edit');
Route::get('admin/service/delete/{id}',[App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('admin.service.delete');
Route::get('admin/users/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
Route::get('admin/users/add', [App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin.users.add');
Route::get('admin/users/delete/{id}',[App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.users.delete');
Route::get('admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.view');

//Route-Gestionnaire:Secrètaire
Route::get('gestionnaire/dashboard', [App\Http\Controllers\Gestionnaire\DashboardController::class, 'index'])->name('gestionnaire.dashboard');
Route::get('gestionnaire/courrier', [App\Http\Controllers\Gestionnaire\CourrierController::class, 'index'])->name('courrier.view');
Route::post('gestionnaire/courrier/add', [App\Http\Controllers\Gestionnaire\CourrierController::class, 'save']);
Route::get('gestionnaire/courrier/add', [App\Http\Controllers\Gestionnaire\CourrierController::class, 'add'])->name('gestionnaire.courrier.add');

//Route-Membre:utlisateurPersonnel
Route::get('membre/dashboard', [App\Http\Controllers\Membre\DashboardController::class, 'index'])->name('membre.dashboard');
Route::get('membre/courrier', [App\Http\Controllers\Membre\CourrierController::class, 'index'])->name('membre.courrier.view');
Route::get('membre/courrier/add', [App\Http\Controllers\Membre\CourrierController::class, 'add'])->name('membre.courrier.add');


//Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

/*Route::group(['as' => 'admin.',
   'prefix' => 'admin',
   'namespace' => 'Admin',
   'middleware' => ['auth','admin'] ],function()
    {
    //Route::resource('/admin','Admin\DashboardController');
   // Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
     Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');


});

Route::group(
    ['as' => 'gestionnaire.',
    'prefix' => 'gestionnaire',
    'namespace' => 'Gestionnaire',
    'middleware' => ['auth','gestionnaire']],function()
    {
        // Route::resource('/gestionnaire','Gestionnaire\DashboardController');
        //Route::get('dashboard',[App\Http\Controllers\Gestionnaire\DashboardController::class , 'index'])->name('dashboard');
        Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');


    });
*/

