<x-layout>

<article>

<h1>{{ $post->title }}</h1>

<p>
By<a href="#">{{ $post->user }}</a>in<a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
</p>

<div>

{!! $post->body !!}

</div>

</article>

<a href="/">Go Home</a>

</x-layout>