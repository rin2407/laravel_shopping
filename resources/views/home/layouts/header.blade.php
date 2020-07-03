<section id="menu-header">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 left">
                    <ul class="top-menu">
                        <li>
                            <a href=""> <i class="fas fa-phone-alt "></i> 02367.109.808</a>
                        </li>
                        <li>
                            <a href=""> <i class="fas fa-envelope"></i> info.vn@gmail.com</a>
                        </li>

                    </ul>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 right">
                    <ul class="top-menu">
                        <li>
                            <form action="{{route('product.search')}}" method="get">
                                <input type="text" placeholder="{{__('search')}}" aria-label="Username" id="search" aria-describedby="basic-addon1" name="search" autocomplete="off">
                                @csrf
                                <ul class="hienthitimkiem" >
                                </ul>
                                <button type="submit" style="display:none">Search</button>
                            </form>

                        </li>
                        <li>
                            <div class="btn-group">
                                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user-circle"></i>
                            </button>
                                <div class="dropdown-menu">
                                    @if (Auth::check())
                                    <a class="dropdown-item">{{Auth::user()->name }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('logout')}}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('login')}}</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('register')}}</a>
                                    @endif
                                </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pb-2">
                <a class="navbar-brand" href="{{route('home')}}">
                    <span class="logo-text">
                    <img src="{{asset('images/icon_115004_1571992573_13.png')}}" style="width:70px" alt="">
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item shop">
                                <a href="{{ route('cart.show') }}" class="nav-link shop-icon"> <i class="fas fa-shopping-cart"></i>{{__('cart')}}</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home')}}">{{ __('home') }}<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.all')}}">
                           {{ __('product') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('post.all')}}">
                                {{ __('news') }}
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/contact')}}">{{ __('contact') }}</a>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link " href="new.html" id="navbardrop" data-toggle="dropdown">
                                {{Config::get('app.locale')=='en' ? 'English' : 'Vietnamese' }}
                          <i class="fa fa-angle-down"></i>
                        </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="{{route('user.change-language', ['language'=>'en']) }}">English</a>
                                <a class="dropdown-item" href="{{ route('user.change-language', ['language'=>'vi']) }}">Vietnamese</a>
                            </div>
                        </li>
                    </ul>

                </div>
            <a href="{{route('cart.show')}}" class="register-modal-opener login-button shop-icon"> <i class="fas fa-shopping-cart"></i> <span class="cart-number" data-total="{{$total_cart_product}}">{{$total_cart_product}}</span>{{ __('cart')}}</a>
            </nav>
        </div>
    </div>
</section>