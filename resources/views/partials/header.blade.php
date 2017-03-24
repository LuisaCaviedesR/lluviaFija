<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" id="logo"><i class="fa fa-cloud fa-fw"></i>LLuvia Fija</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
    @if (Auth::guest())
        <li><a href="{{ route('login') }}">Ingresar</a></li>
        <li><a href="{{ route('register') }}">Registrarse</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-user fa"></i> Bienvenido, {{ Auth::user()->name }}<i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-user" role="menu">
                <li><a href="{{ url('userprofile', Auth::user()->id) }}"><i class="fa fa-cog fa-fw"></i> Ajustes Usuario</a></li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-fw"></i>
                        Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">                       
                <li><a href="{!! url('affiliates') !!}"><i class="fa  fa-group fa-fw"></i> Afiliados</a></li>
                <li><a href="{!! url('cabins') !!}"><i class="fa  fa-home fa-fw"></i> Cabañas</a></li>
                <li><a href="{!! url('rentals') !!}"><i class="fa  fa-credit-card fa-fw"></i> Alquiler</a></li>
                <li><a href="{!! url('users') !!}"><i class="fa fa-user fa-fw"></i> Usuarios</a></li>
            </ul>
        </div>                
    </div>          
</nav>
