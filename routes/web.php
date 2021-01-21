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



Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/', function () {

    return view('frontend_layout.home');

});
Route::get('/logout',function()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    });





/************************************************admin***************************************************/
Route::middleware(['auth', 'admin'])->group(function () {
   
Route::get('/dashboard', function () {

    return view('backend_layout.dashboard');
});


/*****************************************************/
Route::get('/dashboard','DashboardController@all_count');
/*********************************category*********************************/
Route::get('/category',  'CategoryController@all_category');
Route::get('/add-category', 'CategoryController@add_category'); 
Route::post('/save-category', 'CategoryController@save_category');  
Route::get('/unactive-category/{id}','CategoryController@unactive_category');
Route::get('/active-category/{id}','CategoryController@active_category');
Route::get('/edit-category/{id}','CategoryController@edit_category');
Route::post('/update-category/{id}','CategoryController@update_category');
Route::get('/delete-category/{id}','CategoryController@delete_category');
Route::get('/unpopular-category/{id}','CategoryController@unpopular_category');
Route::get('/popular-category/{id}','CategoryController@popular_category');
Route::get('/unstar-category/{id}','CategoryController@unstar_category');
Route::get('/star-category/{id}','CategoryController@star_category');


/*********************************brand*********************************/
Route::get('/brand',  'BrandController@index');
Route::get('/add-brand', 'BrandController@create'); 
Route::post('/save-brand', 'BrandController@store');  
Route::get('/unactive-brand/{id}','BrandController@unactive_brand');
Route::get('/active-brand/{id}','BrandController@active_brand');
Route::get('/edit-brand/{id}','BrandController@edit');
Route::post('/update-brand/{id}','BrandController@update');
Route::get('/delete-brand/{id}','BrandController@destroy');

/*********************************subcategory*********************************/
Route::get('/subcategory',  'SubCategoryController@all_subcategory');
Route::get('/add-subcategory', 'SubCategoryController@add_subcategory'); 
Route::post('/save-subcategory', 'SubCategoryController@save_subcategory');  
Route::get('/unactive-subcategory/{id}','SubCategoryController@unactive_subcategory');
Route::get('/active-subcategory/{id}','SubCategoryController@active_subcategory');
Route::get('/edit-subcategory/{id}','SubCategoryController@edit_subcategory');
Route::post('/update-subcategory/{id}','SubCategoryController@update_subcategory');
Route::get('/delete-subcategory/{id}','SubCategoryController@delete_subcategory');
Route::get('/show-product/{id}','CategoryController@show_product');


/*********************************manufacture*********************************/
Route::get('/manufacture',  'ManufactureController@all_manufacture');
Route::get('/add-manufacture', 'ManufactureController@add_manufacture'); 
Route::post('/save-manufacture', 'ManufactureController@save_manufacture');  
Route::get('/unactive-manufacture/{id}','ManufactureController@unactive_manufacture');
Route::get('/active-manufacture/{id}','ManufactureController@active_manufacture');
Route::get('/edit-manufacture/{id}','ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{id}','ManufactureController@update_manufacture');
Route::get('/delete-manufacture/{id}','ManufactureController@delete_manufacture');

/*********************************product*********************************/
Route::get('/add-product', 'ProductController@add_product'); 
Route::post('/save-product', 'ProductController@save_product');  
Route::get('/unactive-product/{id}','ProductController@unactive_product');
Route::get('/active-product/{id}','ProductController@active_product');
Route::get('/unactive-product-hotdeal/{id}','ProductController@unactive_product_hotdeal');
Route::get('/active-product-hotdeal/{id}','ProductController@active_product_hotdeal');
Route::get('/unactive-product-saleoff/{id}','ProductController@unactive_product_saleoff');
Route::get('/active-product-saleoff/{id}','ProductController@active_product_saleoff');
Route::get('/unactive-product-featured/{id}','ProductController@unactive_product_featured');
Route::get('/active-product-featured/{id}','ProductController@active_product_featured');
Route::get('/unactive-product-bestseller/{id}','ProductController@unactive_product_bestseller');
Route::get('/active-product-bestseller/{id}','ProductController@active_product_bestseller');
Route::get('/edit-product/{id}','ProductController@edit_product');
Route::post('/update-product/{id}','ProductController@update_product');
Route::get('/delete-product/{id}','ProductController@delete_product');

/*********************************slider*********************************/
Route::get('/slider',  'SliderController@all_slider');
Route::get('/add-slider', 'SliderController@add_slider'); 
Route::post('/save-slider', 'SliderController@save_slider');  
Route::get('/unactive-slider/{id}','SliderController@unactive_slider');
Route::get('/active-slider/{id}','SliderController@active_slider');
Route::get('/edit-slider/{id}','SliderController@edit_slider');
Route::post('/update-slider/{id}','SliderController@update_slider');
Route::get('/delete-slider/{id}','SliderController@delete_slider');

/*********************************Blog*********************************/
Route::get('/blog',  'BlogController@index');
Route::get('/add-blog', 'BlogController@create'); 
Route::post('/save-blog', 'BlogController@store');  
// Route::get('/unactive-blog/{id}','BlogController@unactive_blog');
// Route::get('/active-blog/{id}','BlogController@active_blog');
Route::get('/edit-blog/{id}','BlogController@edit');

Route::post('/update-blog/{id}','BlogController@update');
Route::get('/delete-blog/{id}','BlogController@destroy');

// Route::get('/read-message','ContactUSController@mesg');
Route::get('/delete-message/{mesg_id}','ContactUSController@delete_mesg');

/*****************************/
/*contact us*/

Route::get('/all-message', 'ContactUSController@show');


/************************************members******************************/
Route::get('/all-vendor',  'MembersController@all_vendor');
Route::get('/unactive-vendor/{id}','MembersController@unactive_vendor');
Route::get('/active-vendor/{id}','MembersController@active_vendor');
Route::get('/delete-vendor/{id}','MembersController@delete_vendor');


Route::get('/all-user',  'MembersController@all_user');
Route::get('/unactive-user/{id}','MembersController@unactive_user');
Route::get('/active-user/{id}','MembersController@active_user');
Route::get('/delete-user/{id}','MembersController@delete_user');


Route::get('/all-admin',  'MembersController@all_admin');
Route::get('/unactive-admin/{id}','MembersController@unactive_admin');
Route::get('/active-admin/{id}','MembersController@active_admin');
Route::get('/delete-admin/{id}','MembersController@delete_admin');





});

/****************************Index********************************/
Route::get('/','IndexController@show_all');
Route::get('/single-product/{id}','IndexController@single_product');
Route::get('/show-products/{id}','IndexController@category_product');
Route::get('/blog-user', 'BlogController@show');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);





/*****************************************Vendor Dashboard*******************************************************/


Config::set('auth.defines', 'vendor');
Route::get('vendor/login', 'VendorAuth@login')->middleware('guest:vendor');
Route::post('vendor/login', 'VendorAuth@dologin');

Route::get('vendor/register', 'VendorAuth@register');
Route::post('vendor/save-vendor', 'VendorAuth@save_vendor');

Route::group(['middleware' => 'vendor:vendor'], function () {

Route::get('/vendor/dashboard', function(){
    return view('layouts.vendor_layout');
});

Route::get('/vendor/dashboard','VendorController@all_count');


Route::any('vendor/logout', 'VendorAuth@logout');


/************************category*********************************/
Route::get('/vendor/category',  'VendorController@all_category');
Route::get('/vendor/add-category', 'VendorController@add_category'); 
Route::post('/vendor/save-category', 'VendorController@save_category'); 
Route::get('/vendor/show-product/{id}','VendorController@show_product');


/************************manufacture******************************/
Route::get('/vendor/manufacture',  'VendorController@all_manufacture');
Route::get('/vendor/add-manufacture', 'VendorController@add_manufacture'); 
Route::post('/vendor/save-manufacture', 'VendorController@save_manufacture');  


/*********************************subcategory*********************************/
Route::get('/vendor/subcategory',  'VendorController@all_subcategory');
Route::get('/vendor/add-subcategory', 'VendorController@add_subcategory'); 
Route::post('/vendor/save-subcategory', 'VendorController@save_subcategory'); 

/*********************************product*********************************/
Route::get('vendor/add-product', 'VendorController@add_product'); 
Route::post('vendor/save-product', 'VendorController@save_product');  
Route::get('vendor/unactive-product/{id}','VendorController@unactive_product');
Route::get('/vendor/edit-product/{id}','VendorController@edit_product');
Route::post('vendor/update-product/{id}','VendorController@update_product');
Route::get('vendor/delete-product/{id}','VendorController@delete_product'); 



});


/*************************api select subcategory************************************************/
Route::get('/subcategory/getsubcategory/{id}','SubCategoryController@GetsubCategory');


















/*storage*/
Route::get('/storage/{Doctors}/{filename}', function ($Doctors,$filename)
{
    $path = storage_path("app/".$Doctors."/" . $filename);

    if (!File::exists($path)) { 
        return  $path;
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('storage');