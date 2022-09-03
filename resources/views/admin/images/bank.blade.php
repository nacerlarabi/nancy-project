@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1>Banque des images</h1>
@stop

@section('content')
    <div class="card">
        <h2 class="card-header">Importer une image</h2>
        <div class="card-body">
            <div class="row">
            <label for="title" class="col-5">Donnez un titre à votre image</label><input type="text" name="title" id="title" class="form-control col-6"><br><br>
            <label for="title" class="col-5">Sélectionnez l'image à importer</label><input type="file" name="image" class="image" name="image">
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cropez et enregistrer votre image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container" id="img-modal">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>

                    <div id="loader">
                      <img id="ajaxLoading" src="/loader.gif" alt="" width="50%">
                      <span style="margin-left: -75px;">Chargement de l'image en cours</span>

                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
    {{$dataTable->table()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="/toastr.min.css" rel="stylesheet"/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <style type="text/css">
        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid #ff0000;
        }

        .modal-lg{
            max-width: 1000px !important;
        }

        #loader{
            position: absolute;
            left: 45%;
            margin-right: -100px;
            margin-top: -25%;
        }
    </style>
@stop

@section('js')

    <script src="/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="js/buttons.server-side.js"></script>

    {{ $dataTable->scripts() }}

        <script>

            $("#ajaxLoading").hide(1);

            var $modal = $('#modal');
            var image = document.getElementById('image');
            var cropper;
            $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
            file = files[0];

            if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
            done(reader.result);

        };
            reader.readAsDataURL(file);
        }
        }
        });
            $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 0,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
            $("#crop").click(function(file){
                /*
                     image = document.getElementById('image');

                     fetch(image.src)
                         .then((res) => res.blob())
                         .then((blob) => {

                             // Read the Blob as DataURL using the FileReader API
                             const imageReader = new FileReader();
                             imageReader.readAsDataURL(blob);
                             imageReader.onloadend = () => {
                                 console.log('test 3');
                                 $.ajax({
                                     type: "POST",
                                     dataType: "json",
                                     url: "/admin/images/upload",
                                     data: {'_token': $('meta[name="_token"]').attr('content'), 'image': imageReader.result},

                                     success: function (data) {
                                         console.log("hello world test");
                                         $modal.modal('hide');
                                         alert("Crop image successfully uploaded");

                                     }

                                 });

                             }

                         });




                     var img = new Image;
                     var c = document.createElement("canvas");
                     var ctx = c.getContext("2d");

                     img.onload = function() {
                         c.width = this.naturalWidth;
                         c.height = this.naturalHeight;
                         ctx.drawImage(this, 0, 0);
                         c.toBlob(function(blob) {



                         }, "image/jpeg", 0.75);
                     };
                     img.crossOrigin = "";
                     img.src = "url-to-image";

     */

            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });

            canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
            var base64data = reader.result;
            $.ajax({
            type: "POST",
            dataType: "json",
            url: "/admin/images/upload",
            beforeSend: function(){

                $("#img-modal").css('visibility','hidden');
                $("#ajaxLoading").show(1);
            },
            data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data,'title':  $('#title').val()},
            success: function(data){
            $modal.modal('hide');

            $("#img-modal").css('visibility','visible');
            $("#ajaxLoading").hide(1);
             toastr.success('Image chargée avec succces');
        }
        });
        }
        });
        })
    </script>
@stop
