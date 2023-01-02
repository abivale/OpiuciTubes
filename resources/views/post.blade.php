@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <p>
          <h1 class="mb-3 text-center"><Strong>{{ $post->category->name }}</Strong></h1>
            @if ($post->image)
              <div style="max-height: 600px; overflow:hidden;" align="center">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
              </div>
          @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
          @endif
          <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <article class="my-2 fs-2">
              <h2>{!! $post->body !!}</h2>
              
              <a class="btn btn-dark" href="checkout" role="button">Checkout Rp. {!! $post->harga !!}</a>
            </article>

            <a class="btn btn-primary d-block mt-3" href="/posts" role="button">Back to Posts</a>

      </div>
    </div>
  </div>


  

@endsection

