<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("image/user.png") }}" class="img-circle" alt="User Image" height="160px" width="160px"/>
            </div>
            <div class="pull-left info">
                <p>{{Session::get('username')}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="{{url('search')}}" method="post" class="sidebar-form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Procure no fórum..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{url('/forum')}}"><span><i class="fa fa-comments-o"></i> Fórum</span></a></li>
            <li><a href="{{url('dashboard/edit/user/' . Session::get('id'))}}"><span><i class="fa fa-pencil-square-o"></i> Editar Cadastro</span></a></li>
            <li><a href="{{url('user/logout')}}"><span><i class="fa fa-sign-out"></i> Sair</span></a></li>
            {{-- <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li> --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
