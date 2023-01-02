@extends('layouts.main')

@section('container')
<p>
  <h1 class="mb-3 text-center"><strong>Semua Categories</strong></h1> 
<div class="footer-categories">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="/posts?category=erigo">
        <div class="card text-bg-dark">
          <img src="img/logoErigo.jpg" class="card-img">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">Erigo</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4"> 
        <a href="/posts?category=hecate">
          <div class="card text-bg-dark">
            <img src="img/logoHecate.png" class="card-img">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">Hecate</h5>
              </div>
            </div>
          </a>

      </div>
       
      <div class="col-md-4">
        <a href="/posts?category=ventela">
          <div class="card text-bg-dark">
            <img src="img/logoVentelaaa.jpg" class="card-img">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">Ventela</h5>
              </div>
            </div>
          </a>
      </div>
    </div>
  </div>
</div>
  
  

@endsection