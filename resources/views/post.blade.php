@extends('layouts.main')

@section('container')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
     {{ $post->body }} 

     <!-- Ini bisa digunakan kalau untuk memakai paragraph, tetapi dikaliamtnya dimasukkan syntax htmlnya -->
     <!-- {!! $post->body !!} -->
     
    
</article>

<a href="/blog">Back to blog</a>
@endsection

