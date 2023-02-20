<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>


    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>
<body>
@include('partial.header')

<div>
    <img src="{{asset('/image/lady-bg.jpg')}}">
</div>

@yield('content')

@include('partial.footer')

@yield('scripts')
</body>
</html>
