@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1>Les sessions</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif

    <button id="newSession" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter une nouvelle session</button>

    <div id="newSessionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/admin/sessions/new">
                        <div class="form-group">
                            <label>Début et fin de sessions:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input name="start_end_session" type="text" class="form-control float-right" id="start_end_session">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Début et fin de d'inscriptions:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input name="start_end_registration" type="text" class="form-control float-right" id="start_end_registration">
                            </div>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" integrity="sha512-gp+RQIipEa1X7Sq1vYXnuOW96C4704yI1n0YB9T/KqdvqaEgL6nAuTSrKufUX3VBONq/TPuKiXGLVgBKicZ0KA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="/vendor/adminlte/plugins/dropzone/min/dropzone.min.css">
@stop

@section('js')
    <script src="/vendor/adminlte/plugins/jquery/jquery.min.js"></script>

    <script src="/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/vendor/adminlte/plugins/select2/js/select2.full.min.js"></script>

    <script src="/vendor/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

    <script src="/vendor/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/vendor/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>

    <script src="/vendor/adminlte/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="/vendor/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script src="/vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="/vendor/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

    <script src="/vendor/adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>

    <script src="/vendor/adminlte/plugins/dropzone/min/dropzone.min.js"></script>

    <script src="/vendor/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/buttons.server-side.js"></script>

    <script>
        $('#newSession').click(function(){
            $('#newSessionModal').modal();
        });
    </script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Date range picker
            $('#start_end_session').daterangepicker()
            //Date range picker with time picker
            $('#start_end_session').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })

            //Date range picker
            $('#start_end_registration').daterangepicker()
            //Date range picker with time picker
            $('#start_end_registration').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )
        })

        // DropzoneJS Demo Code End
    </script>

    {{ $dataTable->scripts() }}
@stop
