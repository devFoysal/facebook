<?php 

Route::get('/facebook', function(){
    return FB::getCreds();
    // return "hello foysal 68";
});

Route::get('/fbcontroller', 'foysal68\Facebook\Controllers\FacebookController@index');