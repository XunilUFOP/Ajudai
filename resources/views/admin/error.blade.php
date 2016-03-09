@extends('admin.admin_base')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-danger text-center">Você não permissão para isso! <i class="fa fa-exclamation-triangle"></i></h1>
      <p class="text-center">Clique <a href="javascript:history.go(-1)">aqui</a> para voltar.</p>
    </div>
  </div>
@endsection
