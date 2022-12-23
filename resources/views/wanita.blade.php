@extends("layouts.main")

@section('container')
<p>
<h1>Popular Right Now</h1>
<div class="container mt-5">
    <div class="row">
      <div class="card-group">
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card">
            <img src="img/yyy.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Baju</h4>
              <p class="card-text">A very comfortable outfit to wear on weekdays or weekdays</p>
              <a href="/cewebaju"><button type="button" class="btn btn-outline-light me-2">Shop</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card">
            <img src="img/yyy.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Celana</h4>
              <p class="card-text">A very comfortable outfit to wear on weekdays or weekdays</p>
              <a href="#"><button type="button" class="btn btn-outline-light me-2">Shop</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card">
            <img src="img/yyy.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Sepatu</h4>
              <p class="card-text">A very comfortable outfit to wear on weekdays or weekdays</p>
              <a href="#"><button type="button" class="btn btn-outline-light me-2">Shop</button></a>
            </div>
          </div>
          </div>
        </div>
    </div>
 </div>


@endsection