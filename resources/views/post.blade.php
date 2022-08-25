@extends('layouts.main')

@section('container')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <p>By. Daniel Marb in <a href="/categories/{{ $post->category->slug }} ">  {{ $post->category->name  }}</a> </p>
    
     <!-- Ini bisa digunakan kalau untuk memakai paragraph, tetapi dikaliamtnya dimasukkan syntax htmlnya -->
     {!! $post->body !!}

    <!-- ini akan menambahkan kalimat tapi untuk paragraphnya tidak ada karena tidak medeteksi syntak html -->
    <!-- {{ $post->body }}  -->
  
    
</article>

<a href="/blog">Back to blog</a>
@endsection

