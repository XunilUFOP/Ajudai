<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">

      <title>AjudaIh</title>

      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/bigvideo.css')}}">
      <link rel="stylesheet" href="{{asset('css/video-js.min.css')}}">

      <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
          video { opacity: .7; }
      </style>
    </head>
    <body>
      <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
      <script src="{{asset('js/jquery-ui.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('js/video.js')}}"></script>
      <script src="{{asset('js/bigvideo.js')}}"></script>

      <script>
        $(function() {
          var BV = new $.BigVideo();
          BV.init();
          BV.show('video/mainvideo.mp4',{ambient:true});
          BV.dispose();
          BV.init();
          BV.show('video/mainvideo.mp4',{ambient:true});
        });
      </script>


      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{Html::image('image/iconbar.png')}}</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li class="navbar-text">AjudaIh</li>
              <li class="active"><a href="#">Início</a></li>
            </ul>

            <form class="navbar-form navbar-left" role="search" action="search" method="get">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Tire sua dúvida">
                </div>
              </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
              <li class="navbar-link"><a href="#">Link right</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Item 1</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Item 2</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>




      <div class="container-fluid">
        <div class="row">
            <hr />
            <p class="text-center"><a href="https://github.com/XunilUFOP">Xunil Empreendimentos</a></p>
        </div>
      </div>


    </body>
</html>
