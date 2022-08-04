<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/room', 'RoomController@index')->name('Kind_of_room');
Route::get('blog', 'BlogController@index')->name('Blog');

Route::get('about', 'AboutController@index')->name('About');
Route::get('/room_detail/{id}', 'RoomController@roomDetail')->name('room_details');
Route::post('/booking', 'List_bookingController@add')->name('booking');
Route::match(['get', 'post'], 'contact', 'ContactController@add')->name('contact');
//admin
Route::get('/admin', 'AdminController@index')->name('admin');

//loai phong
Route::match(['get', 'post'], 'admin/kind_of_room_add', 'Kind_of_roomController@add')->name('kind_of_room_add');
Route::get('/admin/kind_of_room_list', 'Kind_of_roomController@index')->name('list_kind_of_room');
Route::get('/admin/kind_of_room_detail/{id}', 'Kind_of_roomController@detail')->name('kind_of_room_detail');
Route::post('/admin/kind_of_room_update/{id}', 'Kind_of_roomController@update')->name('kind_of_room_update');
//phong
Route::match(['get', 'post'], 'admin/room_add', 'RoomController@add')->name('room_add');
Route::get('/admin/room_list', 'RoomController@index1')->name('list_room');
Route::get('/admin/room_detail/{id}', 'RoomController@detail')->name('room_detail');
Route::post('/admin/room_update/{id}', 'RoomController@update')->name('room_update');
Route::get('/admin/room_detail/{id}', 'RoomController@detail')->name('room_detail');

//service
Route::get('/admin/service_list', 'ServiceController@index')->name('list_service');
Route::match(['get', 'post'], 'admin/service_add', 'ServiceController@add')->name('service_add');
Route::get('/admin/service_detail/{id}', 'ServiceController@detail')->name('service_detail');
Route::post('/admin/service_update/{id}', 'ServiceController@update')->name('service_update');
