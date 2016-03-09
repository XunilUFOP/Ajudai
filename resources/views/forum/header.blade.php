<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projeto final da disciplina CEA477">
    <meta name="author" content="João Pedro Santos de Moura">
    <meta name="csrf-token" content="{{csrf_token()}}" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Ajudaí</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #eaecf0;">
  <div class="container">
    <div class="row">
      <div class="panel" style="background: transparent; border: 0px;">
        <p class="text-center" href="#" style="color: #962038; font-size: 32px; font-family: Tahoma">
          <img src="{{asset('image/logo.png')}}" alt="Logotipo" width="32px" height="32px" />
          <a href="{{url('/')}}" style="color: #962038;">Ajudaí</a>
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li @if($id == 0) class="active"
                  @endif><a href="{{url('forum')}}">Home</a></li>

              <li @if($id == 1) class="active"
                  @endif><a href="{{url('forum/category/1')}}">Sistemas</a></li>

              <li @if($id == 2) class="active"
                  @endif><a href="{{url('forum/category/2')}}">Produção</a></li>

              <li @if($id == 3) class="active"
                  @endif><a href="{{url('forum/category/3')}}">Computação</a></li>

              <li @if($id == 4) class="active"
                  @endif><a href="{{url('forum/category/4')}}">Elétrica</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"></a></li>
              <li>
                <form class="navbar-form navbar-left" role="search" action="{{url('search')}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-btn"><button type="submit" class="btn btn-default" style="color: white; background: #962038;"><i class="fa fa-search"></i></button></span>
                      <input type="text" class="form-control" placeholder="Busque por palavras chaves" name="search" style="width: 360px">
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            @if(Session::has('type'))
              <br />
              <br />
              <hr style="color: black; border-width: 5px;" />
              <p class="text-center">
                Bem-vindo {{Session::get('username')}}
                <span class="pull-left"><a style="color: #962038;" href="{{url('dashboard')}}">Painel de Controle <i class="fa fa-sliders"></i></a></span>
                <span class="pull-right"><a style="color: #962038;" href="{{url('user/logout')}}">Sair <i class="fa fa-sign-out"></i></a></span>
                <br>
              </p>
            @endif
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
  </div>
