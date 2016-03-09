@extends('admin.admin_base')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Adicionar Categoria</h1>
      <br>
      @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{Session::get('error')}}
        </div>
        <br>
      @endif
      @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{Session::get('message')}}
        </div>
        <br>
      @endif
      <form class="form" action="{{url('dashboard/add/category/confirm')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
          <input type="text" class="form-control" name="title" placeholer="Nome da categoria" autofocus required>
        </div>

        <br>
        <p class="text-center">
          <button type="reset" class="btn btn-default" onclick="history.go(0)">Limpar</button>
          <button type="button" class="btn btn-warning" onclick="history.go(-1)">Cancelar</button>
          <button type="submit" class="btn" style="color: white; background: #962038">Adicionar</button>
        </p>
      </form>
    </div>
  </div>

@endsection
