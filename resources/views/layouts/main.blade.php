<!DOCTYPE html>
<html lang="{{ $LANG ?? '' }}">

<head>@include('common.head', ['head' => $head])</head>
<body style="background-color: {{ $color }}">
<header>@include('common.header', ['menu' => $menu])</header>
<core>@yield('content')</core>
<footer>@include('common.footer')</footer>
@include('common.before_page')
</body>
</html>
