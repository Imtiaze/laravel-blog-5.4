<?php




Route::get('admin/home', function() {
    return view('admin/home');           // route-name: admin.home  // HomeController
});


Route::group(['namespace' => 'Admin'], function(){

    Route::get('admin/posts', 'PostController@create');
    Route::get('admin/categories', 'CategoryController@create');
    Route::get('admin/tags', 'TagController@create');

});




Route::group(['namespace' => 'User'], function(){

    Route::get('/', 'HomeController@index');
    Route::get('post', 'PostController@index')->name('post');
});



