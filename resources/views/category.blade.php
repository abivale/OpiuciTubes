@extends("layouts.main")

@section('container')
<p>
<h1>ALL Category</h1>
<div class="container mt-3">
    <div class="row">
      <div class="card-group">
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card"> 
            <a href="/hecate">
            <img src="img/hacate.png" class="card-img-top">
            <div class="card-img-overlay text-white d-flex align-items-center p-0">
              <h4 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.485)"> Hecate</h4>
            </div>
          </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card">
            <a href="/ventela">
            <img src="img/ventela.jpeg" class="card-img-top">
            <div class="card-img-overlay text-white d-flex align-items-center p-0">
              <h4 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.485)">Ventela</h4>
            </div>
          </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card">
            <a href="/erigo">
            <img src="img/erigo.jpeg" class="card-img-top">
            <div class="card-img-overlay text-white d-flex align-items-center p-0 fs-4">
              <h4 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.485)">Erigo</h4>
            </div>
          </a>
          </div>
          </div>
        </div>
    </div>
 </div>


@endsection