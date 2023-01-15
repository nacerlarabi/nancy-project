@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1>Les inscriptions</h1>
@stop

@section('content')
    {{$dataTable->table()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
    .preloader{

        display : none;
    }

    </style>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.css"/>

@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.js"></script>



    {{ $dataTable->scripts() }}
@stop
