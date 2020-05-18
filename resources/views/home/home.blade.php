@extends('home.layouts.app')
@section('content')
<div class="slide-main">
    <div class="owl1 owl-carousel owl-theme">
        @foreach ($list_banner as $ls_banner)
        <div class="item">
            <img src="{{asset('images/banners/'.$ls_banner->image_banner)}}" width="100%">
        </div>
        @endforeach
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
                            {{ __('product quality')}}
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            {{ __('commit')}} </div>
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
                            {{ __('diversity')}}
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            {{ __('there are many')}}</div>
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
                            {{ __('free ship')}}
                        </div>
                        <div class="b-style_main-sumary style_sumary-5 pt-2">
                            {{ __('free delivery')}}</div>
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
    @include('home.post.post-list')
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
