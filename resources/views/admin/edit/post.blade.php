@extends('admin.admin_base')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Editar Post</h1>
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
      <form class="form-horizontal" action="{{url('dashboard/edit/post')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $post->id }}">

        <div class="form-group">
          <label for="title">Título:</label>
          <input type="text" name="title" class="form-control" value="{{$post->title}}" required autofocus>
        </div>

        <div class="form-group">
          <label for="comment">Descrição</label>
          <textarea class="form-control" rows="7" name="body" required wrap >{{$post->body}}</textarea>
        </div>

        <div class="form-group">
          <label for="tags">Tags:</label>
          <input type="text" class="form-control" name="tags" value="{{$post->tags}}" required>
        </div>

        <div class="form-group">
          <label for="category">Categoria:</label>
          <select name="category" class="form-control">
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
        </div>

        @if (Session::get('type') == 1)
          <div class="form-group">
            <label for="closed">Categoria:</label>
            <select name="closed" class="form-control">
              <option value="0">Aberto</option>
              <option value="1">Fechado</option>
            </select>
          </div>
        @endif

        <p class="text-center">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Apagar</button>
          <button type="button" class="btn btn-warning" onclick="history.go(-1)">Cancelar</button>
          <button type="submit" class="btn" style="color: white; background: #962038">Editar</button>
        </p>
      </form>
    </div>
  </div>

  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="confirmDeleteModalTitle">Você tem certeza?</h4>
        </div>
        <div class="modal-body">
          <p class="text-center">Você tem certeza que quer excluir esse registro?</p>
          <br>
          <form class="form" action="{{url('dashboard/delete/post')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$post->id}}">
            <p class="text-center">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Confirmar</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
