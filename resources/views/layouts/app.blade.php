<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
    @yield('css')
</head>
<body>
    @yield('content')

    <script src="{{asset('js/app.js')}}" ></script>
    @yield('scripts')
</body>
</html>
