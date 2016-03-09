@extends('forum.base_layout')

@section('content')
  <div class="row">
    <h3 class="text-center">Qual é a sua dúvida?</h3>
    <form class="form-horizontal" action="{{url('forum/post/add')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" class="form-control" placeholder="Título" required autofocus>
      </div>

      <div class="form-group">
        <label for="comment">Descrição</label>
        <textarea class="form-control" rows="7" name="body" required wrap placeholder="Descreva sua dúvida..."></textarea>
      </div>

      <div class="form-group">
        <label for="tags">Tags:</label>
        <input type="text" class="form-control" name="tags" placeholder="Coloque marcações para facilitar a busca" required>
      </div>

      <div class="form-group">
        <label for="category">Categoria</label>
        <select name="category" class="form-control">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
          @endforeach
        </select>
      </div>

      <p class="text-center">
        <a class="btn btn-default" href="javascript: history.go(-1)">Cancelar</a>
        <input type="submit" class="btn" value="Postar" style="color: white; background: #962038;">
      </p>
    </form>
  </div>
@endsection
