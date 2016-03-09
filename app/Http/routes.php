<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'error/'], function() {
  Route::get('503', 'ErrorController@e503');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
    Route::get('/index', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
    //
    Route::post('search', ['as' => 'search', 'uses' => 'SearchController@search']);
    Route::get('forum', ['as' => 'forumIndex', 'uses' => 'ForumController@getIndex']);

    Route::get('signup', ['as' => 'signUpIndex', 'uses' => 'UserController@getSignUpIndex']);
    Route::get('signin', ['as' => 'loginIndex', 'uses' => 'UserController@getLoginIndex']);
    Route::post('user/login', ['as' => 'login', 'uses' => 'UserController@login']);
    Route::get('user/logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
    Route::post('user/signup', ['as' => 'signup', 'uses' => 'UserController@signUp']);


    Route::get('painel', ['as' => 'dashboard', 'uses' => 'DashboardController@getIndex']);
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@getIndex']);
    Route::group(['prefix' => 'dashboard/'], function() {

      Route::get('edit/user/{id}', 'UserController@editUser');
      Route::post('edit/user', 'UserController@confirmUserEdit');
      Route::post('delete/user', 'UserController@deleteUser');

      Route::get('add/category', 'DashboardController@addCategory');
      Route::post('add/category/confirm', 'DashboardController@confirmCategoryAdd');
      Route::get('edit/category/{id}', 'DashboardController@editCategory');
      Route::post('edit/category', 'DashboardController@confirmCategoryEdit');
      Route::post('delete/category', 'DashboardController@deleteCategory');

      Route::get('edit/post/{id}', 'DashboardController@editPost');
      Route::post('edit/post', 'DashboardController@confirmPostEdit');
      Route::post('delete/post', 'DashboardController@deletePost');


      //in progress
      Route::get('edit/reply/{id}', 'DashboardController@editReply');
      Route::post('edit/reply', 'DashboardController@confirmReplyEdit');
      Route::post('delete/reply', 'DashboardController@deleteReply');

      // todo
      // sistema de votação
    });

    Route::group(['prefix' => 'forum/'], function() {
      Route::post('post/add', ['as' => 'addPost', 'uses' => 'ForumController@addPost']);
      Route::get('post/new', ['as' => 'newPost', 'uses' => 'ForumController@newPost']);
      Route::get('post/{id}', ['as' => 'postIndex', 'uses' => 'ForumController@getPostIndex']);

      Route::get('category/{id}', ['as' => 'categoryPosts', 'uses' => 'ForumController@getCategoryPosts']);

      Route::post('reply/add', ['as' => 'addReply', 'uses' => 'ForumController@addReply']);

      Route::get('upvote/{id}', 'ForumController@upVote');
      Route::get('downvote/{id}', 'ForumController@downVote');

    });

});
