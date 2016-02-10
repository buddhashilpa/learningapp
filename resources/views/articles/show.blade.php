@extends('layouts.master')
@section('title', 'Article create page')

@section('content')
    <h1>{{ $article->title}}</h1>

   <p>{{ $article->description }}</p>
 @endsection