<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;
use DB;
use Log;
use Session;
use Illuminate\Support\Facades\Redirect;
use Input;

class ForumController extends Controller
{
    //
    public function getIndex() {
      //SELECT posts.title as title, users.name, posts.updated_at as `date`, categories.title as category FROM `posts` join categories on posts.category_id = categories.id join users on posts.author_id = users.id ORDER by posts.updated_at DESC
      $recentPosts = DB::table('posts')
                     ->join('categories', 'posts.category_id', '=', 'categories.id')
                     ->join('users', 'posts.author_id', '=', 'users.id')
                     ->select(DB::raw('posts.id as id, posts.title as title, users.name, posts.updated_at as `date`, categories.title as category'))
                     ->orderBy('posts.updated_at', 'desc')
                     ->take(25)
                     ->get();

      return View::make('forum.home')->with(['posts' => $recentPosts, 'id' => 0]);
    }

    public function getPostIndex($id) {
      $post = DB::table('posts')
              ->join('categories', 'posts.category_id', '=', 'categories.id')
              ->join('users', 'posts.author_id', '=', 'users.id')
              ->select(DB::raw('posts.id as id, posts.title as title, users.name, posts.updated_at as `date`, categories.title as category, posts.body as body, posts.closed as closed'))
              ->where('posts.id', $id)
              ->first();
      $replies = DB::table('replies')
                 ->join('users', 'replies.author_id', '=', 'users.id')
                 ->select(DB::raw('replies.id as id, users.name as name, replies.updated_at as `date`, replies.body as body, replies.votes as votes'))
                 ->where('replies.post_id', $id)
                 ->get();

      return View::make('forum.view_post')->with(['post' => $post, 'replies' => $replies, 'id' => $id]);

    }

    public function getCategoryPosts($id) {
      $posts = DB::table('posts')
                     ->join('categories', 'posts.category_id', '=', 'categories.id')
                     ->join('users', 'posts.author_id', '=', 'users.id')
                     ->select(DB::raw('posts.id as id, posts.title as title, users.name, posts.updated_at as `date`, categories.title as category'))
                     ->where('posts.category_id', $id)
                     ->orderBy('posts.updated_at', 'desc')
                     ->get();

      return View::make('forum.category_posts')->with(['posts' => $posts, 'id' => $id]);
    }

    public function addReply() {
      $postID = Input::get('postId');
      $body = Input::get('body');

      $id = DB::table('replies')->insertGetId(['post_id' => $postID, 'author_id' => Session::get('id'), 'body' => $body]);

      return Redirect::back();
    }

    public function newPost() {
      if(!Session::has('user')) {
        Session::flash('message', 'Você precisa estar logado para participar!');
        return Redirect::route('loginIndex');
      }

      $categories = DB::table('categories')
                    ->select('id', 'title')
                    ->get();

      return View::make('forum.new_post')->with(['id' => -1, 'categories' => $categories]);
    }

    public function addPost() {
      $title = Input::get('title');
      $body = Input::get('body');
      $tags = Input::get('tags');
      $category = Input::get('category');

      $postID = DB::table('posts')->insertGetId(
                ['author_id' => Session::get('id'), 'title' => $title, 'body' => $body, 'tags' => $tags,
                 'category_id' => $category]);

      return Redirect::to(url('forum/post/' . $postID));
    }

    public function upVote($id) {
      DB::table('replies')
          ->where('id', '=', $id)
          ->increment('votes');
      return Redirect::back();
    }

    public function downVote($id) {
      DB::table('replies')
          ->where('id', '=', $id)
          ->decrement('votes');
      return Redirect::back();
    }
}
