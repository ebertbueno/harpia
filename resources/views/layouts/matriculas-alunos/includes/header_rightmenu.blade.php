<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{url('/')}}/img/avatar.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::guard('matriculas-alunos')->user()->nome }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{url('/')}}/img/avatar.png" alt="User Image" class="img-circle">
                        <p>{{ Auth::guard('matriculas-alunos')->user()->nome }}</p>
                    </li>
                    <li class="user-footer">

                        <div class="pull-right">
                            <a href="{{ route('auth.matriculas-alunos.logout') }}" class="btn btn-default btn-flat">
                                <i class="fa fa-sign-out"></i> Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>