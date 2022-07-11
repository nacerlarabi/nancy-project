@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1>Les utilisateurs</h1>
@stop



@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <br>
    <!-- Large modal -->
    <button id="newUser" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter un nouveau utilisateur</button>

    <div id="myModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/admin/users/new">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email : </label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mot de passe : </label>
                            <input type="text" class="form-control" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Role : </label>
                            <select name="role" id="role">
                                <option value="super-admin">Super administrateur</option>
                                <option value="admin">Administrateur</option>
                                <option value="user">Simple utiilisateur</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <input type="submit" value="Ajouter" class="btn btn-success">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <br><br>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script>
        $('#newUser').click(function(){
            $('#myModal').modal();
        });


    </script>


    {{ $dataTable->scripts() }}
@stop
