@extends ('components.layout')

@section('contents')

<article>

<h1>{{ $post->title }}</h1>

<div>

{{!! $post->body !!}}

</div>

</article>

<a href="/">Go Home</a>

@endsection