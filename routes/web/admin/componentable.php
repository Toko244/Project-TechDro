<?php

use App\Http\Controllers\Admin\ComponentableController;
use App\Http\Controllers\Admin\ComponentPostsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    Route::get('/componentPosts/{component_id}', [ComponentPostsController::class, 'index'])->name('componentPosts.index');
    Route::get('/componentPosts/create/{component_id}', [ComponentPostsController::class, 'create']);
    Route::post('/componentPosts/create', [ComponentPostsController::class, 'store'])->name('component.store');
    Route::get('/componentPosts/delete/{id}', [ComponentPostsController::class, 'destroy'])->name('componentPosts.destroy');

    // componantable //
    Route::post('componentable/sort', [ComponentableController::class, 'sort'])->name('componentable.sort');
    Route::get('componentable/{id}', [ComponentableController::class, 'index'])->name('componentable.index');
    Route::get('componentable/create/{id}', [ComponentableController::class, 'create'])->name('componanatable.create');
    Route::post('componentable/create', [ComponentableController::class, 'store'])->name('componanatable.store');
    Route::get('componentable/edit/{componentable}', [ComponentableController::class, 'edit'])->name('componanatable.edit');
    Route::put('componentable/edit', [ComponentableController::class, 'udpdate'])->name('componanatable.update');
    Route::get('componentable/delete/{componentable}', [ComponentableController::class, 'destroy'])->name('componanatable.destroy');
});
