<!doctype html>

<html lang="en">
    
    <head> 
    
        <meta charset="UTF-8">
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{{ URL::secure('src/css/main.css')}}">
        @yield('styles')
        
        <body>
            
            @include('includes.admin_header')
            <div class="main">
                @yield('content')
            </div>
            
        </body>
    
    </head>
    
</html>