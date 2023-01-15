@extends('template')

@section('contenu')
    <br>
    <p>test</p>
    <div class="position-relative"> <div class="position-absolute top-50 start-50">
            <ul class="list-inline">
                <li><a href="#" class="fa fa-instagram" style="color:white;"></a></li>
                <li><a href="#" class="fa fa-twitter" style="color:white;"></a></li>
                <li><a href="#" class="fa fa-facebook" style="color:white;"></a></li>
            </ul>
        </div></div>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Ajout de contenu</div>
            <div class="panel-body">
                {!! Form::open(array('url' => 'content/form')) !!}
                <div class="form-group {!! $errors->has('content') ? 'has-error' : '' !!}">

                    {!! Form::token() !!}
                    {!! Form::text('page', null, array('class' => 'form-control', 'placeholder' =>"Entrez le nom de votre page"))!!}
                    {!! Form::text('mnemonic', null, array('class' => 'form-control', 'placeholder' => 'Entrez le nom de votre page')) !!}
                    {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre contenu')) !!}
                    {!! Form::select('Langue', array('fr' => 'Françsais', 'en' => 'English', 'ru' => 'russe', 'zh'=> 'chinois'), 'ru') !!}

                    {!! $errors->first('content', '<small class="help-block">:message</small>') !!}

                </div>
                {!! Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
