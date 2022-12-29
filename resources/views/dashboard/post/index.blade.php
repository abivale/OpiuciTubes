@extends('dashboard.layouts.main')


@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post Product</h1>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Barang</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $post as $post)
        <tr>
          <td>{{ $loop->interation }}</td>
          <td>{{ $post->nama_barang}}</td>
          <td>{{ $post->nama_harga}}</td>
          <td>{{ $post->category }}</td>
          <td>text</td>
        </tr> 
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection