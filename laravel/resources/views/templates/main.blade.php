<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" media="screen" charset="utf-8">
    </head>
    <body>
      @yield('body_content')

      @section('body_js')
         <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
      @show
    </body>
</html>
