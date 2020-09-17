<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full Stack blog</title>

     <link rel="stylesheet" href="/css/all.css">
     <script>
     (function(){
        window.Laravel={
            csrfToken:'{{csrf_token()}}'
        };
     })();
     </script>
       
    </head>
    <body>
       <div id="app">
       @if(Auth::check())
        <mainapp :user="{{Auth::user()}}" ></mainapp>
        @else
        <mainapp :user="false" ></mainapp>
        @endif
       </div>
       <script src="{{mix('/js/app.js')}}"></script>
    </body>
</html>
