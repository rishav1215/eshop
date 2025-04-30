<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name("homepage");
Route::get("/login", [HomeController::class, "login"])->name("login");


Route::prefix("admin")->group(function () {
    Route::get("", [AdminController::class, "dashboard"])->name("admin.dashboard");
    Route::controller(CategoryController::class)->group(function () {

        Route::get("/category",  "manageCategory")->name("admin.manageCategory");
        Route::post("/category", action: "createCategory")->name("admin.createCategory");
        Route::delete("/category/{id}", "deleteCategory")->name("admin.deleteCategory");
        
        Route::put("/category/{id}", "updateCategory")->name("admin.updateCategory");

    });

    Route:: controller(ProductController::class)->group(function(){
    Route::get("/product",  "index")->name("admin.manageProduct");
    Route::get("/product/insert", "insert")->name("admin.insertProduct");
    Route::post("/product/insert","store")->name("admin.storeProduct");
    Route::get("/product/{id}", "deleteProduct")->name("admin.deleteProduct");
    });

});