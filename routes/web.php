<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostReportController;
 
// REPORT ROUTES: place these before the resource route.
Route::get('/posts/reports', [PostReportController::class, 'index'])
    ->name('posts.reports.index');
 
Route::get('/posts/reports/pdf', [PostReportController::class, 'exportPdf'])
    ->name('posts.reports.pdf');
 
Route::get('/posts/reports/csv', [PostReportController::class, 'exportCsv'])
    ->name('posts.reports.csv');
 
// EXISTING CRUD ROUTES
Route::resource('posts', PostController::class);