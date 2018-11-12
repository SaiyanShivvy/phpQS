<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('index')}}">
        <img src="{{asset('images/logo.jpg')}}" width="34" height="35" class="d-inline-block align-top" alt="">
        {{ __('Quality Souvenirs') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- Management Dropdown --}}
            @if (Auth::guard('admin')->check())
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Management') }}<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.products') }}">Products</a>
                    </div>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
        </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Panel</a>
                    </li>
                @endif
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{--Might not work--}}
                            {{--@if (Auth::guard('admin')->check())--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.logout') }}">--}}
                                    {{--{{ __('Admin Logout') }}--}}
                                {{--</a>--}}
                            {{--@endif--}}
                            {{--@if (Auth::guard('web')->check())--}}
                                {{--<a class="dropdown-item" href="{{ route('user.logout') }}">--}}
                                    {{--{{ __('User Logout') }}--}}
                                {{--</a>--}}
                            {{--@endif--}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </li>
                @endguest
                {{-- Shopping Cart --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.shoppingCart')}}"><i class="fas fa-shopping-cart"></i> Shopping Cart
                        <span class="alert badge">{{Session::has('cart') ? Session::get('cart')->totalQty :''}}</span>
                    </a>
                </li>
        </ul>
        {{--<form class="form-inline my-2 my-lg-0">--}}
          {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
          {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
    </div>
</nav>
