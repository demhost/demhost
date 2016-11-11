@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Safenote</div>

                <div class="panel-body">

				{!! Form::open(['url' => 'foo/bar']) !!}
				    {!! Form::label('email', 'E-Mail Address') !!}
				    {!! Form::text('email', 'example@gmail.com') !!}
				{!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
