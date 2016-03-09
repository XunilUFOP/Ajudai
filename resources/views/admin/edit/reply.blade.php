@extends('admin.admin_base')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Editar Resposta</h1>
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
      <form class="form" action="{{url('dashboard/edit/reply')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{$reply->id}}">
        <textarea name="body" class="form-control" rows="7" required>{{$reply->body}}</textarea>
        <br>
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
          <form class="form" action="{{url('dashboard/delete/reply')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$reply->id}}">
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
