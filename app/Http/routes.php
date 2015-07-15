<?php


Route::get('', ['uses' => 'FeedController@index', 'as' => 'home']);

Route::get('videos/submit', ['uses' => 'VideoManagerController@viewSubmitForm', 'as' => 'video.submit']);
Route::post('videos/submit', ['uses' => 'VideoManagerController@submitHandler']);