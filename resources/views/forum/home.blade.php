@extends('forum.base_layout')

@section('content')
  <div class="row">
    <h3 class="text-center">Dá uma olhada nas últimas perguntas</h3>
    <br>
  </div>

  @include('forum.posts_table')

@endsection
