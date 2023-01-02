@extends('layouts.main')

@section('container')
<p>
  <h1 class="mb-3 text-center"><strong>{{ $title }}</strong></h1>

  <div class="footer-produk">
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
            <input type = "hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type = "hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
  
  
  
  
    @if ($posts->count())
      <div class="card mb-3">
        @if ($posts[0]->image)
          <div style="max-height: 600px; overflow:hidden;" align="center">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
          </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        
          <div class="card-body text-center">
            <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <h5 class="card-number">Rp. {{ $posts[0]->harga }}</h5>
            
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Selengkapnya</a>
  
  
        </div>
      </div>
  
  
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text->decoration->none">{{ $post->category->name }}</a></div>
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                  
                <p class="card-text">{{ $post->excerpt }}</p>

                <h5 class="card-number">Rp. {{ $post->harga }}</h5>
                <a href="/posts/{{ $post->slug }}" class="btn btn-dark">Selengkapnya</a>

              </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
    
    @else
        <p class="text-center fs-4">Tidak ada post produk</p>
    @endif

    <a class="btn btn-dark d-block mt-3" href="/" role="button">Back to Home</a>
  
  </div>
 

@endsection