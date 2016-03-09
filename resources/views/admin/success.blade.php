@extends('admin.admin_base')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-success text-center">Ação finalizada com sucesso! <i class="fa fa-check"></i></h1>
      <p class="text-center">Clique <a href="{{url('/dashboard')}}">aqui</a> para voltar a página inicial do painel.</p>
    </div>
  </div>
@endsection
