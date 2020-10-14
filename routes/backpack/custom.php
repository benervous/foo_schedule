<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('faculty', 'FacultyCrudController');
    Route::crud('department', 'DepartmentCrudController');
    Route::get('fullcalendar',[FullCalendarController::class, 'index']);
    Route::post('fullcalendar/create',[FullCalendarController::class, 'create']);
    Route::post('fullcalendar/update',[FullCalendarController::class, 'update']);
    Route::post('fullcalendar/delete',[FullCalendarController::class, 'delete']);
    // custom admin routes
}); // this should be the absolute last line of this file
