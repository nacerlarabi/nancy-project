@extends('adminlte::page')

@section('title', 'Summer Courses: roles')

@section('content_header')
    <h1>Les roles</h1>
@stop

@section('content')
    {{$dataTable->table()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="js/buttons.server-side.js"></script>

    {{ $dataTable->scripts() }}
@stop
