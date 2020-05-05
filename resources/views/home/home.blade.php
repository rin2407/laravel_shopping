@extends('home.layouts.app')
@section('content')
<div class="slide-main">
    <div class="owl1 owl-carousel owl-theme">
        <div class="item">

            <img src="{{asset('images/bg-2.jpg')}}" width="100%">

        </div>
        <div class="item">
            <img src="{{asset('images/bg-2.jpg')}}" width="100%">

        </div>

    </div>
</div>
<div class="block-style-3">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="unit d-flex">
                    <div class="b-style_main-img one">
                        <img src="{{asset('images/social-media.png')}}" alt="">
                    </div>
                    <div class="pl-3">
                        <div class="b-style_main-title style_title-5 text-left">
                            Sản phẩm chất lượng
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            Chúng tôi cam kết sản phẩm chất lượng 100% từ màu sắc đến kiểu dáng đến chất liệu. </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="unit d-flex">
                    <div class="b-style_main-img two">
                        <img src="{{asset('images/shapes-and-symbols (1).png')}}" alt="">
                    </div>
                    <div class="pl-3">
                        <div class="b-style_main-title style_title-5 text-left">
                            Đa dạng mẫu mã
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            Có rất nhiều mẫu mã cho khách hàng lựa chọn như quần jean, áo thun, áo khoát, váy đầm.</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 three ">
                <div class="unit d-flex">
                    <div class="b-style_main-img">
                        <img src="{{asset('images/transport.png')}}" alt="">
                    </div>
                    <div class="pl-3">
                        <div class="b-style_main-title style_title-5 text-left">
                            Miễn phí giao hàng
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            Miễn phí giao hàng với hàng hàng trên 500.000đ</div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
</div>
<div class="education">
    @include('home.product.product-new')
</div>

<div class="education">
    @include('home.product.product-selling')
</div>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <div class="left-part">
                        <span>Tin tức</span>
                        <h1>Tin tức gần đây</h1>
                    </div>
                    <div class="right-part">
                        <a class=" button-one" href="# ">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl3 owl-carousel owl-theme">
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/slider-image-1.jpg" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">
                            <h2 class="course-title">
                                <a href="aboutnew.html">Đà Nẵng: Từ lớp học đến trường học thông minh</a>
                            </h2>
                            <p class="summary">
                                GD&amp;TĐ -UBND Đà Nẵng vừa ban hành khung “Kiến trúc ứng dụng CNTT ngành GD&amp;ĐT thành phố Đà Nẵng”. Theo đó, Đà Nẵng đặt ra mục tiêu đến năm 2020, có 50% số trường học là trường thông minh (smart school), trong giai đoạn 2017 – 2020 sẽ triển khai
                                ít nhất mỗi trường học có một lớp học thông minh dùng chung để làm mô hình thí điểm. Ông Nguyễn Đình Vĩnh – Giám đốc Sở GD&amp;ĐT Đà Nẵng đã trao đổi với PV GD&amp;TĐ xung quanh nội dung này.
                            </p>

                            <p class="date"><i class="far fa-clock"></i> 20/2/2020</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/06102019_052514_PM_ky-ket-hop-tac-voi-doanh-nghiep-trong-cay-dung-tp-thong-minh_0002.jpg" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">
                            <h2 class="course-title">
                                <a href="aboutnew.html">Đà Nẵng: Đề án xây dựng thành phố thông minh</a>
                            </h2>
                            <p class="summary">Ngày 10-4, UBND TP.Đà Nẵng đã tổ chức Hội thảo công bố Đề án xây dựng thành phố thông minh (TPTM). Hội thảo thu hút sự tham gia của hơn 200 đại biểu đến từ các bộ, ngành Trung ương; các tổ chức, hiệp hội doanh nghiệp (DN);
                                các DN, nhà đầu tư, các chuyên gia... với hàng chục tham luận xoay quanh các giải pháp thiết thực nhằm góp phần xây dựng mô hình TPTM, hiện đại.</p>

                            <p class="date"><i class="far fa-clock"></i> 10/4/2019</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/slider-image-2.jpg" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">

                            <h2 class="course-title">
                                <a href="aboutnew.html">Trải nghiệm của học sinh qua các khóa học ở CS03 </a>
                            </h2>
                            <p class="summary">Trung tâm Sparta tại 53 Trịnh Đình Thảo nằm trong hệ thống trung tâm giáo dục Đà Nẵng, tự hào là một trong những trung tâm giáo dục đi tiên phong trong việc quản lý và đào tạo cũng như giảng dạy theo công nghệ 4.0. Với
                                khẩu hiệu KHỞI ĐẦU CHO TƯƠNG LAI, Sparta không ngừng nỗ lực để trở thành một trung tâm giáo dục hàng đầu Việt Nam.</p>
                            <p class="date"><i class="far fa-clock"></i>19/12/2020 </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/06102019_052407_PM_Hoi sach.jpg" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">

                            <h2 class="course-title">
                                <a href="aboutnew.html">Công ty Sparta tham gia hội sách Q. Hải Châu</a>
                            </h2>
                            <p class="summary">UBND thành phố vừa có văn bản đồng ý chủ trương cho UBND quận Hải Châu phối hợp Công ty CP Phát hành sách Thành phố Hồ Chí Minh - Fahasa đồng tổ chức Hội sách Hải Châu - thành phố Đà Nẵng năm 2019 tại công viên bờ tây sông
                                Hàn (đối diện Trung tâm Truyền hình Việt Nam tại Đà Nẵng, Công viên vườn tượng APEC và Bảo tàng Điêu khắc Chăm) từ ngày 16 đến 21-4-2019.</p>
                            <p class="date"><i class="far fa-clock"></i> 16/4/2019</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/08102019_125550_AM_photo-1-15586909469211251495281.png" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">

                            <h2 class="course-title">
                                <a href="aboutnew.html">Dù Giàu Có Đến Mấy Cha Mẹ Cũng Nên Tập Cho Con..</a>
                            </h2>
                            <p class="summary">Trong giáo dục con cái có một điều tuyệt đối không bao giờ được thiếu đó chính là “để trẻ chịu khổ”. Đặc biệt là đối với những gia đình giàu có, dù nhiều của cải đến đâu, bố mẹ cũng nên tập cho con khả năng chịu khổ.
                            </p>
                            <p class="date"><i class="far fa-clock"></i> 16/4/2019</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" section-bs5 ">
                        <div class="b-style_main-img ">
                            <img src="./images/08102019_125024_AM_dn.jpg" alt=" " class="img-responsive " width="100%">
                        </div>
                        <div class="course-content-main">

                            <h2 class="course-title">
                                <a href="aboutnew.html">Nhìn lại cách người Nhật dạy con khiến cả thế giới...</a>
                            </h2>
                            <p class="summary">Từ lâu người Nhật vẫn luôn nổi tiếng với sự tinh tế trong cách giáo dục con cái. Điều gì trong cách giáo dục con của người Nhật khiến cả thế giới hâm mộ</p>
                            <p class="date"><i class="far fa-clock"></i> 16/4/2019</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="tesminal">
    <div class="container">
        <div class="row">
            <div class="owl2 owl-carousel owl-theme">

                <div class="item">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
                            <p class="comment"> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="d-flex">
                                <div class="b-style-img">
                                    <img src="./images/testimonial-avatar-1.jpg" alt="">
                                </div>
                                <div class="b-style-name pt-4 pl-3">
                                    <h2 class="name">Nicole Alatorre</h2>
                                    <p class="job">Designer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
                            <p class="comment"> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="d-flex">
                                <div class="b-style-img">
                                    <img src="./images/testimonial-avatar-2.jpg" alt="">
                                </div>
                                <div class="b-style-name  pt-4 pl-3">
                                    <h2 class="name">Nicole Alatorre</h2>
                                    <p class="job">Designer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
                            <p class="comment"> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="d-flex">
                                <div class="b-style-img">
                                    <img src="./images/testimonial-avatar-3.jpg" alt="">
                                </div>
                                <div class="b-style-name  pt-4 pl-3">
                                    <h2 class="name">Nicole Alatorre</h2>
                                    <p class="job">Designer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
                            <p class="comment"> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="d-flex">
                                <div class="b-style-img">
                                    <img src="./images/testimonial-avatar-4.jpg" alt="">
                                </div>
                                <div class="b-style-name  pt-4 pl-3">
                                    <h2 class="name">Nicole Alatorre</h2>
                                    <p class="job">Designer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
