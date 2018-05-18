<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'home'], function () {
    Route::get('/index', 'HomeController@index');
    Route::get('/show/{id}', 'HomeController@show');
    Route::get('/', function (){
        dd('这是home页面');
    });
    Route::group(['prefix' => 'article'],function(){
        Route::get('/uindex/{id}', 'ArticleController@uindex');
        Route::get('/index/{id?}','ArticleController@index');
        Route::get('/ushow/{id}', 'ArticleController@ushow');
        Route::get('/cate', 'ArticleController@cate');
        Route::post('/create', 'ArticleController@create');
        Route::post('/update/{id}', 'ArticleController@update');
        Route::post('/del/{id}', 'ArticleController@del');
    });
    Route::group(['prefix' => 'photo'],function(){

//        Route::options('/uploads', 'PhotoController@uploads');
        Route::post('/uploads', 'PhotoController@uploads');
        Route::get('/index', 'PhotoController@index');
        Route::get('/show/{id}', 'PhotoController@show');
        Route::get('/showImg', 'PhotoController@showImg');
        //评论综合
//        Route::get('/imgComment', 'PhotoController@imgComment');
//        Route::get('/imgReply', 'PhotoController@imgReply');
    });
    Route::group(['prefix' => 'comment'],function(){
        //评论综合
        Route::get('/imgComment', 'CommentController@imgComment');
        Route::get('/imgReply', 'CommentController@imgReply');
        //评论操作
        Route::post('/comAdd', 'CommentController@comAdd');
        Route::get('/comDel/id/{id}/cate/{cate}', 'CommentController@comDel');
        //回复操作
        Route::post('/comRepAdd', 'CommentController@comRepAdd');
        Route::post('/repRepAdd', 'CommentController@repRepAdd');
        Route::get('/repDel/id/{id}', 'CommentController@repDel');
    });
});
