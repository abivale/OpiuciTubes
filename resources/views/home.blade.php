@extends('layouts.main')

@section('container')

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/yyy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/yyy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/yyy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h1 class="row justify-content-center py-3">End Of Season Sale</h1>
<a href="/wanita" style="color:aliceblue">
  <div class="card bg-drak text-white">
	  <img src="img/yyy.jpg" class="card-img-top" alt="...">
	  <div class="card-img-overlay d-flex align-items-center p-0 ">
		<div class="card-title text-center flex-fill p-4 fs-6" style="background-color: rgba(0,0,0,0.7)"><h1>Sepatu Wanita</h1>
      <p>Year End Deals Up to 30% of</p>
    </div>
  </div>
</a>
 
</div>
    <h1 class="row justify-content-center">Produk Populer</h1>
    <div class="row">
 
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
     
          <div class="card-body">
            <div class="card-title"><h4>Sepatu</h4></div>
            Rp.800.000
          </div>
     
          <div class="card-footer">
            <a href="/pria" class="card-link">Lihat</a>
          </div>
        </div>
      </div>
     
      <div class="col-md-4 col-sm-6 mb-3">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
     
          <div class="card-body">
            <div class="card-title"><h4>Baju</h4></div>
            Rp.800.000
          </div>
     
          <div class="card-footer">
            <a href="/pria" class="card-link">Lihat</a>
          </div>
        </div>
      </div>
     
      <div class="col-md-4 col-sm-6 mb-3">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
     
          <div class="card-body">
            <div class="card-title"><h4>Celana</h4></div>
            Rp.800.000
          </div>
     
          <div class="card-footer">
            <a href="/wanita" class="card-link">Lihat</a>
          </div>
        </div>
      </div>
    
    </div>

    <h1 class="row justify-content-center">Featured Brands</h1>
    <p class="row justify-content-center">Pilihan Brand Terbaik Dengan Penawaran Spesial</p>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">NIKE <br> Up to 50%</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">Adidas <br> Up to 50%</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">NIKE <br> Up to 50%</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">NIKE <br> Up to 50%</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">NIKE <br> Up to 50%</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="img/yyy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <a href="#" style="background-color: black" class="btn btn-secondary btn-block">NIKE <br> Up to 50%</a>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha383-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
@endsection

    
   