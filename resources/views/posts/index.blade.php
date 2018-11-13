@extends('layouts.app')

	@section('content')
		<div class="container">
			{{-- @include('inc.messages') --}}
			<h1>Posts</h1>
			@if(count($posts) > 0)
				@foreach($posts as $post)
					<div class="well">
						<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
						<small>Written on {{ $post->created_at }}</small>
					</div>
				@endforeach
				{{ $posts->links() }}
			@else
				<p>No posts found</p>
			@endif
			<ul class="nav navbar-nav navbar-right"> 
				<li><a href="/posts/create">Create Post</a></li>
			</ul>
	</div>
	@endsection