@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1>Modifier mot de passe</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif

    <form action="/password/change/submit" method="POST">

        <div class="form-group">
            <label for="oldPass">Ancien mot de passe</label>
            <input type="password" class="form-control" id="oldPass" name="oldPass" placeholder="Old password">
        </div>
        <div class="form-group">
            <label for="password">Nouveau mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="New password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmation du nouveau mot de passe</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

@stop
