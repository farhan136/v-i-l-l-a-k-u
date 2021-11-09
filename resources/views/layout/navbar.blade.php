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
          <a class="nav-link" href="{{url('/testi')}}">Testi</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{route('riwayat', Auth::user()->getid())}}">Riwayat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/logoutuser')}}">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        @endif
        </li>
        
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- Akhir Navbar -->
