<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\template\DashboardController;
use App\Http\Controllers\template\TestController;
use App\Http\Controllers\template\CategoryController;
use App\Http\Controllers\template\SubcategoryController;
use App\Http\Controllers\template\ProductsController;
use App\Http\Controllers\template\CustomerController;

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

Route::get('/', function () {
    return view('template.pages.analytics');
})->name('admin');
Route::get('Output_view',[DashboardController::class,'shopnil'])->name('dashboard');
Route::get('Analytics-admin',[DashboardController::class,'analytics'])->name('analytics');


                                    // Category
Route::get('/category/list',[CategoryController::class,'list'])->name('categorylist');
Route::get('/create-category',[CategoryController::class,'createForm'])->name('category.form');
Route::get('/update-category',[CategoryController::class,'updateForm'])->name('category.update');
Route::post('/category-store',[CategoryController::class,'store'])->name('store.data');
Route::get('/category-delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/categoryedit/{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
Route::put('/update-category-submit/{id}',[CategoryController::class,'update'])->name('category.do.update');


                                // SubCategory
Route::get('/subcategory-list',[SubcategoryController::class,'subcategorylist'])->name('subcategory.list');
Route::get('/subcategoryform',[SubcategoryController::class,'subcategoryform'])->name('subcategory.form');
Route::post('/subcategory-store',[SubcategoryController::class,'subcategorystore'])->name('substore.data');
Route::get('/subcategory-delete/{id}',[SubcategoryController::class,'subdestroy'])->name('subcategory.delete');
Route::get('/subcategory-edit/{id}',[SubcategoryController::class,'subedit'])->name('subcategory.edit');
Route::put('/update-subcategory/{id}',[SubcategoryController::class,'subcategoryupdate'])->name('subcategory.update');                               



                            // Products
Route::get('/products-list',[ProductsController::class,'productslist'])->name('products.list');
Route::get('/products-form',[ProductsController::class,'productsform'])->name('products.form');
Route::post('/products-store',[ProductsController::class,'productsstore'])->name('products.store');
Route::get('/products-delete/{id}',[ProductsController::class,'productsdestroy'])->name('products.delete');
Route::get('/products-edit/{id}',[ProductsController::class,'productsedit'])->name('products.edit');
Route::put('/update-products/{id}',[ProductsController::class,'productsupdate'])->name('products.update');




                                //Customer
Route::get('/customer-list',[CustomerController::class,'customerlist'])->name('customer.list');
Route::get('/customer-form',[CustomerController::class,'customerform'])->name('customer.form');
Route::post('/customer-store',[CustomerController::class,'customerstore'])->name('customer.store');
Route::get('/customer-delete/{id}',[CustomerController::class,'customerdestroy'])->name('customer.delete');
Route::get('/customer-edit/{id}',[CustomerController::class,'customeredit'])->name('customer.edit');
Route::put('/update-customer/{id}',[CustomerController::class,'customerupdate'])->name('customer.update');
Route::put('/update-customer/{id}',[CustomerController::class,'customerupdate'])->name('customer.update');
