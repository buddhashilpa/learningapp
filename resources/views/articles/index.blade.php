@extends('layouts.master')
@section('title', 'Article page')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
<h1>Articles</h1>

<ul>
	@foreach($articles as $art)
	<li>{!! link_to_action('ArticleController@show', $title = $art->title, $parameters = array('id'=>$art->id)) !!}
		{!! link_to_action('ArticleController@edit', $title =  'Edit', $parameters = array('id'=>$art->id)) !!}
		{!! Form::open(array('action' => array('ArticleController@destroy',$art->id),'method' => 'DELETE')) !!}
			{!! Form::submit('Delete!') !!}
		{!! Form::close() !!}
		
	</li>
	@endforeach
</ul>
{{ $name or 'Default' }}
@endsection