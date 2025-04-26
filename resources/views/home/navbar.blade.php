<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* search icon style */
input{
  height: 2rem;
  width: 20rem;
}
#search{
  border: none;
  color: green;
  font-weight: 900;
}
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
    nav {
    background-color: #05386b;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    position: relative;
  }
  
  nav .logo a {
    color: #ffffff;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    letter-spacing: 2px;
  }
  nav .logo a:hover{
    color: #5cdb95;
  }
  
  nav .links ul {
    display: flex;
    list-style: none;
    gap: 20px;
  }
  
  nav .links ul li a {
    color: #d0e1f9;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
  }
  
  nav .links ul li a:hover {
    color: #5cdb95;
  }
  
  /* Responsive: stack items on small screens */
  @media (max-width: 768px) {
    nav {
      flex-direction: column;
      align-items: flex-start;
    }
  
    nav .links ul {
      flex-direction: column;
      gap: 10px;
      margin-top: 10px;
    }
  }
  #nma{
    font-weight: 1000;
    color: white !important;
  }
  form button{
    border: none;
    border-radius: 3px;
    width: 3rem;
    height: 1.5rem;
    cursor: pointer;
  }
  form button:hover{
    background-color: #5cdb95;
  }
    </style>
</head>
<body>
<header>
   <nav>
    <div class="logo">
        <a href="/">C3MA</a>
    </div>
        <div class="links">
        <ul>
        <li><form action="{{ url('/search') }}" method="GET">
                  <input type="text" name="query" placeholder="Search users..." required>
                  <button id="sub" type="submit">Search</button>
            </form>
            <li><a href="#about">About</a></li>
            <li><a href="#programs">Programs</a></li>
            <li><a href="#clients">Clients</a></li>
            @guest
            @if (Route::has('login'))
                     <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
         @endif

             @if (Route::has('register'))
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <a href="{{ url('api/clients/{client_id}') }}" class="text-decoration-none text-reset" id="nma">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </li>
        </ul>
    </div>
   </nav> 
</header>
</body>
</html>