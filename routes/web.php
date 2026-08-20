<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CheckUserPrivileges;


Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homeIndex');
});
//, 'with_privileges'
Route::middleware(['auth', 'with.privileges', 'verified'])->group(function () {

    /*
     * Home Profile
     */
    Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
        Route::get('/profile', 'profile')->name('homeUserProfile');
    });
    /*
     * Dashboard
     */
    Route::controller(\App\Http\Controllers\DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    /*
     * USER
     */
    Route::middleware(['role:admin'])->group(function () {
        Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
            Route::get('/dashboard/users', 'index')->name('usersIndex');
            //Route::get('/dashboard/user/profile', 'profile')->name('userProfile');
            Route::get('/dashboard/user/edit/{user}', 'edit')->name('userEdit');
            Route::put('/dashboard/user/update/{user}', 'update')->name('userUpdate');
            Route::delete('/dashboard/user/destroy/{user}', 'destroy')->name('userDestroy');
        });
    });

    /*
     * PROFILE
     */
    Route::controller(\App\Http\Controllers\ProfileController::class)->group(function () {
        Route::get('/dashboard/user/profile', 'index')->name('userProfile');
        Route::put('/dashboard/user/update-information', 'updateInformation')->name('updateProfileInformation'); //2026-02-02 20:10:42
        Route::put('/dashboard/user/update-password', 'updatePassword')->name('updateUserPassword');
    });
    /*
    ** ROLES
    */
    Route::controller(\App\Http\Controllers\Laratrust\RoleController::class)->group(function () {
        Route::get('/dashboard/roles', 'index')->name('rolesIndex');
        Route::get('/dashboard/role/create', 'create')->name('roleCreate');
        Route::post('/dashboard/role/store', 'store')->name('roleStore');
        Route::get('/dashboard/role/edit/{role}', 'edit')->name('roleEdit');
        Route::put('/dashboard/role/update/{role}', 'update')->name('roleUpdate');
        Route::delete('/dashboard/role/destroy/{role}', 'destroy')->name('roleDestroy');
    });
    /*
    ** PERMISSIONS
    */
    Route::controller(\App\Http\Controllers\Laratrust\PermissionController::class)->group(function () {
        Route::get('/dashboard/permissions', 'index')->name('permissionsIndex');
        Route::get('/dashboard/permission/create', 'create')->name('permissionCreate');
        Route::post('/dashboard/permission/store', 'store')->name('permissionStore');
        Route::get('/dashboard/permission/edit/{permission}', 'edit')->name('permissionEdit');
        Route::put('/dashboard/permission/update/{permission}', 'update')->name('permissionUpdate');
        Route::delete('/dashboard/permission/destroy/{permission}', 'destroy')->name('permissionDestroy');
    });
    /*
    ** ROLE PERMISSIONS
    */
    Route::controller(\App\Http\Controllers\Laratrust\RolePermissionController::class)->group(function () {
        Route::get('/dashboard/role/{role}/permissions', 'index')->name('rolePermissionsIndex');
        Route::get('/dashboard/role/{role}/permission/create', 'create')->name('rolePermissionCreate');
        Route::post('/dashboard/role/{role}/permission/store', 'store')->name('rolePermissionStore');
        Route::delete('/dashboard/role/{role}/permission/{permission}/destroy', 'destroy')->name('rolePermissionDestroy');
    });
    /*
     * USER ROLES
     */
    Route::controller(\App\Http\Controllers\Laratrust\UserRoleController::class)->group(function () {
        Route::get('/dashboard/user/{user}/roles', 'index')->name('userRolesIndex');
        Route::get('/dashboard/user/{user}/role/create', 'create')->name('userRoleCreate');
        Route::post('/dashboard/user/{user}/role/create', 'store')->name('userRoleStore');
        Route::delete('/dashboard/user/{user}/role/{role}/destroy', 'destroy')->name('userRoleDestroy');
    });
    /*
* USER PERMISSION
*/
    Route::controller(\App\Http\Controllers\Laratrust\UserPermissionController::class)->group(function () {
        Route::get('/dashboard/user/{user}/permissions', 'index')->name('userPermissionsIndex');
        Route::get('/dashboard/user/{user}/permission/create', 'create')->name('userPermissionCreate');
        Route::post('/dashboard/user/{user}/permission/create', 'store')->name('userPermissionStore');
        Route::delete('/dashboard/user/{user}/permission/{permission}/destroy', 'destroy')->name('userPermissionDestroy');
    });
    /*
    ** POSTS
    */
    Route::controller(\App\Http\Controllers\PostController::class)->group(function () {
        Route::get('/dashboard/posts', 'index')->name('postsIndex');
        Route::get('/dashboard/post/create', 'create')->name('postCreate');
        Route::post('/dashboard/post/store', 'store')->name('postStore');
        Route::get('/dashboard/post/edit/{post}', 'edit')->name('postEdit');
        Route::put('/dashboard/post/update/{post}', 'update')->name('postUpdate');
        Route::delete('/dashboard/post/destroy/{post}', 'destroy')->name('postDestroy');
    });
    /*
     * *
     */
    Route::controller(\App\Http\Controllers\PrayerTimesDefaultSettingsController::class)->group(function () {
        Route::get('/dashboard/prayer-time-default-settings', 'index')->name('prayerTimeDefaultSettingsIndex');
        Route::put('/dashboard/prayer-time-default-settings/update', 'update')->name('prayerTimeDefaultSettingsUpdate');
        //{prayerTimesDefaultSettings}
    });

});
