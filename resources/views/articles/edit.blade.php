@extends('layouts.master')
@section('title', 'Article edit page')

@section('content')
<h1>Article edit</h1>

    <p>This is my body content.</p>
     @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    {!! Form::model($article, array('route' => array('article.update', $article->id))) !!}
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
    {!! method_field('PUT') !!}
    {!! Form::close() !!}
 @endsection