<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="/asset/elements/logo1.png" width="175" height="50"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tentang')}}">About</a>
        </li>
        <li class="nav-item">
          @if(Auth::check()) 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="#">{{session('nama')}}</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/testi')}}">Testi</a>
              <a class="dropdown-item" href="{{url('/logoutuser')}}">Logout</a>
            </div>
          </li>

          @endif
        </li>
        
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- Akhir Navbar -->
