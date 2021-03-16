<header>
  <div class="links header-cont">
      <a href="http://localhost:8000/">
        <img id="stark" src="{{asset('images/stark.png')}}" alt="">
      </a>
      @auth
          <a href="{{ url('/home') }}">User</a>
      @else
      <div class="links">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
      </div>
      @endauth
  </div>
</header>
