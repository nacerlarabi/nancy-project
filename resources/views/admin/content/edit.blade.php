@extends('adminlte::page')

@section('title', 'Summer Courses')

@section('content_header')
    <h1><i class="fa-solid fa-pen-to-square"></i> Modifier le contenu</h1>
@stop

@section('content')

    <div data-ssd-confirm>

        <div data-ssd-confirm-block="remove">

            <p data-ssd-confirm-content></p>

            <nav>

            <span data-button-wrapper>

                <span
                        id="confirm-update-content"
                        class="small alert button-al"
                        data-ssd-confirm-no>OUI</span>

                <span
                        class="small alert disabled button-al hide"
                        data-processing
                ><i class="fa fa-spinner fa-spin fa-fw"></i></span>

            </span>

                <span class="small button-al" data-ssd-confirm-no>NON</span>

            </nav>

        </div>

    </div>

    <div data-ssd-confirm-overlay></div>


    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title">Modifier le contenu</h5>
            <div id="summernote" data-content-id="{{ $content->id }}">{!! $content->content !!}</div>
            <button class="btn btn-success" id="ctn"  class="small button"
                    data-ssd-confirm-trigger="remove"
                    data-ssd-confirm-message="Êtes vous sûre de vouloir modifier ce contenu ?"
                    data-ssd-confirm-url="/remove.json"
                    data-ssd-confirm-behaviour="removeRow">Modifier le contenu</button>
        </div>
    </div>

    <h4><i class="fa-solid fa-images"></i> Images liés au contenu</h4>

    <div class="card card-primary card-outline">
        <div class="card-body" style="padding-left: 50px;">
    <div class="images-div">

        <a class="elem" href="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>
        <a class="elem" href="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 2" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>
        <a class="elem" href="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 3" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>

        <a class="elem" href="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 4" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>
        <a class="elem" href="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 5" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>
        <a class="elem" href="https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 6" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
            <span style="background-image: url(https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
        </a>


        @foreach($content->pictures as $picture)

            <a class="elem" href="{{ $picture->getImagePath() }}" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="{{ $picture->getImagePath() }}">
                <span style="background-image: url({{ $picture->getImagePath() }});"></span>
            </a>

        @endforeach

        <br/><br/>
{{--
        <div class="images-list row">
         @foreach($content->pictures as $picture)

                <div class="col-4">

                  <img src="{{ $picture->getImagePath() }}"><br><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="form-check-label" for="exampleRadios1">
                        Principal
                    </label>
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>

            @endforeach



        </div>
        --}}


        <br>
      <div class="row">
          <button class="btn btn-success" data-toggle="modal" data-target="#images-modal" >Ajouter des images au contenu</button>
      </div>

    </div>
        </div>
    </div>

    <div class="modal fade" id="images-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choisir l'image à ajouter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body images-modal-body" data-content-id="{{ $content->id }}">
                    <?php $columnsCount = 12; ?>
                    @foreach($images as $image)
                            <?php echo $columnsCount%12 == 0 ? "<div class='row'>" : ""; ?>
                    <div class="col-md-6">
                        <img id="image-{{ $image->id }}" src="{{ $image->getImagePath() }}" class="col-md-6" alt="">
                        <button id="button-{{ $image->id }}" class="btn btn-success offset-md-2 col-md-3" style="margin-top: 50px;"><i id="plus-{{ $image->id }}" class="fa-solid fa-square-plus"></i><i id="check-{{ $image->id }}" class="fa-solid fa-circle-check"></i></button>
                    </div>
                                <?php echo $columnsCount%12 == 6 ? "</div><br>" : ""; ?>

                                <?php $columnsCount=$columnsCount+6; ?>

                    @endforeach

                </div>
                <div class="modal-footer">
                    <button id="save-images" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/toastr.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/lc_lightbox.css" />
    <link rel="stylesheet" href="/skins/minimal.css" />
    <link href="/assets/css/ssd-confirm.css" rel="stylesheet">
    <link href="/css/foundation.css" rel="stylesheet">

    <style>
        article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}

        #logo {
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYlJREFUeNrcV4FtgzAQBJQB3AlCN0gmiNkgnaBhg25QMUHSCUInKJkgZgNGyAhskP6r58qJsCEUE5qXLMvI8t//359NGDhMytWepk3gz7LQ4VzSdAw8WxTc2WYd9ymlymQop5Td87/IQEVDR137AhAahPNlFZWvtpVgRgtmulcA5CO5BmFyQHou8wJjmm3YB0B9TwAp1fKJ5mcap7EB7Mh5/qNKJTv/GAuAQsSHq+/zMaQ4R6RfzGRqpwJrZvWbbwDaGeuEwLc1hmm6HNshS8BMTxG5aDkjxv5sSAAFIo07nsPR7/p0RuSI6vWGcwQ4UQwFQPaQ6FVDp0z/RTRJAMxovj75rbDsqP0pnmyVjYikIawjR1z/TgA5HaYguRXEqO29qCXa1Y6iiVuRZaNr3dQxrrUTfGg+j8wfBtwBJ+hBm8pxBj7hfNsAWpdncZm60grA5EOG/n5H+mIAEx2y8wtAl/XWLhCIiCW5pPECciZ9ROcvPyacuj3Y/Pg6MDqAzLOP3EZAtm8BBgDqc3bEpb6xyQAAAABJRU5ErkJggg==') no-repeat center center transparent;
            background-size: contain;
            width: 25px;
            height: 25px;
            display: inline-block;
            position: relative;
            bottom: -4px;
            left: -4px;
        }

        .elem, .elem * {
            box-sizing: border-box;
            margin: 0 !important;
        }
        .elem {
            display: inline-block;
            font-size: 0;
            width: 33%;
            border: 20px solid transparent;
            border-bottom: none;
            background: #fff;
            padding: 10px;
            height: auto;
            background-clip: padding-box;
        }
        .elem > span {
            display: block;
            cursor: pointer;
            height: 0;
            padding-bottom:	70%;
            background-size: cover;
            background-position: center center;
        }

    </style>

    <style>
        .preloader{

            display : none;
        }

    </style>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="/js/buttons.server-side.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="/toastr.min.js"></script>
    <script src="/js/lc_lightbox.lite.js" type="text/javascript"></script>
    <script src="/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
    <script src="/js/jquery.ssd-confirm.js"></script>



    <script>

        $(document).ready(function() {

            $('#summernote').summernote();

            $('[data-ssd-confirm-trigger]').ssdConfirm();

            $('#confirm-update-content').click(function(){

                $.ajax({
                    url: '/admin/content/update',
                    type: 'post',
                    dataType: 'json',
                    data:  {'_token': $('meta[name="_token"]').attr('content'), 'content_text': $('#summernote').summernote('code'),'content_id' : $("#summernote").attr("data-content-id") },
                    success: function(data) {

                        toastr.success('Contenu modifié avec succces');

                    }
                });

            });

            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery : true,
                thumb_attr: 'data-lcl-thumb',

                skin: 'minimal',
                radius: 0,
                padding	: 0,
                border_w: 0,
            });
        });
    </script>

    <script>

        $(document).ready(function(){

            var $modal = $('#images-modal');
            var imagesCount = 0;
            var imagesList = [];

            function animateButton(i){

                $("#plus-"+i).fadeToggle();
                $("#check-"+i).fadeToggle();

            }

            jQuery.extend({
                getValues: function(url) {
                    var result = null;
                    $.ajax({
                        url: url,
                        type: 'get',
                        dataType: 'json',
                        async: false,
                        success: function(data) {
                            result = data;
                        }
                    });
                    return result;
                }
            });

            imagesCount = $.getValues('/admin/images/get/ids');

            for (let i = 0; i <= imagesCount.length; i++) {

                console.log(imagesCount[i].id);
                $("#check-"+imagesCount[i].id).hide();

                $("#button-"+imagesCount[i].id).click(function() {

                    imagesList.push(imagesCount[i].id);
                    animateButton(imagesCount[i].id);

                });

            }

            $("#save-images").click(function(){

                $.ajax({
                    url: '/admin/content/attach/images',
                    type: 'post',
                    dataType: 'json',
                    data:  {'_token': $('meta[name="_token"]').attr('content'), 'images': imagesList,'content_id' : $("#images-modal-body").attr("data-content-id") },
                    success: function(data) {
                        $modal.modal('hide');
                        toastr.success('Images ajoutées avec succces');

                        initImagesDiv();

                    }
                });

            });
        });

    </script>

@stop
