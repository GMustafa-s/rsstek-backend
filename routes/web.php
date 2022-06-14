<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\settings\GeneralController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\cms\cumtom\HomeController;
use App\Http\Controllers\cms\solution\SolutionController;
use Illuminate\Support\Facades\DB;

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

// slug based 

// $all_slugs = App\Models\PageCategory::all();


            //Frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('/');

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
})->name('/aboutus');

//Bussiness Card
Route::get('/business', function(){
    return view('frontend.business.index');
})->name('/business');

Route::get('business/workspace_detector', function(){
     return view(('frontend.business.workspace-detector'));
})->name('/workspace_detector');

Route::get('business/staff_tracker', function(){
    return view('frontend.business.staff-tracker');
})->name('/staff_tracker');

Route::get('business/heat_map', function(){
    return view('frontend.business.heat-map');
})->name('/heat_map');

Route::get('business/queue_counter', function(){
    return view('frontend.business.queue-detector');
})->name('/queue_counter');

Route::get('business/active_post', function(){
    return view('frontend.business.active-post');
})->name('/active_post');

Route::get('business/shelf_detector', function(){
    return view('frontend.business.shelf-detector');
})->name('/shelf_detector');

Route::get('business/neuro_counter', function(){
    return view('frontend.business.neuro-counter');
})->name('/neuro_counter');







            //Health Care Card
Route::get('/health_care', function(){
    return view('frontend.health_care.index');

})->name('/health_care');

Route::get('/health_care/face_mask_detector', function(){
    return view('frontend.health_care.face-mask-detector');

})->name('/face_mask_detector');

Route::get('/health_care/social_distance_detector', function(){
    return view('frontend.health_care.social-distance-detector');

})->name('/social_distance_detector');

Route::get('/health_care/thermal_camera', function(){
    return view('frontend.health_care.thermal-camera');

})->name('/thermal_camera');







        //Security Card
Route::get('/security', function(){
    return view('frontend.security.index');

})->name('/security');
Route::get('/security/auto_anpr', function(){
    return view('frontend.security.auto-anpr');

})->name('/auto_anpr');

Route::get('/security/crowd_detector', function(){
    return view('frontend.security.crowd-detector');

})->name('/crowd_detector');

Route::get('/security/direction_detector', function(){
    return view('frontend.security.direction-detector');

})->name('/direction_detector');

Route::get('/security/face_recognition', function(){
    return view('frontend.security.face-recognition');

})->name('/face_recognition');

Route::get('/security/neuro_detector', function(){
    return view('frontend.security.neuro-detector');

})->name('/neuro_detector');

Route::get('/security/neuro_left_object_detector', function(){
    return view('frontend.security.neuro-left-object-detector');

})->name('/neuro_left_object_detector');

Route::get('/security/pose_detector', function(){
    return view('frontend.security.pose-detector');

})->name('/pose_detector');




        //Work Safety Card
Route::get('/work_safety', function(){
    return view('frontend.work_safety.index');

})->name('/work_safety');

Route::get('/work_safety/hardhat_detector', function(){
    return view('frontend.work_safety.hardhat-detector');

})->name('/hardhat_detector');

Route::get('/work_safety/wear_detector', function(){
    return view('frontend.work_safety.wear-detector');

})->name('/wear_detector');






            //Solution Card
Route::get('/solutions', function(){
    return view('frontend.solutions.index');

})->name('/solutions');




            //Industries Solution Card
Route::get('/industries/health_care', function(){
    return view('frontend.industries.health-care');

})->name('/health_care');

Route::get('/industries/industrial', function(){
    return view('frontend.industries.industrial');

})->name('/industrial');

Route::get('/industries/public_safety', function(){
    return view('frontend.industries.public-safety');

})->name('/public_safety');

Route::get('/industries/real_estate', function(){
    return view('frontend.industries.real-estate');

})->name('/real_estate');

Route::get('/industries/retail', function(){
    return view('frontend.industries.retail');

})->name('/retail');

Route::get('/industries/transport_and_storage', function(){
    return view('frontend.industries.transport-and-storage');

})->name('/transport_and_storage');



            //Cases Card
Route::get('/cases', function(){
    return view('frontend.cases.index');

})->name('/cases');




//Demo Card
Route::get('/solutions/demo', function(){
    return view('frontend.solutions.demo');

})->name('/demo');



            //Integrations Card
Route::get('/integrations', function(){
    return view('frontend.integrations.index');

})->name('/integrations');



            //Camera Campare Card
Route::get('/camera/compare', function(){
    return view('frontend.camera.compare.camera-compare');

})->name('/camera/compare');


Route::get('/camera/detail', function(){
    return view('frontend.camera.compare.camera-detail');

})->name('/camera/detail');

// Route::get('/camera/compare/detail/{id}', function(){
//     return view('frontend.camera.compare.camera-detail');

// })->name('/camera/compare/detail/{id}');


// dashboard routes
Route::get('/login', function () {
    return view('admin.login');
})->name('login-user');

Route::get('/register', function () {
    return view('admin.register');
});

Route::get('/admin-dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::prefix('settings')->group(function () { 
   Route::resource('general',GeneralController::class);
   Route::post('add-site-info', [GeneralController::class, 'createSiteInfo'])->name('add.siteinfo');
   Route::post('add-contatct-info', [GeneralController::class, 'createContactInfo'])->name('add.contactInfo');
   Route::post('add-copy-right', [GeneralController::class, 'createCopyRight'])->name('add.copyright');
   Route::post('add-soacials', [GeneralController::class, 'createSocials'])->name('add.socials');
   Route::post('edit-soacials/{id}', [GeneralController::class, 'editSocials'])->name('edit.socials');
   Route::get('delete-soacials/{id}', [GeneralController::class, 'deleteSicials'])->name('del.socials');
});

Route::prefix('contactus')->group(function () { 
    Route::post('/add', [ContactUsController::class, 'store'])->name('add.contactus');
    Route::get('/show', [ContactUsController::class, 'show'])->name('show.contactus');
 });

 Route::get('contactus', [ContactUsController::class, 'index'])->name('/contactus');
 //demo routes
 Route::prefix('demo')->group(function () { 
    Route::post('/add', [ContactUsController::class, 'demoStore'])->name('add.demo');
    Route::get('/show', [ContactUsController::class, 'demoShow'])->name('show.demo');
 });

 Route::prefix('intallation')->group(function () { 
    Route::post('/add', [ContactUsController::class, 'installationStore'])->name('add.intallation');
    Route::get('/show', [ContactUsController::class, 'intallationShow'])->name('show.intallation');
 });

 Route::prefix('cmd')->group(function () { 
    Route::get('/custom/home', [HomeController::class, 'index'])->name('cms.custom.home');
    Route::get('/show', [ContactUsController::class, 'intallationShow'])->name('show.intallation');
 });

 Route::prefix('solution')->group(function () { 
    Route::get('/', [SolutionController::class, 'index'])->name('cms.solution.index');
    Route::get('/create', [SolutionController::class, 'create'])->name('cms.solution.create');
    Route::post('/store', [SolutionController::class, 'store'])->name('cms.solution.store');
    Route::get('/edit/{id}', [SolutionController::class, 'edit'])->name('cms.solution.edit');
    Route::post('/update/{id}', [SolutionController::class, 'update'])->name('cms.solution.update');
    Route::get('/delete/{id}', [SolutionController::class, 'destroy'])->name('cms.solution.destroy');
    Route::get('/sub-page', [SolutionController::class, 'subPage'])->name('cms.solution.subpage');
    Route::get('/sub-page/create', [SolutionController::class, 'subCreate'])->name('cms.solution.subcreate');
    Route::post('/sub-page/store', [SolutionController::class, 'sobStore'])->name('cms.solution.substore');
    Route::get('/sub-page/edit/{id}', [SolutionController::class, 'subEdit'])->name('cms.solution.subEdit');
    Route::post('/sub-page/update/{id}', [SolutionController::class, 'subUpdate'])->name('cms.solution.subupdate');
    Route::get('/sub-page/delete/{id}', [SolutionController::class, 'subDelete'])->name('cms.solution.subdelete');
    Route::post('/add-section/{id}', [SolutionController::class, 'addSection'])->name('cms.solution.section.add');
    Route::post('/update-section/{id}', [SolutionController::class, 'updateSection'])->name('cms.solution.section.update');
   
 });
 Route::get('/delete-section/{id}', [SolutionController::class, 'deleteSection'])->name('cms.solution.section.delete');

Route::get('solution/{any}',[SolutionController::class, 'showSlug'])->name('category.slug');
Route::get('solution/{solution}/{name}',[SolutionController::class, 'showSubSlug'])->name('category.sub.slug');