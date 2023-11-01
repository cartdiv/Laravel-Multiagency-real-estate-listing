<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\AmenitesController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin Middleware
Route::middleware(['auth','roles:admin'])->group(function(){
     //All Property Type Route
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/admin/password', 'UpdateAdminPassword')->name('update.admin.password');
        Route::post('/update/admin/profile', 'UpdateAdminProfile')->name('update.admin.profile');
    });

   
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('all/type', 'AllType')->name('all.type')->middleware('permission:all.type');
        Route::get('add/type', 'AddPropertyType')->name('add.type')->middleware('permission:add.type');
        Route::post('create/type', 'CreatePropertyType')->name('create.property.type');
        Route::get('delete/type/{id}', 'DeletePropertyType')->name('delete.type');
        Route::get('edit/type/{id}', 'EditPropertyType')->name('edit.type')->middleware('permission:edit.type');
        Route::post('update/type/', 'UpdatePropertyType')->name('update.type');
    });

    Route::controller(AmenitesController::class)->group(function(){
        Route::get('all/amenities', 'AllAmenities')->name('all.amenities')->middleware('permission:all.amenities');
        Route::get('add/amenities', 'AddAmenities')->name('add.amenities');
        Route::get('edit/amenities/{id}', 'EditAmenities')->name('edit.amenities');
        Route::get('delete/amenities/{id}', 'DeleteAmenities')->name('delete.amenities');
        Route::post('update/amenities', 'UpdateAmenities')->name('update.amenities');
        Route::post('store/amenities', 'StoreAmenities')->name('store.amenities');
    });

//permission $ Roles Route
    Route::controller(RoleController::class)->group(function(){
        //Permissions route
        Route::get('all/permission', 'AllPermission')->name('all.permission');
        Route::get('add/permission', 'AddPermission')->name('add.permission');
        Route::post('store/permission', 'StorePermission')->name('store.permission');
        Route::get('edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::get('delete/permission/{id}', 'DeletePermission')->name('delete.permission');
        Route::post('update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('import/permission', 'ImportPermission')->name('import.permission');
        Route::get('export', 'Export')->name('export');
        Route::post('import', 'Import')->name('import');
        //Roles Route
        Route::get('all/roles', 'AllRoles')->name('all.roles');
        Route::get('add/roles', 'AddRoles')->name('add.roles');
        Route::post('store/role', 'StoreRole')->name('store.role');
        Route::get('edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::get('delete/roles/{id}', 'DeleteRoles')->name('delete.roles');
        Route::post('updated/role', 'UpdatedRole')->name('update.role');
        Route::get('add/roles/permission', 'AddRolesPermission')->name('add.role.permission');
        Route::post('store/permission/role', 'StorePermissionRole')->name('store.permission.role');
        Route::get('all/roles/permission', 'AllRolesPermission')->name('all.role.permission');
        Route::get('admin/edit/roles/{id}', 'AdminEditRoles')->name('admin.edit.roles');
        Route::post('admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::get('admin/delete/roles/{id}', 'AdminDeleteRoles')->name('admin.delete.roles');
    });


    Route::controller(AdminController::class)->group(function(){
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');

        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/admin/profile', 'UpdateAdminProfile')->name('update.admin.profile');


        //Agent users
        Route::get('/all/agent', 'AllAgent')->name('all.agent');
        Route::get('/add/agent', 'AddAgent')->name('add.agent');
        Route::post('/store/agent', 'StoreAgent')->name('store.agent');
        Route::get('/edit/agent/{id}', 'EditAgent')->name('edit.agent');
        Route::post('/update/agent', 'UpdateAgent')->name('update.agent');
        Route::get('/delete/agent/{id}', 'DeleteAgent')->name('delete.agent');



    });

});//Admin Middleware

Route::middleware(['auth','roles:agent'])->group(function(){

    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

});

Route::get('/admin/login/', [AdminController::class, 'AdminLoginOption'])->name('admin.login.option');
require __DIR__.'/auth.php';
