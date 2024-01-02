<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator|Content Manager']], function () {
    //Post ------------------------------------->
    Route::get('section/{sec}/posts', [PostController::class, 'index'])->name('post.list');
    Route::get('section/{section_id}/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::get('component/{component_id}/posts/create', [PostController::class, 'create']);
    Route::post('section/{section_id}/posts/create', [PostController::class, 'store'])->name('post.store');
    Route::get('section/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::post('section/posts/{post}/edit', [PostController::class, 'update'])->name('post.update');
    Route::get('section/posts/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy');
    Route::delete('section/posts/{post}/file/{id}', [PostController::class, 'deletefiles'])->name('post.deletefiles');
    Route::delete('section/posts/delete-image/{id}', [PostController::class, 'deleteImage'])->name('post.delete-image');
});
