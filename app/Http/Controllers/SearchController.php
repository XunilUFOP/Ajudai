<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Session;
use DB;
use View;
Use Log;

class SearchController extends Controller
{
    //
    public function search() {
      $text = Input::get('search');
      //busca no banco pelo corpo com as palavras usando Like ao invés de igual
      // guarda em uma variavel
      // conta os resultados
      //se não for 0, então cria uma view de resultados
      //senao retorna pra uma rota de error

      $findings = DB::table('posts')
                     ->join('categories', 'posts.category_id', '=', 'categories.id')
                     ->join('users', 'posts.author_id', '=', 'users.id')
                     ->join('replies', 'replies.author_id', '=', 'users.id')
                     ->select(DB::raw('posts.id as id, posts.title as title, users.name, posts.updated_at as `date`, categories.title as category'))
                     ->orWhere('users.name', 'LIKE', '%' . $text . '%')
                     ->orWhere('posts.title', 'LIKE', '%' . $text . '%')
                     ->orWhere('posts.body', 'LIKE', '%' . $text . '%')
                     ->orWhere('replies.body', 'LIKE', '%' . $text . '%')
                     ->orWhere('posts.tags', 'LIKE', '%' . $text . '%')
                     ->orderBy('posts.updated_at', 'desc')
                     ->get();


      //return Redirect::to('error/503');
      return View::make('forum.search')->with(['id' => -1, 'posts' => $findings]);
      //return View::make('search')->with('results', $results);
    }
}
