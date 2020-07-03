@extends('home.layouts.app')
@section('content')
<section class="page-banner-section mt-3">
    <div class="container">
        <ul class="page-depth">
            <li><a href="index.html">Trang chủ</a></li>
            <li class="bt"><a href="contact.html">Liên hệ</a></li>

        </ul>
    </div>
</section>
<section class="my-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7788.692877423702!2d108.20737493841727!3d16.069006020938488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184a3b3b59bd%3A0xa8626eadc926cd89!2zMjI5IEzDqiBEdeG6qW4sIFTDom4gQ2jDrW5oLCBRLiBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1588434949459!5m2!1svi!2s"
        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="address my-3">
                        <ul>
                            <li>

                                <div class="contact-info-value-title">
                                   TRUNG TÂM THỜI TRANG LYN'S
                                </div>
                            </li>
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-value">114 Đồng Bài, Hòa Minh,Liên Chiểu,Đà Nẵng</div>
                            </li>
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-alt "></i>
                                </div>
                                <div class="contact-info-value">02367.109.808</div>
                            </li>
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-value">info@gmail.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <h2 class="text-center mb-3">Liên hệ ngay</h2>
                    <div class="border-form ">
                        <div class="row ">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                                <input class="form-control" type="text" placeholder="Họ và tên">
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                                <input class="form-control" type="text" placeholder="Số điện thoại">
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                                <input class="form-control" type="text" placeholder="Địa chỉ">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                <textarea name="" class="form-control" id="" cols="30" rows="4" placeholder="Nội dung"></textarea>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" value="Gửi" class="btn btn-submit rounded-0 py-2 px-3">
                            </div>


                        </div>
                        <!-- 
                    <div class="form" action="#" class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <label class="text-black" for="fname">Tên</label>
                                <input type="text" id="fname" class="btn-outline-white form-control rounded-0">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Số điện thoại</label>
                                <input type="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Chủ đề</label>
                                <input type="subject" id="subject" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Lời nhắn</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control rounded-0" placeholder="Viết lời nhắn của bạn hoặc câu hỏi tại đây..........."></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <input type="submit" value="Gửi" class="btn btn-submit rounded-0 py-2 px-3">
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection