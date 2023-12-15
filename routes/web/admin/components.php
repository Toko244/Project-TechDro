<?php

use App\Http\Controllers\Admin\ComponentsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    Route::get('components/{sec?}', [ComponentsController::class, 'index'])->name('components.index');
    Route::get('component/create', [ComponentsController::class, 'create']);
    Route::post('component/create', [ComponentsController::class, 'store'])->name('component.create');
    Route::get('component/{id}/edit', [ComponentsController::class, 'edit']);
    Route::post('component/{id}/edit', [ComponentsController::class, 'update']);
    Route::get('component/{id}/destroy', [ComponentsController::class, 'destroy']);
    Route::post('component/arrange/{id}', [ComponentsController::class, 'arrange']);

    // Route::get('component/{sec}/posts/create', [ComponentPostsController::class, 'create'] );

    // Route::get('component/posts/{post}/edit', [PostController::class, 'edit'] )->name('componentpost.edit');
});
