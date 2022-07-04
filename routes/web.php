<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\cms\cumtom\HomeController;




use App\Http\Controllers\cms\custom\DemoController;
use App\Http\Controllers\cms\custom\CasesController;
use App\Http\Controllers\settings\GeneralController;
use App\Http\Controllers\cms\camera\CameraController;
use App\Http\Controllers\cms\solution\SolutionController;
use App\Http\Controllers\cms\custom\CustomPagesController;
use App\Http\Controllers\cms\custom\EditAboutusController;
use App\Http\Controllers\cms\custom\IntegrationController;

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
    dd("migrated and db seeded");

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
    Route::post('/update/{id}', [CustomPagesController::class, 'update'])->name('cms.custom.update.meta');
    Route::post('home-header/update', [CustomPagesController::class, 'homeHeaderUpdate'])->name('cms.custom.update.header');
    Route::post('hero-section/update', [CustomPagesController::class, 'homeHeroSectionUpdate'])->name('cms.custom.update.hero');
    Route::post('what-we-use/update', [CustomPagesController::class, 'homeWhatWeUseUpdate'])->name('cms.custom.update.wwu');
    Route::post('what-we-use/add', [CustomPagesController::class, 'homeWhatWeUseUpadd'])->name('cms.custom.add.wwu');
    Route::get('what-we-use/delete/{id}', [CustomPagesController::class, 'homeWhatWeUseDelete'])->name('cms.custom.delete.wwu');
    Route::post('aboutus/title', [CustomPagesController::class, 'aboutusTitle'])->name('cms.custom.aboutus.title');
    Route::post('aboutus/add', [CustomPagesController::class, 'aboutusAdd'])->name('cms.custom.aboutus.add');
    Route::get('aboutus/delete/{id}', [CustomPagesController::class, 'aboutusDelete'])->name('cms.custom.aboutus.delete');
    //features section
    Route::post('features/update', [CustomPagesController::class, 'faturesUpdate'])->name('cms.custom.features.update');
    //business section
    Route::post('business/title', [CustomPagesController::class, 'busniessTitle'])->name('cms.custom.business.title');
    Route::post('business/add', [CustomPagesController::class, 'busniessadd'])->name('cms.custom.business.add');
    Route::get('business/delete/{id}', [CustomPagesController::class, 'businessDelete'])->name('cms.custom.business.delete');
      //broadcast section
      Route::post('broadcast/title', [CustomPagesController::class, 'broadcastTitle'])->name('cms.custom.broadcast.title');
      Route::post('broadcast/add', [CustomPagesController::class, 'broadcastadd'])->name('cms.custom.broadcast.add');
      Route::get('broadcast/delete/{id}', [CustomPagesController::class, 'broadcastDelete'])->name('cms.custom.broadcast.delete');



    Route::get('delete/{id}', [CameraController::class, 'destroy'])->name('cms.camera.delete');
    Route::get('/section/delete/{id}', [CameraController::class, 'deleteSection'])->name('cms.camera.deletesection');

    // make home page dynamic ..all routes
    Route::post('/feature', [CustomPagesController::class, 'homeFeatureSection'])->name('cms.custome.feature.update');
    Route::post('/choice-us', [CustomPagesController::class, 'homeChoiceUsSection'])->name('cms.custome.choice-us-section.update');

    // make aboutus page dynamic ..all routes
    Route::get('/aboutus/edit/{id}', [EditAboutusController::class, 'editAboutus'])->name('cms.custome.edit.aboutus');

    Route::post('/aboutus-page-heading', [EditAboutusController::class, 'aboutusHeadingUpdate'])->name('cms.custome.aboutus_page_heading.update');

    Route::post('/aboutus-top_info-section', [EditAboutusController::class, 'topInfoSectionUpdate'])->name('cms.custome.top_info_section.update');

    Route::post('/aboutus-section', [EditAboutusController::class, 'aboutusSectionUpdate'])->name('cms.custome.aboutus_section.update');

    Route::post('/ourwork-section', [EditAboutusController::class, 'ourworkSectionUpdate'])->name('cms.custome.ourwork_section.update');

    Route::post('/chief-officer', [EditAboutusController::class, 'chiefOfficeUpdate'])->name('cms.custome.chief-office.update');

    Route::post('/our-product', [EditAboutusController::class, 'ourProductUpdate'])->name('cms.custome.our-product.update');

    Route::post('/product-info-section', [EditAboutusController::class, 'productInfoSectionUpdate'])->name('cms.custome.product-info-section.update');

    Route::post('/our-customer', [EditAboutusController::class, 'ourCustomerUpdate'])->name('cms.custome.our-customer.update');

    // make contactus page dynamic ..all routes
    Route::get('/contactus/edit/{id}', [EditAboutusController::class, 'editContactus'])->name('cms.custome.edit.contactus');
    Route::post('/contactus-main-section', [EditAboutusController::class, 'contactusMainUpdate'])->name('cms.custome.contactus-main-section.update');

    // make integration page dynamic ..all routes
    Route::get('/integration/edit/{id}', [IntegrationController::class, 'editIntegration'])->name('cms.custome.edit.integration');

    //header update
    Route::post('/header/update', [IntegrationController::class, 'headerUpdate'])->name('cms.custome.integration-header.update');

    //camera section heading and description update
    Route::post('/camera-section/update', [IntegrationController::class, 'cameraSectionUpdate'])->name('cms.custome.integration-camera_section.update');

    // second camera section heading update
    Route::post('/second-camera-section/update', [IntegrationController::class, 'secondCameraSectionUpdate'])->name('cms.custome.integration-second-camera-section.update');
    // second camera section create
    Route::post('/second-camera-section/create', [IntegrationController::class, 'secondCameraSectionCreate'])->name('cms.custome.integration-second-camera-section.create');
    // second camera section delete
    Route::delete('/second-camera-section/delete/{id}', [IntegrationController::class, 'secondCameraSectionDelete'])->name('cms.custome.integration-second-camera-section.delete');

    // control section heading update
    Route::post('/control-section/update', [IntegrationController::class, 'controlSectionUpdate'])->name('cms.custome.integration-control-section.update');
    // control section create
    Route::post('/control-section/create', [IntegrationController::class, 'controlSectionCreate'])->name('cms.custome.integration-control-section.create');
    // control section delete
    Route::delete('/control-section/delete/{id}', [IntegrationController::class, 'controlSectionDelete'])->name('cms.custome.integration-control-section.delete');

    // outputs section heading update
    Route::post('/outputs-section/update', [IntegrationController::class, 'outputsSectionUpdate'])->name('cms.custome.integration-outputs-section.update');
    // outputs section create
    Route::post('/outputs-section/create', [IntegrationController::class, 'outputsSectionCreate'])->name('cms.custome.integration-outputs-section.create');
    // outputs section delete
    Route::delete('/outputs-section/delete/{id}', [IntegrationController::class, 'outputsSectionDelete'])->name('cms.custome.integration-outputs-section.delete');

    // management section heading update
    Route::post('/management-section/update', [IntegrationController::class, 'managementSectionUpdate'])->name('cms.custome.integration-management-section.update');
    // management section create
    Route::post('/management-section/create', [IntegrationController::class, 'managementSectionCreate'])->name('cms.custome.integration-management-section.create');
    // management section delete
    Route::delete('/management-section/delete/{id}', [IntegrationController::class, 'managementSectionDelete'])->name('cms.custome.integration-management-section.delete');

    // providers section heading update
    Route::post('/providers-section/update', [IntegrationController::class, 'providersSectionUpdate'])->name('cms.custome.integration-providers-section.update');
    // providers section create
    Route::post('/providers-section/create', [IntegrationController::class, 'providersSectionCreate'])->name('cms.custome.integration-providers-section.create');
    // providers section delete
    Route::delete('/providers-section/delete/{id}', [IntegrationController::class, 'providersSectionDelete'])->name('cms.custome.integration-providers-section.delete');

    // communication tools section heading update
    Route::post('/communication-tools-section/update', [IntegrationController::class, 'communicationToolsSectionUpdate'])->name('cms.custome.integration-communication-tools-section.update');
    // communication tools section create
    Route::post('/communication-tools-section/create', [IntegrationController::class, 'communicationToolsSectionCreate'])->name('cms.custome.integration-communication-tools-section.create');
    // communication tools section delete
    Route::delete('/communication-tools-section/delete/{id}', [IntegrationController::class, 'communicationToolsSectionDelete'])->name('cms.custome.integration-communication-tools-section.delete');
    //End integration page

                //Cases Page
    Route::get('/cases/edit/{id}', [CasesController::class, 'editCases'])->name('cms.custome.edit.cases');
    //heading section
    Route::post('/cases/header/update', [CasesController::class, 'headerUpdate'])->name('cms.custome.cases-header.update');


                //Demo Page
    Route::get('/demo/edit/{id}', [DemoController::class, 'editDemo'])->name('cms.custome.edit.demo');


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


//solution meta routes
Route::post('cms/solution/update/{id}', [SolutionController::class,'solutionPageMetaInfo'])->name('cms.solution..meta.update');
Route::post('cms/solution/subpage/meta/update/{id}', [SolutionController::class,'solutionSubPageMetaInfo'])->name('cms.solution.sub.meta.update');
Route::post('cms/camera/meta/update/{id}', [CameraController::class,'MetaInfo'])->name('cms.camera.meta.update');
