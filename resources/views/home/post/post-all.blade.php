@extends('home.layouts.app')
@section('content')
<section class="page-banner-section my-3">
    <div class="container">

        <ul class="page-depth">
            <li><a href="index.html">Trang chủ</a></li>
            <li class="bt"><a href="{{url('/contact')}}">Tin tức</a></li>
        </ul>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="sidebar">
                    <div class="products-widget widget">
                        <h2>Tin tức nổi bật</h2>
                        <ul class="products-list">
                            @foreach ($list_post as $ls)
                            <li>
                                <a href="{{route('post.show',['id'=>$ls->post_id])}}"><img src="{{asset('images/posts/'.$ls->image_post)}}" alt=""></a>
                                <div class="list-content">
                                    <h3><a href="{{route('post.show',['id'=>$ls->post_id])}}">{{$ls->post_title}}</a></h3>
                                    <!-- <span>2.400.000đ</span> -->
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="blog-box">
                    <div class="row">
                          @foreach ($list_post as $ls_post)
                          <div class="col-lg-6">
                            <div class=" section-bs5 ">
                                <div class="b-style_main-img ">
                                    <img src="{{asset('images/posts/'.$ls_post->image_post)}}" alt=" " class="img-responsive " width="100%">
                                </div>
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="{{route('post.show',['id'=>$ls_post->post_id])}}">{{$ls_post->post_title}}</a>
                                    </h2>
                                    <p class="summary">
                                        {{$ls_post->post_detail}}
                                    </p>
                                    <p class="date"><i class="far fa-clock"></i>{{$ls_post->created_at}}</p>
                                </div>
                            </div>
                        </div>
                          @endforeach
                        

                    </div>

                <div class="courses single pb-5">
                    <div class="course-required">
                        <h4>Tin liên quan :</h4>
                        <ul>
                            @foreach ($list_post as $ls_posts)
                            <li>
                                <a href="{{route('post.show',['id'=>$ls_posts->id])}}">
                                    <i class="far fa-hand-point-right">{{$ls_posts->post_title}}</i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection