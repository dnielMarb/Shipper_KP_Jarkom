@extends(' layouts.main ')

@section('container')

<h1 class="mb-5">Halaman BLog Posts</h1>
@foreach($posts as $post)
<article class="mb-5 border-botton pb-2">
    <h2>
       <a href="/posts/{{ $post->slug }}" class="text-decoration=none"> {{ $post->title }}</a>
    </h2>
    <p>By. Daniel Marb in <a href="/categories/{{ $post->category->slug }} " class="text-decoration=none" >  {{ $post->category->name  }}</a> | <a href="/categories" class="text-decoration=none">all categories</a></p>
    <!-- <h5>By : {{ $post->author }}</h5> -->
    <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-decoration=none">Read more...</a></p>
</article>
@endforeach

@endsection
