<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
	    @yield('header', 'laravel-static-pages::header')
	    @yield('content')
	    @yield('footer', 'laravel-static-pages::footer')
    </body>
</html>
