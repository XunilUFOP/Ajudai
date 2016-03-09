@extends('admin.admin_base')

@section('content')
    <div class="row">
      <div class="col-lg-4">
        <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$questionsAmount}}</h3>

              <p>Perguntas feitas</p>
            </div>
            <div class="icon">
              <i class="fa fa-commenting"></i>
            </div>
          </div>
      </div>

      <div class="col-lg-4">
        <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$answersAmount}}</h3>

              <p>Respostas fornecidas</p>
            </div>
            <div class="icon">
              <i class="fa fa-comments-o"></i>
            </div>
          </div>
      </div>

      <div class="col-lg-4">
        @if($votesBalance >= 0)
          <div class="small-box bg-aqua">
        @else
          <div class="small-box bg-red">
        @endif
            <div class="inner">
              <h3>{{$votesBalance}}</h3>

              <p>É o balanço dos seus votos</p>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
          </div>
      </div>
    </div>

    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary-ufop">
                <div class="box-header with-border">
                    <h3 class="box-title">Minhas Perguntas</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                  <div class="table table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Data</th>
                        <th>Visualizar</th>
                      </tr>

                      @foreach ($questions as $question)
                        <tr>
                          <td><a href="{{url('dashboard/edit/post/' . $question->id)}}">{{$question->title}}</a></td>
                          <td>{{$question->category}}</td>
                          <td>{{$question->date}}</td>
                          <td class="text-center"><a href="{{url('/forum/post/' . $question->id)}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                      @endforeach

                    </table>
                  </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->


        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary-ufop">
                <div class="box-header with-border">
                    <h3 class="box-title">Minhas Respostas</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table table-responsive">
                      <table class="table table-striped table-hover">
                        <tr>
                          <th>Na pergunta</th>
                          <th>Votos</th>
                          <th>Categoria</th>
                          <th>Data</th>
                          <th>Visualizar</th>
                        </tr>

                        @foreach ($answers as $answer)
                          <tr>
                            <td><a href="{{url('/dashboard/edit/reply/' . $answer->id)}}">{{$answer->title}}</a></td>
                            <td>{{$answer->votes}}</td>
                            <td>{{$answer->category}}</td>
                            <td>{{$answer->date}}</td>
                            <td class="text-center"><a href="{{url('/forum/post/' . $answer->post_id)}}"><i class="fa fa-eye"></i></a></td>
                          </tr>
                        @endforeach

                      </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
    @if(Session::get('type') == 1)
      <div class='row'>
          <div class='col-md-6'>
              <!-- Box -->
              <div class="box box-primary-ufop">
                  <div class="box-header with-border">
                      <h3 class="box-title">Usuários</h3>
                      <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <div class="box-body">
                    <div class="table table-responsive">
                      <table class="table table-striped table-hover">
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>Usuário</th>
                          <th>E-mail</th>
                          <th>Tipo</th>
                          <th>Cadastrado em</th>
                          <th>Atualizado em</th>
                        </tr>

                        @foreach ($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="{{url('dashboard/edit/user/'. $user->id)}}">{{$user->name}}</a></td>
                            <td>{{$user->user}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                          </tr>
                        @endforeach

                      </table>
                    </div>

                  </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.col -->


          <div class='col-md-6'>
              <!-- Box -->
              <div class="box box-primary-ufop">
                  <div class="box-header with-border">
                      <h3 class="box-title">Categorias</h3>
                      <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <div class="box-body">
                      <div class="table table-responsive">
                        <table class="table table-striped table-hover">
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Criada em</th>
                            <th>Alterada em</th>
                          </tr>

                          @foreach ($categories as $category)
                            <tr>
                              <td>{{$category->id}}</td>
                              <td><a href="{{url('dashboard/edit/category/' . $category->id)}}">{{$category->title}}</a></td>
                              <td>{{$category->created_at}}</td>
                              <td>{{$category->updated_at}}</td>
                            </tr>
                          @endforeach

                        </table>
                      </div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <!-- Box -->
          <div class="box box-primary-ufop">
              <div class="box-header with-border">
                  <h3 class="box-title">Postagens</h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body">
                  <div class="table table-responsive">
                    <table class="table table-striped table-hover">
                      <tr>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Data</th>
                      </tr>

                      @foreach ($allPosts as $post)
                        <tr>
                          <td><a href="{{url('/dashboard/edit/post/' . $post->id)}}">{{$post->title}}</a></td>
                          <td>{{$post->category}}</td>
                          <td>{{$post->date}}</td>
                        </tr>
                      @endforeach

                    </table>
                  </div>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>
    @endif
@endsection
