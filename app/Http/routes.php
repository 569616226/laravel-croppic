<?php

Route::get('/', 'CropController@getHome');
Route::post('upload', 'CropController@postUpload');
Route::post('crop', 'CropController@postCrop');
