<div class="row">
  @if(!Session::has('user'))
    Faça o <a href="{{url('/signin')}}" style="color: #962038">Login</a> ou <a href="{{url('signup')}}" style="color: #962038">cadastre-se</a> para participar
  @else
    <a class="btn" href="{{url('forum/post/new')}}" style="color: white; background: #962038;"><i class="fa fa-pencil"></i> Nova Pergunta</a>
  @endif

  <br>
  <br>
  <div class="table ">
    <table class="table table-striped table-hover">
      <tr>
        <th></th>
        <th>Título</th>
        <th>Autor</th>
        <th>Última atualização</th>
        <th>Categoria</th>
      </tr>
      @foreach ($posts as $post)
        <tr height="30">
          <td><i class="fa fa-2x fa-comments-o"></i></td>
          <td><a href="{{url('forum/post/' . $post->id)}}" style="color: #962038">{{$post->title}}</a></td>
          <td>{{$post->name}}</td>
          <td>{{$post->date}}</td>
          <td>{{$post->category}}</td>
        </tr>
      @endforeach
    </table>
    @if(!Session::has('user'))
      Faça o <a href="{{url('/signin')}}" style="color: #962038">Login</a> ou <a href="{{url('signup')}}" style="color: #962038">cadastre-se</a> para participar
    @else
      <a class="btn" href="{{url('forum/post/new')}}" style="color: white; background: #962038;"><i class="fa fa-pencil"></i> Nova Pergunta</a>
    @endif
</div>
