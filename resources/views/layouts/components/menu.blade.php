<ul class="navbar-nav ml-auto">
    <li class="nav-item">
       <a class="nav-link" href="home">Home</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="about">About</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="skill">Skills</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="portfolio">Portfolio</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="contact">Contact Me</a>
    </li>
    @if(Auth::check())
    <li class="nav-item">
       <a class="nav-link" href="dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link btn btn-link" style="border: none; padding: 0; cursor: pointer; background: none; margin-top: 10px;">
                Logout
            </button>
        </form>
    </li>
    
    @else
    <li class="nav-item">
       <a class="nav-link" href="login">Login</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="login">Register</a>
    </li>
    @endif
 </ul>