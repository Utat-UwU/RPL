<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    </head>
	<body>
        <h1>warewarehouse</h1>		
		@yield('content')
	</body>
</html>