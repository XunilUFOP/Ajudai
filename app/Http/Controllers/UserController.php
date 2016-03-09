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

class UserController extends Controller
{

  public function login() {
    $login = Input::get('user');
    $password = Input::get('password');
    $user = DB::table('users')->where('user', $login)->first();

    if(isset($user)) { // Verifica se é usuário do sistema
      if(Hash::check($password, $user->password)) { // Verifica senha
        Session::put(['user' => $user->user, 'type' => $user->type, 'username' => $user->name, 'id' => $user->id]);
        return Redirect::route('forumIndex');
      }
    }

    // Senão não está cadastrado no banco, volta com erro
    Session::flash('message', 'Usuário ou Senha inválidos!');
    return Redirect::back();
  }

  public function logout() {
    Session::flash('message', 'Voce foi desconectado com sucesso!');
    Session::flush();
    return Redirect::route('home');
  }

  public function getLoginIndex() {
    if(Session::has('user')) return Redirect::route('dashboard');
    else return View::make('auth.sign_in');
  }

  public function getSignUpIndex() {
    if(Session::has('user')) return Redirect::route('dashboard');
    else return View::make('auth.sign_up');
  }

  public function signUp() {
    $login = Input::get('user');
    $password = Hash::make(Input::get('password'));
    $name = Input::get('name');
    $email = Input::get('email');

    // Checar se o usuário ou e-mail já existem
    $checkUser = DB::table('users')->where('user', '=', $login)->count();
    if($checkUser > 0) {
      Session::flash('message', 'Ocorreu um erro. Usuário já existe!');
      return Redirect::route('signUpIndex');
    }

    $checkEmail = DB::table('users')->where('email', '=', $email)->count();
    if($checkEmail > 0) {
      Session::flash('message', 'Ocorreu um erro. E-mail já cadastrado!');
      return Redirect::route('signUpIndex');
    }

    $id = DB::table('users')->insertGetId(
          ['user' => $login, 'password' => $password, 'name' => $name, 'email' => $email,
           'type' => 3]);

    if(isset($id)) {
      Session::put(['user' => $login, 'username' => $name, 'type' => 3, 'id' => $id]);
      return Redirect::route('dashboard');
    }
  }

  public function editUser($id) {
    if(Session::get('type') == 1 || Session::get('id') == $id) {
      $user = DB::table('users')->where('id', '=', $id)->first();
      $types = DB::table('types')->get();
      return View::make('admin.edit.user')->with(['user' => $user, 'types' => $types]);
    }
    elseif(Session::has('type')) return View::make('admin.error');
    else {
        Session::flash('message', 'Você precisa estar logado para participar.');
        return Redirect::route('loginIndex');
    }
  }

  public function confirmUserEdit() {
    $id = Input::get('id');
    $login = Input::get('user');
    $password = Hash::make(Input::get('password'));
    $name = Input::get('name');
    $email = Input::get('email');
    $type = Input::get('type');

    if($type == null) $type = 3;


    // Checar se o usuário ou e-mail já existem
    $checkUser = DB::table('users')->where('user', '=', $login)->count();
    if($checkUser > 1) {
      Session::flash('error', 'Ocorreu um erro. Usuário já existe!');
      return Redirect::back();
    }

    $checkEmail = DB::table('users')->where('email', '=', $email)->count();
    if($checkEmail > 1) {
      Session::flash('error', 'Ocorreu um erro. E-mail já cadastrado!');
      return Redirect::back();
    }

    $status = DB::table('users')
                      ->where('id', '=', $id)
                      ->update(['user' => $login, 'password' => $password, 'name' => $name, 'email' => $email, 'type' => $type]);

    if($status == 0) {
      Session::flash('error', 'Erro SQL ao atualizar o registro');
      return Redirect::back();
    }
    else {
      Session::flash('message', 'Atualizado com sucesso.');
      return Redirect::back();
    }
  }

  public function deleteUser() {
    $id = Input::get('id');

    $status = DB::table('users')->where('id', '=', $id)->delete();

    if($status == 1) Session::flash('message', 'Registro deletado com sucesso!');
    else Session::flash('error', 'Erro ao deletar o registro.');

    return View::make('admin.success');
  }
}
