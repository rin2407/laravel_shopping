<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title-section">
                <div class="left-part">
                    <span>{{ __('news')}}</span>
                    <h1>{{ __('recent new')}}</h1>
                </div>
                <div class="right-part">
                    <a class=" button-one" href="{{ route('post.all')}}">{{ __('see it all')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="owl3 owl-carousel owl-theme">
            @foreach ($list_post as $ls_post)
            <div class="item">
                <div class=" section-bs5 ">
                    <div class="b-style_main-img ">
                       <a href="{{route('post.show',['id'=>$ls_post->post_id])}}"> <img src="{{asset('images/posts/'.$ls_post->image_post)}}" alt=" " class="img-responsive " width="100%"></a>
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

    </div>

</div>