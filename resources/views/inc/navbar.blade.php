<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
           
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{config('app.name')}}  
            
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            {{-- || !Auth::guard('admin') --}}
            @if (!Auth::guest())
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/dashboard') }}">User Dashboard </a></li>
            </ul>
            @endif
            @if(Auth::guard('admin')->check())
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/admin') }}">Admin Dashboard</a></li>
            </ul>
            @endif --}}

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                     {{Auth::guest()}}
                    <li><a href="{{ url('/login') }}">User Login</a></li>
                    <li><a href="{{ url('/register') }}">UserRegister</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>>
                @endif
                @if(Auth::guard('admin')->check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Admin <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li
                @endif
              
            </ul>
        </div>
    </div>
</nav>