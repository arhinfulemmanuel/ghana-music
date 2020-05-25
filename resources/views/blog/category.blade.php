@extends('blog.base')

@section('content')
    <div>
    <section class="razo-blog-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class=" uk-flex col-12 col-md-8">
                    @if ( count($posts) > 0 )
                        <div class="weekly-news-area mb-50">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>{{$title}}</h2>
                                        </div>

                                        <div class="row">

                                            
                                                @foreach ($posts as $post)
                                                    <!-- Single Post Area -->
                                                        <div class="col-12 col-md-6 col-xl-6">
                                                            <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">
                                                                <!-- Thumbnail -->
                                                                <div class="podcast-thumb">
                                                                    <a href="/post/{{$post->id}}/{{$post->title}}"><img src="{{$post->image}}"></a>
                                                                    {{-- <div class="like-comment">
                                                                        <a href="#" class="like">2 <i class="icon_heart"></i></a>
                                                                        <a href="#" class="like">2 <i class="icon_chat"></i></a>
                                                                    </div> --}}
                                                                </div>
                                                                <!-- Content -->
                                                                <div class="podcast-content">
                                                                    <div class="podcast-meta">
                                                                        <a href="#"><i class="icon_calendar"></i>{{date('F jS, Y', strtotime($post->created_at))}}</a>
                                                                        
                                                                    </div>
                                                                    <a href="/post/{{$post->id}}/{{$post->title}}" class="post-title">{{$post->title}}</a>
                                                                    <div class="border-line"></div>
                                                                    <div class="play-download-btn d-flex align-items-center justify-content-between">
                                                                        <a href="/post/{{$post->id}}/{{$post->title}}" class="btn razo-btn btn-sm">Download now</a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        
                                                @endforeach
                                            


                                        </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    {{$posts->links()}}
                                                </div>
                                            </div>
                                    </div>
                    @else
                        <center><h3>NO POST AVAILABLE</h3></center>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection