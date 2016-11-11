@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Safenote</div>

                <div class="panel-body">
				{!! Form::model(['route' => 'safenote::store']) !!}

                    <div class="form-group {!! $errors->first('name', 'has-error') !!}">
                        {!! Form::label('name', 'Название', ['class' => 'control-label']) !!}
                        {!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Например: mysite.com']) !!}
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {!! $errors->first('description', 'has-error') !!}">
                        {!! Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Описание Safenote']) !!}
                        {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
                    </div>


                    <!-- Карточка -->
                    <div class="form-group {!! $errors->first('address', 'has-error') !!}">
                        {!! Form::label('address', 'address', ['class' => 'control-label']) !!}
                        {!! Form::text('address', '', ['class'=>'form-control', 'placeholder'=>'mysite.com']) !!}
                        {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {!! $errors->first('port', 'has-error') !!}">
                        {!! Form::label('port', 'port', ['class' => 'control-label']) !!}
                        {!! Form::text('port', '', ['class'=>'form-control', 'placeholder'=>'mysite.com']) !!}
                        {!! $errors->first('port', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {!! $errors->first('login', 'has-error') !!}">
                        {!! Form::label('login', 'login', ['class' => 'control-label']) !!}
                        {!! Form::text('login', '', ['class'=>'form-control', 'placeholder'=>'mysite.com']) !!}
                        {!! $errors->first('login', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {!! $errors->first('pass', 'has-error') !!}">
                        {!! Form::label('pass', 'pass', ['class' => 'control-label']) !!}
                        {!! Form::text('pass', '', ['class'=>'form-control', 'placeholder'=>'mysite.com']) !!}
                        {!! $errors->first('pass', '<span class="help-block">:message</span>') !!}
                    </div>

                    {{ Form::submit('Создать', ['class'=>'btn btn-success']) }}
				{!! Form::close() !!}

                <pre>{{ var_dump($errors) }}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
