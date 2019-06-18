
<body>

    <header>




        <nav class="navbar navbar-expand-sm bg-light navbar-light flex-center position-ref full-height ">
            <!-- Links -->
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('post') }}">Post</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('category') }}">Category</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-danger " href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('login') }}">Login</a>
                    </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif

            </ul>
        </nav>


    </header>


     {{--<p class="display-3 text-center">This Is {{$title}}  Page </p>--}}




