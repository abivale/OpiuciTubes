@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Buat Akun</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" >
          <label for="name" class="text-black">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
          <label for="username" class="text-black">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
          <label for="email" class="text-black">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password" class="text-black">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Daftar </button>
      </form>
      <small class="d-block text-center mt-3">Udah registrasi coy ? <a href="/login">Login</a> </small>
    </main>
  </div>
</div>

@endsection