<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projeto final da disciplina CEA477">
    <meta name="author" content="João Pedro Santos de Moura">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Ajudaí</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Ajudaí</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Por quê</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#advantages">Vantagens</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#join">Faça Parte</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Compartilhar para somar</h1>
                <hr>
                <h3 style="color: white">Fale e seja ouvido do jeito que você entende.</h3>
                <br>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Saiba mais</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Compartilhe conhecimento <i class="fa fa-share-alt"></i></h2>
                    <hr class="light">
                    <p class="text-faded">
                      Está cansado de perguntar aos professores e monitores e eles não conseguem tirar sua dúvida?
                      Tente perguntar para alguém que fale sua língua, alguém que já sabe o que você está querendo
                      saber e sabe explicar de um jeito que você entende!
                    </p>
                    <a href="#" data-toggle="modal" data-target="#searchModal" class="btn btn-default btn-xl">Procure</a>
                </div>
            </div>
        </div>
    </section>

    <section id="advantages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vantagens</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Só as melhores</h3>
                        <p class="text-muted">
                          Não perca tempo procurando e lendo todas
                          as respostas porque elas já aparecem primeiro
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-search-plus wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Direto ao ponto</h3>
                        <p class="text-muted">
                          Seja o quão específico você queira.
                          Procure por assunto, disciplina e até mesmo por curso!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Sempre atualizado</h3>
                        <p class="text-muted">
                          Sempre que sua dúvida receber uma nova resposta você é notificado
                          assim você não precisa perder tempo olhando todo dia por novas respostas.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-thumbs-o-up wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Cresça com a Comunidade</h3>
                        <p class="text-muted">Ajude a comunidade respondendo as dúvidas de outras pessoas.
                        O melhor jeito de aprender é ensinado outras pessoas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="join">
      <aside class="bg-dark">
          <div class="container text-center">
              <div class="call-to-action">
                  <h2>Ajuda alguém aí!</h2>
                  <p>
                    <a href="#" data-toggle="modal" data-target="#signUpModal" class="btn btn-default btn-xl wow tada">Cadastre-se</a>
                    ou
                    <a href="#" data-toggle="modal" data-target="#signInModal" class="btn btn-default btn-xl wow tada">Faça o Login</a>
                  </p>

              </div>
          </div>
      </aside>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Fala com a Gente</h2>
                    <hr class="primary">
                    <p>
                      Se você tem alguma dúvida, sugestão, reclamação, elogio ou
                      se quer só desabafar entre em contato com a gente!
                    </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>(31) 3852-8709</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:mentirinha@171.com">faleconosco@ajudaih.com.br</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="seachModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Procure por algo</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="{{url('search')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" name="search" placeholder="Ache a resposta" required>
                </div>
                <p class="help-block">Pode ser qualquer coisa, um tópico, uma disciplina...</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Novo Cadastro</h4>
          </div>
          <form class="form" action="user/signup" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
              <p class="text-center"><small>Seja bem-vindo a nossa comunidade <i class="fa fa-users"></i></small></p>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-male"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Nome">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Usuário">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar <i class="fa fa-times"></i></button>
            <button type="submit" class="btn btn-primary">Cadastrar <i class="fa fa-user-plus"></i></button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Faça o Login</h4>
          </div>
          <form class="form-horizontal" action="user/login" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
              <p class="text-center"><small>Que bom que você voltou pra ajudar</small></p>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Usuário">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar <i class="fa fa-times"></i></button>
              <button type="submit" class="btn btn-primary">Entrar <i class="fa fa-sign-in"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <hr>
      <p class="text-center">
        <strong>Copyright © 2016 <a href="https://github.com/XunilUFOP" target="_blank">Xunil Solutions LLC</a>.</strong> Todos os Direitos Reservados.
      </p>
    </div>

    <!-- jQuery -->
    <script src="js/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
