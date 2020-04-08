<?php

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

//Route::get('/', function () {
//    $data=\DB::table('users')->get();
//
//});
Route::get('/','FrontendController@home');
Route::get('/about','FrontendController@about');
Route::get('/service','FrontendController@service');
Route::get('/project','FrontendController@project');
Route::get('/contact','FrontendController@contact');
Route::get('/member_register','FrontendController@memberRegister');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category',[
    'uses' => 'CategoryController@index',
    'as' => 'add-category'
    ]);

Route::post('/newcategory',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
    ]); 


Route::get('/mangecategory',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
    ]); 

Route::get('/edit/{id}',[
    'uses' => 'CategoryController@editCategory',
    'as' => 'category-edit'
    ]);

Route::get('/delete/{id}',[
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'category-delete'
    ]);

Route::post('/update/category',[
    'uses' => 'CategoryController@updateCategory',
    'as' => 'category-update'
    ]);

Route::get('/subcategory',[
    'uses' => 'SubcategoryController@index',
    'as' => 'subcategory-add'
    ]);

Route::post('/subcategory',[
    'uses' => 'SubcategoryController@saveSubCategory',
    'as' => 'subcategory-save'
    ]);

Route::get('/managesubcategory',[
    'uses' => 'SubcategoryController@manageSubCategory',
    'as' => 'subcategory-manage'
    ]);

Route::get('/managesubcategory/edit/{id}',[
    'uses' => 'SubcategoryController@editSubCategory',
    'as' => 'subcategory-edit'
    ]);

Route::post('/managesubcategory/update',[
    'uses' => 'SubcategoryController@updateSubCategory',
    'as' => 'subcategory-update'
    ]);

Route::get('/managesubcategory/delete/{id}',[
    'uses' => 'SubcategoryController@deleteSubCategory',
    'as' => 'subcategory-delete'
    ]);


//=======================admin===========



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});