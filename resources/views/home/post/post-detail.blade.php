@extends('home.layouts.app')
@section('content')
<section class="page-banner-section">
    <div class="container">

        <ul class="page-depth">
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li class="bt"><a href="{{route('post.index')}}">Tin tức</a></li>
            <li class="bt">Chi tiết tin tức</li>
            <li class="bt"><a href="aboutus.html">{{$post_detail->post_title}}</a></li>
        </ul>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-4 col-md-5">
                <div class="sidebar ">
                    <div class="products-widget widget">
                        <h2>Tin tức liên quan</h2>
                        <ul class="products-list">
                            @foreach ($list_post as $ls)
                            <li>
                                <a href="{{route('post.show',['id'=>$ls->post_id])}}"><img src="{{asset('/images/posts/'.$ls->image_post)}}" alt=""></a>
                                <div class="list-content">
                                    <h3><a href="{{route('post.show',['id'=>$ls->post_id])}}">{{$ls->post_title}}</a></h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="blog-box pb-5">
                    <div class="blog-post single-post">
                        <div class="post-content">
                            <h1 class="title">{{$post_detail->post_title}}</h1>
                            <div class="post-meta date">
                                <p><i class="far fa-clock"></i>{{$post_detail->created_at}}</p>
                            </div>
                            <div class="post-meta user">
                                <p> <i class="fas fa-user"></i> Đăng bởi <a href="#">{{$post_detail->name}}</a>
                                </p>
                            </div>
                        </div>
                        <a href=""><img src="{{asset('images/posts/'.$post_detail->image_post)}}" alt="" width="100%"></a>
                        <div class="post-content">
                            <p>{{$post_detail->post_detail}}</p>
                </div>
                <div class="courses single pb-5">
                    <div class="course-required">
                        <h4>Tin liên quan :</h4>
                        <ul>
                            @foreach ($list_post as $ls_post)
                            <li>
                                <a href="{{route('post.show',['id'=>$ls_post->post_id])}}">
                                    <i class="far fa-hand-point-right"></i>{{$ls_post->post_title}}
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