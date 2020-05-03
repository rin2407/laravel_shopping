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
                            <a href=""> <i class="fas fa-envelope"></i> sparta.edu.vn@gmail.com</a>
                        </li>

                    </ul>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 right">
                    <ul class="top-menu">
                        <li>
                            <form>
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div> -->
                                <input type="text" placeholder="Nhập tìm kiếm.." aria-label="Username" aria-describedby="basic-addon1" name="search">
                                <!-- </div> -->
                                <!-- <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> <i class="fas fa-search"></i></span>
                                    </div>
                                    <input type="text" name="search" placeholder="Search..">
                                </div> -->
                            </form>

                        </li>
                        <li>
                            <div class="btn-group">
                                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user-circle"></i>
                            </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Thông tin người dùng</a>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>

                                </div>
                        </li>

                        <!-- <li class="search-icon"><a href=""><i class="fas fa-search"></i></a></li> -->
                        <!-- 
                        <li class="search-box">
                            <input type="text" class="search-txt" placeholder="Arama Yap">
                            <a class="search-btn">
                                <i class="fas fa-search"></i>
                            </a>
                        </li> -->

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
                    <img src="{{asset('images/logo.png')}}" alt="">
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item search">
                            <a href="" class="nav-link search-icon"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item shop">
                            <a href="" class=" nav-link shop-icon"><i class="fas fa-shopping-cart"></i> </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link " href="aboutus.html" id="navbardrop" data-toggle="dropdown">
                           Sản phẩm<i class="fa fa-angle-down"></i>
                        </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="course.html">Sản phảm 1</a>
                                <a class="dropdown-item" href="course.html">Sản phảm 2</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link " href="new.html" id="navbardrop" data-toggle="dropdown">
                          Tin tức<i class="fa fa-angle-down"></i>
                        </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="new.html">Tin tức giáo dục</a>
                                <a class="dropdown-item" href="new.html">Tin tức Sparta</a>
                                <a class="dropdown-item" href="new.html">Chia sẻ kinh nghiệm</a>

                            </div>
                        </li>
                        <!-- <li class="nav-item dropdown dmenu">
                                <a class="nav-link " href="course.html" id="navbardrop" data-toggle="dropdown">
                          Khóa học <i class="fa fa-angle-down"></i>
                        </a>
                                <div class="dropdown-menu sm-menu">
                                    <a class="dropdown-item" href="course.html">Khóa học miễn phí</a>
                                    <a class="dropdown-item" href="course.html">Khóa học toán tư duy</a>
                                    <a class="dropdown-item" href="course.html">Khóa học văn hóa bổ sung</a>
                                    <a class="dropdown-item" href="course.html">Khóa học dành cho giáo viên</a>

                                </div>
                            </li> -->

                        <li class="nav-item">
                            <a class="nav-link " href="contact.html">Liên hệ</a>
                        </li>
                    </ul>

                </div>
                <div class="shop-icon">
                    <a href="shopcart.html">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-number">0</span>
                    </a>

                </div>
            </nav>
        </div>
    </div>
</section>