
   <nav>
    <header class="p-3 bg-black">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
    
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px2 text-white" href="/" role="button" data-bs-toggle="dropdown">
                Category
              </a>
              <ul class="dropdown-menu bg-drack">
                <li><a class="dropdown-item text-black" href="/wanita">Women</a></li>
                <li><a class="dropdown-item text-black" href="/pria">Men</a></li>
                <li><a class="dropdown-item text-black" href="/anak">Kids</a></li>
              </ul>
            </li>
            <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
          </ul>
         
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
          </form>
          
          @auth
          <li class="nav-item dropdown row">
            <a class="nav-link dropdown-toggle px2 text-white" href="/" role="button" data-bs-toggle="dropdown">
              Welcome Back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu bg-drack">
              <li><a class="dropdown-item text-black" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li>
                 <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item text-black"><i class="bi bi-box-arrow-in-right"></i> Logout</a></button>
                 </form>
              </li>
            </ul>
          </li>
          @else
          <div class="text-end">
            <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
            <a href="/register"><button type="button" class="btn btn-warning">Buat Akun</button></a>
            
          </div>
          @endauth
          
        </div>
      </div>
    </header>
   </nav>
   <div class="d-flex">
    <div class="form-check form-switch ms-auto mt-3 me-3 py-0">
      <label class="form-check-label ms-3" for="lightSwitch">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="25"
          height="25"
          fill="currentColor"
          class="bi bi-brightness-high"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
          />
        </svg>
      </label>
      <input class="form-check-input" type="checkbox" id="lightSwitch" />
    </div>
  </div>
  