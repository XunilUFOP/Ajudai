<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use View;
use DB;
use Illuminate\Support\Facades\Redirect;
use Log;
use Input;

class DashboardController extends Controller
{
    //
    public function getAnswers() {
      $answers = DB::table('replies')
                 ->join('users', 'replies.author_id', '=', 'users.id')
                 ->join('posts', 'replies.post_id', '=', 'posts.id')
                 ->join('categories', 'posts.category_id', '=', 'categories.id')
                 ->select('posts.id as post_id', 'replies.id as id', 'replies.updated_at as date', 'posts.title as title', 'categories.title as category', 'replies.votes as votes')
                 ->where('users.user', Session::get('user'))
                 ->orderBy('replies.updated_at', 'desc')
                 ->get();

      return $answers;
    }

    public function getQuestions() {
      $questions = DB::table('posts')
                 ->join('users', 'posts.author_id', '=', 'users.id')
                 ->join('categories', 'posts.category_id', '=', 'categories.id')
                 ->select('posts.id as id', 'posts.updated_at as date', 'posts.title as title', 'categories.title as category')
                 ->where('users.user', Session::get('user'))
                 ->orderBy('posts.updated_at', 'desc')
                 ->get();

      return $questions;
    }


    public function getIndex() {
      if(!Session::has('user')) {
        Session::flash('message', 'Você precisa estar logado para usar o painel!');
        return Redirect::route('loginIndex');
      }

      $answers = $this->getAnswers();
      $questions = $this->getQuestions();
      $questionsAmount = count($questions);
      $answersAmount = count($answers);

      $votesBalance = 0;
      foreach ($answers as $answer) {
        $votesBalance += $answer->votes;
      }

      if(Session::get('type') == 1) {
        $users = DB::table('users')->get();
        $categories = DB::table('categories')->get();
        $allPosts = DB::table('posts')
                   ->join('users', 'posts.author_id', '=', 'users.id')
                   ->join('categories', 'posts.category_id', '=', 'categories.id')
                   ->select('posts.id as id', 'posts.updated_at as date', 'posts.title as title', 'categories.title as category')
                   ->orderBy('posts.updated_at', 'desc')
                   ->get();

        return View::make('admin.dashboard')->with(['answers' => $answers, 'questions' => $questions, 'users' => $users,
                                                    'categories' => $categories, 'votesBalance' => $votesBalance, 'questionsAmount' => $questionsAmount,
                                                    'answersAmount' => $answersAmount, 'allPosts' => $allPosts]);
      }

      else return View::make('admin.dashboard')->with(['answers' => $answers, 'questions' => $questions,'votesBalance' => $votesBalance,
                                                       'questionsAmount' => $questionsAmount, 'answersAmount' => $answersAmount]);

    }

    public function editCategory($id) {
      if(Session::get('type') == 1) {
        $category = DB::table('categories')->where('id', '=', $id)->first();
        return View::make('admin.edit.category')->with('category', $category);
      }
      elseif(Session::has('type')) return View::make('admin.error');
      else {
          Session::flash('message', 'Você precisa estar logado para participar.');
          return Redirect::route('loginIndex');
      }
    }

    public function confirmCategoryEdit() {
      $id = Input::get('id');
      $title = Input::get('title');

      $status = DB::table('categories')
                        ->where('id', '=', $id)
                        ->update(['title' => $title]);

      if($status == 0) {
        Session::flash('error', 'Erro SQL ao atualizar o registro');
        return Redirect::back();
      }
      else {
        Session::flash('message', 'Atualizado com sucesso.');
        return Redirect::back();
      }
    }

    public function deleteCategory() {
      $id = Input::get('id');

      $status = DB::table('categories')->where('id', '=', $id)->delete();

      if($status == 1) Session::flash('message', 'Registro deletado com sucesso!');
      else Session::flash('error', 'Erro ao deletar o registro.');

      return View::make('admin.success');
    }

    public function addCategory() {
      if(Session::get('type') == 1) return View::make('admin.add.category');
      elseif(Session::has('type')) return View::make('admin.error');
      else {
          Session::flash('message', 'Você precisa estar logado para participar.');
          return Redirect::route('loginIndex');
      }
    }

    public function confirmCategoryAdd() {
      $title = Input::get('title');

      $id = DB::table('categories')->insertGetId(['title' => $title]);

      Session::flash('message', 'Categoria adicionada com sucesso. Esses são detalhes');
      return Redirect::to(url('/dashboard/edit/category/' . $id));
    }

    public function editPost($idPost) {
      $post = DB::table('posts')
              ->select('id', 'title', 'body', 'tags', 'closed', 'author_id')
              ->where('id', '=', $idPost)
              ->first();

      if(Session::get('type') == 1 || Session::get('id') == $post->author_id) {
        $categories = DB::table('categories')->select('id', 'title')->get();
        return View::make('admin.edit.post')->with(['post' => $post, 'categories' => $categories]);
      }
      elseif(Session::has('type')) return View::make('admin.error');
      else {
          Session::flash('message', 'Você precisa estar logado para participar.');
          return Redirect::route('loginIndex');
      }
    }

    public function confirmPostEdit() {
      $id = Input::get('id');
      $title = Input::get('title');
      $body = Input::get('body');
      $tags = Input::get('tags');
      $category = Input::get('category');
      $closed = Input::get('closed');

      if(is_null($closed)) $closed = 0;

      $status = DB::table('posts')
                        ->where('id', '=', $id)
                        ->update(['title' => $title, 'body' => $body, 'tags' => $tags, 'category_id' => $category, 'closed' => $closed]);

      if($status == 0) {
        Session::flash('error', 'Erro SQL ao atualizar o registro');
        return Redirect::back();
      }
      else {
        Session::flash('message', 'Atualizado com sucesso.');
        return Redirect::back();
    }
  }

  public function deletePost() {
    $id = Input::get('id');

    $status = DB::table('posts')->where('id', '=', $id)->delete();

    if($status == 1) Session::flash('message', 'Registro deletado com sucesso!');
    else Session::flash('error', 'Erro ao deletar o registro.');

    return View::make('admin.success');
  }

  public function editReply($id) {
    $reply = DB::table('replies')
            ->select('id', 'body', 'author_id')
            ->where('id', '=', $id)
            ->first();

    if(Session::get('type') == 1 || Session::get('id') == $reply->author_id) {
      return View::make('admin.edit.reply')->with('reply', $reply);
    }
    elseif(Session::has('type')) return View::make('admin.error');
    else {
        Session::flash('message', 'Você precisa estar logado para participar.');
        return Redirect::route('loginIndex');
    }
  }

  public function confirmReplyEdit() {
    $id = Input::get('id');
    $body = Input::get('body');

    $status = DB::table('replies')
                      ->where('id', '=', $id)
                      ->update(['body' => $body]);

    if($status == 0) {
      Session::flash('error', 'Erro SQL ao atualizar o registro');
      return Redirect::back();
    }
    else {
      Session::flash('message', 'Atualizado com sucesso.');
      return Redirect::back();
    }
  }

  public function deleteReply() {
    $id = Input::get('id');

    $status = DB::table('replies')->where('id', '=', $id)->delete();

    if($status == 1) Session::flash('message', 'Registro deletado com sucesso!');
    else Session::flash('error', 'Erro ao deletar o registro.');

    return View::make('admin.success');
  }
}
