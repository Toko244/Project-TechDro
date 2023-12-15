<?php

use App\Http\Controllers\Admin\SectionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator|Content Manager']], function () {
    Route::get('sections', [SectionController::class, 'index'])->name('section.list');
    Route::get('sections/create', [SectionController::class, 'create']);
    Route::post('sections/create', [SectionController::class, 'store']);
    Route::get('sections/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
    Route::post('sections/edit/{id}', [SectionController::class, 'update']);
    Route::get('sections/destroy/{id}', [SectionController::class, 'destroy']);
    Route::post('sections/arrange', [SectionController::class, 'arrange']);
});
