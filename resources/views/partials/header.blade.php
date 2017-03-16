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
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa"></i> Bienvenido, Pepito Perez <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{!! url('lluviafija/perfilUsuario') !!}"><i class="fa fa-cog fa-fw"></i> Ajustes Usuario</a></li>                      
                <li class="divider"></li>
                <li><a href="{!! url('/') !!}"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a></li>
            </ul>                   
        </li>              
    </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">                       
                <li><a href="{!! url('lluviafija/listarAfiliados') !!}"><i class="fa  fa-group fa-fw"></i> Afiliados</a></li>
                <li><a href="{!! url('lluviafija/listarCabanas') !!}"><i class="fa  fa-home fa-fw"></i> Cabañas</a></li>
                <li><a href="{!! url('rentals') !!}"><i class="fa  fa-credit-card fa-fw"></i> Alquiler</a></li>
                <li><a href="{!! url('lluviafija/listarUsuarios') !!}"><i class="fa fa-user fa-fw"></i> Usuarios</a></li>                 
            </ul>
        </div>                
    </div>          
</nav>
