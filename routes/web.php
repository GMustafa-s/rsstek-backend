<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\cms\cumtom\HomeController;
use App\Http\Controllers\settings\GeneralController;




use App\Http\Controllers\cms\camera\CameraController;
use App\Http\Controllers\cms\solution\SolutionController;
use App\Http\Controllers\cms\custom\CustomPagesController;
use App\Http\Controllers\HomePageController;

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

// Make applicaton refresh
Route::get('cache', function () {
    Artisan::call('optimize:clear');
    dd("Cache is cleared");

});
Route::get('migrate', function () {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
    dd("migrated");

});

//change language
Route::get('change-language/{language}', [GeneralController::class, 'changeLanguage'])->name('change.language');
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







            // Health Care Card

Route::prefix('/health_care')->group(function(){

    Route::get('', function(){
        return view('frontend.health_care.index');

    })->name('health.care');

    Route::get('/face_mask_detector', function(){
        return view('frontend.health_care.face-mask-detector');

    })->name('face.mask.detector');

    Route::get('/social_distance_detector', function(){
        return view('frontend.health_care.social-distance-detector');

    })->name('social.distance.detector');

    Route::get('/thermal_camera', function(){
        return view('frontend.health_care.thermal-camera');

    })->name('thermal.camera');
});





            //Security Card
Route::prefix('/security')->group(function(){

    // Route::view('', 'frontend.security.index')->name('security');
    Route::get('', function(){
        return view('frontend.security.index');

    })->name('security');

    Route::get('/auto_anpr', function(){
        return view('frontend.security.auto-anpr');

    })->name('auto.anpr');

    Route::get('/crowd_detector', function(){
        return view('frontend.security.crowd-detector');

    })->name('crowd.detector');

    Route::get('/direction_detector', function(){
        return view('frontend.security.direction-detector');

    })->name('direction.detector');

    Route::get('/face_recognition', function(){
        return view('frontend.security.face-recognition');

    })->name('face.recognition');

    Route::get('/neuro_detector', function(){
        return view('frontend.security.neuro-detector');

    })->name('neuro.detector');

    Route::get('/neuro_left_object_detector', function(){
        return view('frontend.security.neuro-left-object-detector');

    })->name('neuro.left.object.detector');

    Route::get('/pose_detector', function(){
        return view('frontend.security.pose-detector');

    })->name('pose.detector');


});


       //Work Safety Card


Route::prefix('/work_safety')->group(function(){

    Route::get('', function(){
        return view('frontend.work_safety.index');

    })->name('work.safety');

    Route::get('/hardhat_detector', function(){
        return view('frontend.work_safety.hardhat-detector');

    })->name('hardhat.detector');

    Route::get('/wear_detector', function(){
        return view('frontend.work_safety.wear-detector');

    })->name('wear.detector');
});





            //Solution Card
Route::get('/solutions', function(){
    return view('frontend.solutions.index');

})->name('/solutions');




            //Industries Solution Card
Route::get('/industries/health_care', function(){
    return view('frontend.industries.health-care');

})->name('industries/health_care');

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

})->name('demo');



            //Integrations Card
Route::get('/integrations', function(){
    return view('frontend.integrations.index');

})->name('/integrations');


Route::prefix('/camera/compare')->group(function () {
    Route::get('/', [CameraController::class, 'compare'])->name('/camera/compare');
    Route::get('/{id}', [CameraController::class, 'compareCamera'])->name('camera.compare');

});


// Route::get('/camera/detail', function(){
//     return view('frontend.camera.compare.camera-detail');

// })->name('/camera/detail');

// Route::get('/camera/compare/detail/{id}', function(){
//     return view('frontend.camera.compare.camera-detail');

// })->name('/camera/compare/detail/{id}');



Route::get('/admin', function () {

    return view('admin.index');
})->name('dashboard')->middleware('auth');

Route::group(['middleware' => ['auth']], function() {
    /**
     * User Routes
     */
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', [UserController::class,'index'])->name('users.index');
        Route::get('/create',  [UserController::class,'create'])->name('users.create');
        Route::post('/create',  [UserController::class,'store'])->name('users.store');
        Route::get('/{user}/show',  [UserController::class,'show'])->name('users.show');
        Route::get('/{user}/edit',  [UserController::class,'edit'])->name('users.edit');
        Route::put('/{user}/update',  [UserController::class,'update'])->name('users.update');
        Route::delete('/{user}/delete',  [UserController::class,'destroy'])->name('users.destroy');
    });

    Route::prefix('settings')->group(function () {
        Route::resource('general',GeneralController::class)->middleware('auth');;
        Route::post('add-site-info', [GeneralController::class, 'createSiteInfo'])->name('add.siteinfo');
        Route::post('add-contatct-info', [GeneralController::class, 'createContactInfo'])->name('add.contactInfo');
        Route::post('add-copy-right', [GeneralController::class, 'createCopyRight'])->name('add.copyright');
        Route::post('add-soacials', [GeneralController::class, 'createSocials'])->name('add.socials');
        Route::post('edit-soacials/{id}', [GeneralController::class, 'editSocials'])->name('edit.socials');
        Route::get('delete-soacials/{id}', [GeneralController::class, 'deleteSicials'])->name('del.socials');
        Route::post('add-language', [GeneralController::class, 'addLangugae'])->name('add.language');

     });

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

 Route::prefix('cms')->group(function () {
    Route::get('/custom/home', [HomeController::class, 'index'])->name('cms.custom.home');
    Route::get('/show', [ContactUsController::class, 'intallationShow'])->name('cms.show.intallation');
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

 // all solution listings here
Route::get('/all-solutions', [SolutionController::class, 'allSolutions'])->name('all.solutions');

 Route::get('/delete-section/{id}', [SolutionController::class, 'deleteSection'])->name('cms.solution.section.delete');

Route::get('solution/{any}',[SolutionController::class, 'showSlug'])->name('category.slug');
Route::get('solution/{solution}/{name}',[SolutionController::class, 'showSubSlug'])->name('category.sub.slug');

Route::prefix('cms/camera')->group(function () {
    Route::get('/', [CameraController::class, 'index'])->name('cms.camera.index');
    Route::get('/create', [CameraController::class, 'create'])->name('cms.camera.create');
    Route::post('/store', [CameraController::class, 'store'])->name('cms.camera.store');
    Route::get('/edit/{id}', [CameraController::class, 'edit'])->name('cms.camera.edit');
    Route::post('/update/{id}', [CameraController::class, 'update'])->name('cms.camera.update');
    Route::get('delete/{id}', [CameraController::class, 'destroy'])->name('cms.camera.delete');
    Route::get('/section/delete/{id}', [CameraController::class, 'deleteSection'])->name('cms.camera.deletesection');


});
Route::prefix('cms/custompages')->group(function () {
    Route::get('/', [CustomPagesController::class, 'index'])->name('cms.custom.index');
    Route::get('/edit/{id}', [CustomPagesController::class, 'edit'])->name('cms.custom.edit');
    Route::post('/update/{id}', [CustomPagesController::class, 'update'])->name('cms.custom.update');
    Route::get('delete/{id}', [CameraController::class, 'destroy'])->name('cms.camera.delete');
    Route::get('/section/delete/{id}', [CameraController::class, 'deleteSection'])->name('cms.camera.deletesection');

    //home page dynamic ..all routes
    Route::post('/feature', [CustomPagesController::class, 'homeFeatureSection'])->name('cms.custome.feature.update');
    Route::post('/choice-us', [CustomPagesController::class, 'homeChoiceUsSection'])->name('cms.custome.choice-us-section.update');

});

Route::get('camera/{any}',[CameraController::class, 'showSlug'])->name('camera.slug');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('permissions', PermissionsController::class);
Route::resource('roles', RoleController::class);
Route::post('roles/assign-permission/{id}', [RoleController::class,'assignPermission'])->name('roles.assign.permissions');
Route::post('roles/revok', [PermissionsController::class,'revokeRole'])->name('users.revoke.roles');

Route::get('/solution-index', function () {
    return view('frontend.solutions.demo');
})->name('/');
