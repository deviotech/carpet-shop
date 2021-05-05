<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
	    	// Route::get('/', 'StaffController@login');

// Route::middleware(['admin'])->group(function () {
	Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function() {
    	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

    	Route::name('staff.')->prefix('staff')->group(function() {
	    	Route::get('list', 'StaffController@list')->name('list');
		    Route::get('add', 'StaffController@add')->name('add');
		    Route::post('save/{id?}', 'StaffController@save')->name('save');
		    Route::get('edit/{id?}', 'StaffController@edit')->name('edit');
		    Route::get('delete/{id?}', 'StaffController@delete')->name('delete');
		});

    	Route::name('order.')->prefix('order')->group(function() {
	    	Route::get('list', 'OrderController@list')->name('list');
		    Route::get('add', 'OrderController@add')->name('add');
		    Route::post('save/{id?}', 'OrderController@save')->name('save');
		    Route::get('edit/{id?}', 'OrderController@edit')->name('edit');
		    Route::get('delete/{id?}', 'OrderController@delete')->name('delete');
            Route::post('oders/create', 'OrderController@orderCreate')->name('create');
            Route::get('show', 'OrderController@showOrder')->name('show.order');
            Route::get('edit/{id?}', 'OrderController@edit')->name('edit.order');
            Route::post('edit/post/{id?}', 'OrderController@update')->name('edit.post.order');


		});
    });

