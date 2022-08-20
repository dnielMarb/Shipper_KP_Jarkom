@extends('layouts.main')

@section('container')

<article class="mb-5">
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p> {{ $post["body"] }} </p>
    <p>Tes aja broo</p>
</article>

<a href="/blog">Back to blog</a>
@endsection