<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/////////login/////////////
Route::any('Login', 'Login@show');
Route::post('login/login_check', 'Login@login_check');
Route::any('login/change_password', 'Login@change_password');
Route::post('login/update_password', 'Login@update_password');


////////logout//////
Route::get('logout', 'Auth\AuthController@logout');

/////home panel///////////////
Route::get('/','Home_index@home');
Route::get('home','Home_index@home');
Route::get('home#destinations','Home_index@home');
Route::get('set_lang','Home_index@set_lang');

////////backend/////////
Route::get('home/index','Dashboard@show');
Route::get('home/dashboard', 'Dashboard@show');
Route::get('login', 'Login@show');
//Route::get('home/dashboard','Packages@show');

/////rakib///////
/////hotel/////
Route::get('hotel/show','Hotels@show');
Route::get('hotel/add','Hotels@add');
Route::post('hotel/add_post','Hotels@add_post');
Route::any('hotel/edit/{id}','Hotels@edit');
Route::post('hotel/edit_post','Hotels@edit_post');
Route::any('hotel/delete/{id}','Hotels@delete');

////transport////
Route::get('transport/show','Transports@show');
Route::get('transport/add','Transports@add');
Route::post('transport/add_post','Transports@add_post');
Route::any('transport/edit/{id}','Transports@edit');
Route::post('transport/edit_post','Transports@edit_post');
Route::any('transport/delete/{id}','Transports@delete');

/////About Us//////
Route::get('about_us/edit','About_info@about_us_edit');/////26////
Route::post('about_us/edit_post','About_info@about_us_edit_post');/////26////

////Contact info//////
Route::get('contact/edit','Contact@contact_info_edit');/////26////
Route::post('contact/edit_post','Contact@contact_info_edit_post');/////26////

/////Gallery/////
Route::get('gallery/show','Gallery@show');
Route::get('gallery/add','Gallery@add');
Route::post('gallery/add_post','Gallery@add_post');
Route::post('gallery/edit_post','Gallery@edit_post');
Route::any('gallery/delete/{id}','Gallery@delete');

///Tours & Attractions
Route::get('tours_attractions/show','Tours@show');
Route::get('tour/add','Tours@add');
Route::get('tour/edit/{id}','Tours@edit');
Route::post('tour/edit_post','Tours@edit_post');
Route::post('tour/add_post','Tours@add_post');
Route::any('picture/edit_post','Tours@picEdit');
Route::any('tour/delete/{id}','Tours@delete');
/////Package//////

Route::get('package/show','Packages@show');
Route::get('package/add','Packages@add');
Route::get('package/type_add','Packages@type_add');
Route::post('package/type_add_post','Packages@type_add_post');
Route::get('package/edit/{id}','Packages@edit');
Route::post('package/edit_post','Packages@edit_post');
Route::post('package/add_post','Packages@add_post');
Route::any('pic/edit_post','Packages@picEdit');
Route::any('package/delete/{id}','Packages@delete');
Route::get('package/status_change/{id}', 'Packages@status_change');

////Video/////
Route::get('video/show','Videos@show');
Route::get('video/add','Videos@add');
Route::post('video/add_post','Videos@add_post');
Route::any('video/delete/{id}', 'Videos@delete');

///Hot Deals////
Route::get('hot_deals/show','Hot_deals@show');
Route::get('hot_deals/add','Hot_deals@add');
Route::get('hot_deals/type_add','Hot_deals@type_add');
Route::post('hot_deals/type_add_post','Hot_deals@type_add_post');
Route::post('hot_deals/add_post','Hot_deals@add_post');
Route::get('hot_deals/edit/{id}','Hot_deals@edit');
Route::post('hot_deals/edit_post','Hot_deals@edit_post');
Route::any('hot_deals/pic/edit_post','Hot_deals@picEdit');
Route::any('hot_deals/delete/{id}','Hot_deals@delete');

///Front End ////
Route::any('hotel_booking','Hotel_booking@show');
Route::get('transport_booking','Transport_booking@show');
Route::get('packages/{id}','Packages_home@show');
Route::get('tours','Tours_home@show');
Route::get('package/view_list/{id}','Packages_home@show_package_list');
Route::get('package/view_details/{id}','Packages_home@show_package_details');
Route::get('hot_deals/{id}','Hot_deals_home@show');
Route::get('hot_deals/view_list/{id}','Hot_deals_home@show_package_list');
Route::get('hot_deals/view_details/{id}','Hot_deals_home@show_package_details');
Route::get('about_us','Home_index@show_about');
Route::get('gallery','Gallery_home@show');
Route::get('gallery_details/{id}','Gallery_home@details_show');
Route::any('search','Home_index@search');////iti
Route::get('video_gallery','Gallery_home@show_video_gallery');
Route::post('send_mail','Contact@send_mail');
Route::post('hotel_search','Hotel_booking@hotel_search');
Route::get('details_tours/{id}','Tours_home@show_list');
Route::get('details_tours_attractions/{id}','Tours_home@show_details');
Route::get('online_booking','Packages_home@online_booking');

