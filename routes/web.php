<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\register_controller;

use App\Http\Controllers\login_controller;

use App\Http\Controllers\AddServices_controller;

use App\Http\Controllers\AddBooking_controller;



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
return view('/index');
});

Route::get('/about', function () {
    return view('/about');
});


Route::get('/contact', function () {
return view('/contact');
}); 

Route::get('/gallery', function () {
    return view('/gallery');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/viewservices',[Register_controller::class,'viewservices']);

Route::post('/searchservices',[register_controller::class,'searchservice']);
    




Route::post('/auth/save',[login_controller::class,'save'])->name('auth.save');

Route::post('/auth/check',[login_controller::class,'check'])->name('auth.check');

Route::get('/auth/logout',[login_controller::class,'logout'])->name('auth.logout');






Route::group(['middleware'=>['AuthCheck']], function(){

Route::get('/auth/login',[login_controller::class,'login'])->name('auth.login');

Route::get('/auth/register',[login_controller::class,'register'])->name('auth.register');

Route::get('/admin/index',[login_controller::class,'dashboard']);

Route::get('/admin/viewcustomers',[login_controller::class,'index']);

Route::get('/admin/gallery',[login_controller::class,'gallery']);

Route::get('/admin/addservices',[AddServices_controller::class,'create']);

Route::post('/admin/servicesread',[AddServices_controller::class,'store']);

Route::get('/admin/viewservices',[AddServices_controller::class,'index']);

Route::post('/admin/searchservice',[AddServices_controller::class,'search']);

Route::post('/admin/searchcustomer',[login_controller::class,'search']);

Route::get('/admin/edit/{id}',[AddServices_controller::class,'edit']);

Route::post('/admin/servicesedit/{id}',[AddServices_controller::class,'update']);

Route::get('/admin/delete/{id}',[AddServices_controller::class,'delete']);

Route::get('/admin/viewbookings',[AddBooking_controller::class,'index']);

Route::get('/admin/accept/{id}',[login_controller::class,'accept']);

Route::get('/admin/decline/{id}',[login_controller::class,'decline']);

Route::get('/admin/bookingreport',[AddBooking_controller::class,'report']);

Route::get('/admin/about', function () {
    return view('/admin/about');
});

Route::get('/admin/contact', function () {
    return view('/admin/contact');
});

Route::get('/admin/gallery', function () {
    return view('/admin/gallery');
});


});


Route::group(['middleware'=>['CustomerCheck']], function(){

    Route::get('/auth/login',[login_controller::class,'login'])->name('auth.login');
    Route::get('/auth/register',[login_controller::class,'register'])->name('auth.register');
    Route::get('/customer/index',[login_controller::class,'customerIndex']);
    Route::get('/customer/viewservices',[register_controller::class,'index']);

    Route::get('/customer/about', function () {
        return view('/customer/about');
    });

    Route::get('/customer/contact', function () {
        return view('/customer/contact');
    });

    Route::get('/customer/gallery', function () {
        return view('/customer/gallery');
    });
    
    
    Route::post('/customer/searchservice',[register_controller::class,'search']);

    Route::get('/customer/booking/{id}',[AddBooking_controller::class,'booking']);

    Route::post('/customer/bookingprocess/{id}',[AddBooking_controller::class,'store']);

    Route::get('/customer/mybookings',[register_controller::class,'myBookings']);

    Route::get('/customer/bookingdel/{id}',[register_controller::class,'delete']);

    Route::get('/customer/profile',[register_controller::class,'viewProfile']);

    Route::get('/customer/editprofile/{id}',[register_controller::class,'profileEdit']);

    Route::post('/customer/profiledit/{id}',[register_controller::class,'updateProfile']);
    
   
});



/*Route::get('/login',[login_controller::class,'create']);
Route::post('/loginread',[login_controller::class,'check']);

Route::get('/register',[register_controller::class,'create']);
Route::post('/registerread',[register_controller::class,'store']); */


//Route::post('/admin/searchbooking',[login_controller::class,'searchBooking']);











//Route::get('/customer/editprofile/{id}',[register_controller::class,'profileEdit']);

//Route::post('/customer/profiledit/{id}',[register_controller::class,'updateProfile']);









