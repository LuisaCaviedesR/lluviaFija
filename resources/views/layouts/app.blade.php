<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lluvia Fija</title>
        {!! Html::style('assets/css/bootstrap.css') !!}  
        {!! Html::style('components/metisMenu/dist/metisMenu.min.css') !!}  
        {!! Html::style('css/layout.css') !!} 
        {!! Html::style('fonts/font-awesome/css/font-awesome.min.css') !!}    
    </head>    
    <body>
        <div id="wrapper">
             @include('partials.header')
              <div id="page-wrapper">
                  <div class="container-fluid">@yield('content')</div>
            </div>      
        </div>        
            
        <!-- Scripts -->
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') !!}       
        {!! Html::script('assets/js/bootstrap.min.js') !!}  
        {!! Html::script('components/metisMenu/dist/metisMenu.min.js') !!}  
        {!! Html::script('js/layout.js') !!}      
    </body>
</html>

