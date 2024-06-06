<header>
    <nav class="navbar navbar-expand-md shadow-sm d-flex flex-wrap">
        <div class="logo d-flex justify-content-center w-100">
            <a class="navbar-brand mt-4" href="{{ url('/') }}">
                <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="">
            </a>
        </div>
        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" container collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                </li>
                <li>
                    <a class="nav-link" href="{{url('/aboutme') }}">{{ __('About Me') }}</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('admin.projects.index') }}">{{ __('Projects') }}</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('admin.types.index') }}">{{ __('Projects Types') }}</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('admin.projects.create') }}">{{ __('Add Project') }}</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('admin.dashboard') }}">{{__('Dashboard')}}</a>
                        <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
