<!DOCTYPE html>
<html lang="{{ $LANG }}">

<head>@include('head')</head>
<body>
<header>@include('header')</header>
<core>@yield('contenu')</core>
<footer>@include('footer')</footer>
@include('before_page')
</body>
</html>
