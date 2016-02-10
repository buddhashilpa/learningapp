@extends('layouts.master')
@section('title', 'Article create page')
@section('content')
    <h1>Article create</h1>

    <p>This is my body content.</p>
     @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    {!! Form::open(array('url'=>'article')) !!}
    <div class="form-control">
        {!! Form::label('Article Title') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="form-control">
        {!! Form::label('Article Description') !!}
        {!! Form::textarea('description') !!}
    </div>
    <div class="form-control">       
        {!! Form::submit('Submit') !!}
    </div>
    {!! Form::close() !!}
@endsection