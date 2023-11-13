<?php

use App\Http\Controllers\Admin\BuildingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyMessageController;
use App\Http\Controllers\AgencyPropertyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\AmenitesController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\PartnerController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'FrontendIndex')->name('frontend');
    Route::get('/property/detail/{id}/{slug}', 'PropertyDetail');

});



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
        Route::get('/inactive/agent/{id}', 'InactiveAgent')->name('inactive.agent');
        Route::get('/active/agent/{id}', 'ActiveAgent')->name('active.agent');



    });

//Home Slider route
    Route::controller(SliderController::class)->group(function(){
        Route::get('/all/sliders', 'AllSlider')->name('all.slider');
        Route::get('/add/sliders', 'AddSlider')->name('add.slider');
        Route::post('/create/sliders', 'CreateSlider')->name('create.slider');
        Route::post('/update/sliders', 'UpdateSlider')->name('update.slider');
        Route::get('/edit/sliders/{id}', 'EditSlider')->name('edit.slider');
        Route::get('/delete/sliders/{id}', 'DeleteSlider')->name('delete.slider');
    });
//Testimonial route
    Route::controller(TestimonialController::class)->group(function(){
        Route::get('/all/testimonial', 'AllTestimonial')->name('all.testimonial');
        Route::get('/add/testimonial', 'AddTestimonial')->name('add.testimonial');
        Route::post('/create/testimonial', 'CreateTestimonial')->name('create.testimonial');
        Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
        Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
        Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
    });
//Property Category route
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });
//Property place route
    Route::controller(PlaceController::class)->group(function(){
        Route::get('/all/place', 'AllPlace')->name('all.place');
        Route::get('/add/place', 'AddPlace')->name('add.place');
        Route::post('/store/place', 'StorePlace')->name('store.place');
        Route::post('/update/place', 'UpdatePlace')->name('update.place');
        Route::get('/edit/place/{id}', 'EditPlace')->name('edit.place');
        Route::get('/delete/place/{id}', 'DeletePlace')->name('delete.place');
    });
//Property building route
    Route::controller(BuildingController::class)->group(function(){
        Route::get('/all/building', 'AllBuilding')->name('all.building');
        Route::get('/add/building', 'AddBuilding')->name('add.building');
        Route::post('/store/building', 'StoreBuilding')->name('store.building');
        Route::post('/update/bulding', 'UpdateBuilding')->name('update.bulding');
        Route::get('/edit/building/{id}', 'EditBuilding')->name('edit.building');
        Route::get('/delete/building/{id}', 'DeleteBuilding')->name('delete.building');
    });

    //Property route
    Route::controller(PropertyController::class)->group(function(){
        Route::get('/all/property', 'AllProperty')->name('all.property');
        Route::get('/add/property', 'AddProperty')->name('add.property');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::post('/update/property', 'UpdateProperty')->name('update.property');
        Route::get('/edit/property/{id}', 'EditProperty')->name('edit.property');
        Route::get('/delete/property/{id}', 'DeleteProperty')->name('delete.property');
        Route::get('/inactive/property/{id}', 'InactiveProperty')->name('inactive.property');
        Route::get('/active/property/{id}', 'ActiveProperty')->name('active.property');
    });


    //Parner route
    Route::controller(PartnerController::class)->group(function(){
        Route::get('/all/partner', 'AllPartner')->name('all.partner');
        Route::get('/add/partner', 'AddPartner')->name('add.partner');
        Route::post('/store/partner', 'StorePartner')->name('store.partner');
        Route::post('/update/partner', 'UpdatePartner')->name('update.partner');
        Route::get('/edit/partner/{id}', 'EditPartner')->name('edit.partner');
        Route::get('/delete/partner/{id}', 'DeletePartner')->name('delete.partner');
    });


     //Blog Category route
     Route::controller(BlogCategoryController::class)->group(function(){
        Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
        Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
        Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
        Route::post('/update/blog/category', 'UpdateBlogCategory')->name('update.blog.category');
        Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
        Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
    });


    //Blog route
    Route::controller(BlogController::class)->group(function(){
    Route::get('/all/blog', 'AllBlog')->name('all.blog');
    Route::get('/add/blog', 'AddBlog')->name('add.blog');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
});

});//Admin Middleware

Route::middleware(['auth','roles:agent'])->group(function(){

    Route::controller(AgentController::class)->group(function(){
    

        Route::get('/agent/profile', 'AgentProfile')->name('agent.profile');
        Route::get('/edit/user/profile', 'EditAgentProfile')->name('edit.agent.profile');
        Route::get('/agency/logout', 'AgencyLogout')->name('agent.logout');
        Route::get('/change/agent/password', 'ChangeAgentPassword')->name('change.agent.password');
        Route::post('/update/agent/password', 'UpdateAgentPassword')->name('update.agent.password');
        Route::post('/update/agent/profile', 'UpdateAgentProfile')->name('update.agent.profile');





        Route::get('/agent/dashboard', 'AgentDashboard')->name('agent.dashboard');
        Route::get('/all/agency/agent', 'AllAgencyAgent')->name('all.agency.agent');
        Route::get('/add/agency/agent', 'AddAgencyAgent')->name('add.agency.agent');
        Route::post('/store/agency/agent', 'StoreAgencyAgent')->name('store.agency.agent');
        Route::get('/edit/agency/agent/{id}', 'EditAgencyAgent')->name('edit.agency.agent');
        Route::post('/update/agency/agent/', 'UpdateAgencyAgent')->name('update.agency.agent');
        Route::get('/delete/agency/agent/{id}', 'DeleteAgencyAgent')->name('delete.agency.agent');



        

    });


    Route::controller(AgencyPropertyController::class)->group(function(){
        Route::get('/all/agency/property', 'AllAgencyProperty')->name('all.agency.property');
        Route::get('/add/agency/property', 'AddAgencyProperty')->name('add.agency.property');
        Route::post('/store/agency/property', 'StoreAgencyProperty')->name('store.agency.property');
        Route::get('/edit/agency/property/{id}', 'EditAgencyProperty')->name('edit.agency.property');
        Route::post('/update/agency/property', 'UpdateAgencyProperty')->name('update.agency.property');
        Route::get('/delete/agency/property/{id}', 'DeleteAgencyProperty')->name('delete.agency.property');


    });

    Route::controller(AgencyMessageController::class)->group(function(){
        Route::get('/all/agency/message', 'AllAgencyMessage')->name('all.agency.message');


    });
    
    
});

Route::get('/admin/login/', [AdminController::class, 'AdminLoginOption'])->name('admin.login.option');
Route::get('/agency/login/', [AgentController::class, 'AgentLoginOption'])->name('agent.login.option');
require __DIR__.'/auth.php';
