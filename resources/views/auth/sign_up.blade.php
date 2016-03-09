@extends('auth.base')

@section('content')
  <div class="col-md-4 col-md-offset-4"> {{-- Define a coluna de tamanho 6 mas com offset de coluna 3 --}}
        <img src="{{asset('image/logoFull.png')}}" height="300px" width="250px" class="img-responsive center-block" alt="Logotipo"/>
        <form class="form-signin" action="user/signup" method="post">
          <h2 class="form-signin-heading">Cadastrar</h2>

          @if(Session::has('message'))
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              {{Session::get('message')}}
            </div>
          @endif

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-male"></i></span>
            <input type="text" class="form-control" name="name" placeholder="Nome" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="user" placeholder="Usuário">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
            <input type="email" name="email" class="form-control" placeholder="E-mail">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Senha">
          </div>
          <br>
          <p class="text-center">
            <button class="btn btn-warning"  type="reset" onclick="history.go(0)"><i class="fa fa-eraser"></i> Limpar</button>
            <button class="btn" style="color: white; background: #962038;"  type="submit"><i class="fa fa-user-plus"></i> Cadastrar</button>
          </p>
        </form>
        <br>
        <p class="text-center">
          Já tenho cadastro e quero fazer o <a href="{{url('signin')}}" style="color: #962038">Login</a>.
        </p>
      </div>
</div>
@endsection
