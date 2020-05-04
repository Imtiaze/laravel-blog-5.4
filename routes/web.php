<?php




Route::get('admin/home', function() {
    return view('admin/home');           // route-name: admin.home  // HomeController
});


Route::group(['namespace' => 'Admin'], function(){

    Route::get('admin/posts', 'PostController@index');
    Route::get('admin/post/create', 'PostController@create');
    Route::post('admin/post/store', 'PostController@store');

    Route::get('admin/categories', 'CategoryController@create');
    Route::get('admin/tags', 'TagController@create');

});




Route::group(['namespace' => 'User'], function(){

    Route::get('/', 'HomeController@index');
    Route::get('post', 'PostController@index')->name('post');
});



