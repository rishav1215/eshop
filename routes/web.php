<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class,"home"])->name("homepage");
Route::get("/login", [HomeController::class,"login"])->name("login");
Route::get("/admin", [AdminController::class,"dashboard"])->name("admin.dashboard");
Route::get("/admin/category", [AdminController::class,"manageCategory"])->name("admin.manageCategory");
Route::post("/admin/category", [AdminController::class,"createCategory"])->name("admin.createCategory");