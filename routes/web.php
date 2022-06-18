<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\settings\GeneralController;

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
            //Frontend
Route::get('/', function () {
    return view('frontend.index');
})->name('/');

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('frontend.contactus');
})->name('/contactus');

//Bussiness Card
Route::get('/business', function(){
    return view('frontend.business.index');

})->name('business');

Route::prefix('/business')->group(function(){



    Route::get('/workspace_detector', function(){
         return view(('frontend.business.workspace-detector'));
    })->name('workspace.detector');

    Route::get('/staff_tracker', function(){
        return view('frontend.business.staff-tracker');
    })->name('staff.tracker');

    Route::get('/heat_map', function(){
        return view('frontend.business.heat-map');
    })->name('heat.map');

    Route::get('/queue_counter', function(){
        return view('frontend.business.queue-detector');
    })->name('queue.counter');

    Route::get('/active_post', function(){
        return view('frontend.business.active-post');
    })->name('active.post');

    Route::get('/shelf_detector', function(){
        return view('frontend.business.shelf-detector');
    })->name('shelf.detector');

    Route::get('/neuro_counter', function(){
        return view('frontend.business.neuro-counter');
    })->name('neuro.counter');

});








            //Health Care Card
Route::get('/health_care', function(){
    return view('frontend.health_care.index');

})->name('health.care');

Route::prefix('/health_care')->group(function(){

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
Route::get('/security', function(){
    return view('frontend.security.index');

})->name('security');

Route::prefix('/security')->group(function(){

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
Route::get('/work_safety', function(){
    return view('frontend.work_safety.index');

})->name('work.safety');

Route::prefix('work_safety')->group(function(){

    Route::get('/hardhat_detector', function(){
        return view('frontend.work_safety.hardhat-detector');

    })->name('hardhatdetector');

    Route::get('/wear_detector', function(){
        return view('frontend.work_safety.wear-detector');

    })->name('wear.detector');
});






            //Solution Card
Route::get('/solutions', function(){
    return view('frontend.solutions.index');

})->name('solutions');




            //Industries Solution Card
Route::prefix('/industries')->group(function(){

    Route::get('/health_care', function(){
        return view('frontend.industries.health-care');

    })->name('health.care');

    Route::get('/industrial', function(){
        return view('frontend.industries.industrial');

    })->name('industrial');

    Route::get('/public_safety', function(){
        return view('frontend.industries.public-safety');

    })->name('public.safety');

    Route::get('/real_estate', function(){
        return view('frontend.industries.real-estate');

    })->name('real.estate');

    Route::get('/retail', function(){
        return view('frontend.industries.retail');

    })->name('retail');

    Route::get('/transport_and_storage', function(){
        return view('frontend.industries.transport-and-storage');

    })->name('transport.and.storage');
});



            //Cases Card
Route::get('/cases', function(){
    return view('frontend.cases.index');

})->name('cases');




//Demo Card
Route::get('/solutions/demo', function(){
    return view('frontend.solutions.demo');

})->name('demo');



            //Integrations Card
Route::get('/integrations', function(){
    return view('frontend.integrations.index');

})->name('integrations');



            //Camera Campare Card
Route::get('/camera/compare', function(){
    return view('frontend.camera.compare.camera-compare');

})->name('camera.compare');


Route::get('/camera/detail', function(){
    return view('frontend.camera.compare.camera-detail');

})->name('camera.detail');

// Route::get('/camera/compare/detail/{id}', function(){
//     return view('frontend.camera.compare.camera-detail');

// })->name('/camera/compare/detail/{id}');


// dashboard routes
// Route::get('/login', function () {
//     return view('admin.login');
// })->name('login-user');

// Route::get('/register', function () {
//     return view('admin.register');
// });

Route::get('/admin-dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth');


Route::prefix('settings')->group(function () {

   Route::resource('general',GeneralController::class);
   Route::post('add-soacials', [GeneralController::class, 'ph'])->name('add.socials');
   Route::post('edit-soacials/{id}', [GeneralController::class, 'editSocials'])->name('edit.socials');
   Route::get('delete-soacials/{id}', [GeneralController::class, 'deleteSicials'])->name('del.socials');
});

Route::prefix('contactus')->group(function () {
    Route::post('/add', [ContactUsController::class, 'store'])->name('add.contactus');
    Route::get('/show', [ContactUsController::class, 'show'])->name('show.contactus');
 });

 Route::get('contactus', [ContactUsController::class, 'index'])->name('/contactus');


Route::prefix('/admin')->group(function(){

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/user/{id}', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
    Route::resource('roles', RoleController::class)->middleware('auth', 'role:admin');
    Route::resource('permissions', PermissionController::class)->middleware('auth', 'role:admin');

    //Assign permission to role
    Route::post('roles/{role}/permissions', [RoleController::class, 'assignPermission'])->name('roles.assign.permissions');
    //Revoke permission from role
    Route::delete('roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    // //Assign role to permission
    // Route::post('permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.assign.roles');

    // //Revoke permission from role
    // Route::delete('permissions/{permission}/roles/{role}', [PermissionController::class, 'revokeRole'])->name('permissions.roles.revoke');


    //User Management roles and
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('users.store');
    Route::get('user/{id}/show', [UserController::class, 'show'])->name('users.show');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('user/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('user/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    //Assign role to user
    Route::post('user/{user}/roles', [UserController::class, 'assignRole'])->name('users.assign.role');
    //Revoke role from user
    Route::delete('user/role/delete', [UserController::class, 'revokeRole'])->name('users.revoke.roles');


    // //Assign permission to user
    // Route::post('user/{user}/permissions', [UserController::class, 'assignPermission'])->name('users.assign.permission');
    // //Revoke permission from user
    // Route::delete('user/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.revoke.permission');
});










