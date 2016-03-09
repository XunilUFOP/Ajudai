@extends('forum.base_layout')

@section('content')
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>{{$post->title}}</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-10">
          <b>{{$post->body}}</b>
        </div>
        <div class="col-lg-2">
          <p class="text-center"><img src="{{asset('image/user.png')}}" class="img-circle" width="48px" width="48px" alt="User image" /></p>
          <p>{{$post->name}}</p>
          <p>em {{$post->date}}</p>
          <p>em {{$post->category}}</p>
        </div>
      </div>
      @foreach ($replies as $reply)
        <div class="panel-body">
          <hr />
          @if(Session::has('id'))
            <div class="col-lg-1">
              <p class="text-center"><a style="color: #962038" href="{{url('forum/upvote/' . $reply->id)}}"><i class="fa fa-3x fa-chevron-up"></i></a></p>
              <p><h2 class="text-center">{{$reply->votes}}</h2></p>
              <p class="text-center"><a style="color: #962038" href="{{url('forum/downvote/' . $reply->id)}}"><i class="fa fa-3x fa-chevron-down"></a></i></p>
            </div>
            <div class="col-lg-9">
          @else
            <div class="col-lg-10">
          @endif
            {{$reply->body}}
          </div>
          <div class="col-lg-2">
            <p class="text-center"><img src="{{asset('image/user.png')}}" class="img-circle" width="48px" width="48px" alt="User image" /></p>
            <p>{{$reply->name}}</p>
            <p>em {{$reply->date}}</p>
            <p>ajudou {{$reply->votes}} pessoas</p>
          </div>
        </div>
      @endforeach
      <div class="panel-footer">
        @if(!Session::has('user'))
          <p class="text-center">
            Faça o <a href="{{url('/signin')}}" style="color: #962038">Login</a> ou <a href="{{url('signup')}}" style="color: #962038">cadastre-se</a> para participar
          </p>
        @else
          <h3 class="text-center">Ajuda aí</h3>
          <br>
          <form class="form" action="{{url('forum/reply/add')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="postId" value="{{$id}}">
            <textarea name="body" class="form-control" rows="7" required @if($post->closed == 1) disabled @endif></textarea>
            <br>
            <p class="text-center">
              <button type="reset" class="btn btn-warning" onclick="history.go(0)"><i class="fa fa-eraser">
                </i> Limpar
              </button>
              <button type="submit" class="btn btn-default" style="color: white; background: #962038;" @if($post->closed == 1) disabled @endif>
                <i class="fa fa-reply"></i> Responder
              </button>
            </p>
          </form>
        @endif
      </div>
    </div>
  </div>
@endsection
