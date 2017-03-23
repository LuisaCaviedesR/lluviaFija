<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lluvia Fija</title>
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('components/metisMenu/dist/metisMenu.min.css') !!}
        {!! Html::style('components/bootstrap-datepicker/css/bootstrap-datepicker.min.css') !!}
        {!! Html::style('components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}
        {!! Html::style('components/select2-bootstrap-css/select2-bootstrap.css') !!}
        {!! Html::style('components/select2/select2.css') !!}
        {!! Html::style('css/layout.css') !!}
        {!! Html::style('fonts/font-awesome/css/font-awesome.min.css') !!}

    </head>
    <body>
        <div id="wrapper">
             @include('partials.header')
              <div id="page-wrapper">
                  <!-- Espacio para los mensajes flash enviados entre solicitudes -->
                    @if(Session::has('flash_message'))
                        <article class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </article>
                    @endif
                  <div class="container-fluid">@yield('content')</div>
            </div>
        </div>
        <!-- Include Date Range Picker -->

        <!-- Scripts -->
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('components/metisMenu/dist/metisMenu.min.js') !!}
        {!! Html::script('components/datatables/media/js/jquery.dataTables.min.js') !!}
        {!! Html::script('components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}
        {!! Html::script('components/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
        {!! Html::script('components/select2/select2.js') !!}
        {!! Html::script('js/layout.js') !!}
        {!! Html::script('js/funciones.js') !!}
    </body>
</html>
