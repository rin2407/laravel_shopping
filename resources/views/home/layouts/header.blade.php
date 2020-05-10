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
                            <form>
                                <input type="text" placeholder="Nhập tìm kiếm.." aria-label="Username" id="search" aria-describedby="basic-addon1" name="search" autocomplete="off">
                                @csrf
                                <ul class="hienthitimkiem" >
                                </ul>
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
                                    document.getElementById('logout-form').submit();">Đăng xuất</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
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
                <a class="navbar-brand" href="index.html">
                    <span class="logo-text">
                    <img src="{{asset('images/logo.svg')}}" alt="">
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item shop">
                                <a href="{{ route('cart.show') }}" class="nav-link shop-icon"> <i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home')}}">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.all')}}">
                           Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('post.all')}}">
                          Tin tức
                        </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/contact')}}">Liên hệ</a>
                        </li>
                    </ul>

                </div>
            <a href="{{route('cart.show')}}" class="register-modal-opener login-button shop-icon"> <i class="fas fa-shopping-cart"></i> <span class="cart-number">{{$total_cart_product}}</span> Giỏ hàng</a>
            </nav>
        </div>
    </div>
</section>