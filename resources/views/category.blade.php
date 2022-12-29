@extends("layouts.main")

@section('container')
<p>
<h1>ALL Category</h1>
<div class="container mt-3">
    <div class="row">
      <div class="card-group">
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card">
            <img src="img/hacate.png" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Hecate</h4>
              <a href="/pria"><button type="button" class="btn btn-outline-light me-2">Selengkapnya</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card">
            <img src="img/yyy.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Wanita</h4>
              <a href="wanita"><button type="button" class="btn btn-outline-light me-2">Selengkapnya</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card">
            <img src="img/yyy.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
              <h4 class="card-title">Anak</h4>
              <a href="anak"><button type="button" class="btn btn-outline-light me-2">Selengkapnya</button></a>
            </div>
          </div>
          </div>
        </div>
    </div>
 </div>


@endsection