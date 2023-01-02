@extends('layouts.main')

@section('container')
<p>
  <h2 class="mb-3 text-center"><strong style="color: black">Selamat Datang Di Online Shop Opiuci</strong></h2> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slider.css">
<div class="row">
    <div class="slider">
        <div class="slide current">
            <div class="content">
                <h1>Hecate</h1>
                <p>Hecate merupakan merek lokal asli indonesia yang dirikan sejak 2014 dan dikelola pada tahun 2020 </p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
              <h1>Vantela</h1>
              <p>Sepatu Vantela ini sering diketahui sebagai brand luar negri. Ventela caption sepatu dengan siluet mirip sepatu Converse ini terus melejit. Bahkan Venetela menjadi merek sepatu yang paling dicari di Indonesia sepanjang 2019.  Usud punya usud ternyata Ventela yang diproduksi oleh pabrik besar di Bandung yang sudah bertahan dari tahun 70-an. Di mana awalnya memproduksi merek lokal namanya Dallas, lalu Reborn dan sekarang menjadi Ventela..</p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>Erigo</h1>
                <p>Erigo (Erigo Apparel) merupakan merek fashion lokal asli Indonesia yang populer. Kepopulerannya tersebut tak hanya terjadi di Indonesia, tetapi juga mancanegara. Alasannya, selain memiliki kualitas yang bagus, desain jaket Erigo juga stylish.</p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>Hecate</h1>
                <p>Hecate merupakan merek lokal asli indonesia yang dirikan sejak 2014 dan dikelola pada tahun 2020 </p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>Vantela</h1>
                 <p>Sepatu Vantela ini sering diketahui sebagai brand luar negri. Ventela caption sepatu dengan siluet mirip sepatu Converse ini terus melejit. Bahkan Venetela menjadi merek sepatu yang paling dicari di Indonesia sepanjang 2019.  Usud punya usud ternyata Ventela yang diproduksi oleh pabrik besar di Bandung yang sudah bertahan dari tahun 70-an. Di mana awalnya memproduksi merek lokal namanya Dallas, lalu Reborn dan sekarang menjadi Ventela..</p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
              <h1>Erigo</h1>
              <p>Erigo (Erigo Apparel) merupakan merek fashion lokal asli Indonesia yang populer. Kepopulerannya tersebut tak hanya terjadi di Indonesia, tetapi juga mancanegara. Alasannya, selain memiliki kualitas yang bagus, desain jaket Erigo juga stylish.</p>
          </div>
        </div>
    </div>
    <div class="buttons">
        <button style="background-color: rgba(0, 0, 0, 0.099)" id="prev"><i class="fas fa-arrow-left"></i></button>
        <button style="background-color: rgba(0, 0, 0, 0.099)"  id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
</div>

    <script src="js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha383-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection
