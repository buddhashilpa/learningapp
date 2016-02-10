@extends('layouts.master')
@section('title', 'About us page')
@section('sidebar')
<h1>Contact me {{ $name.' '.$lastname }}</h1>
<p>This is appended to the master sidebar.</p>
@section('content')
    <p>This is my body content.</p>

@stop