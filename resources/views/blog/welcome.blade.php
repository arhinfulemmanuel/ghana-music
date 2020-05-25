@extends('blog.base')

@section('content')
    <div>









        

     @if (count($ads) > 0)
     <!-- Latest News Area Start -->
        <section class="razo-latest-news-area section-padding-8 bg-overlay bg-img jarallax" style="padding:2%; background-image: url(blog/img/bg-img/32.jpg);">
            
            <!-- Razo Latest News Slide -->
            <div class="razo-latest-news-slide owl-carousel">
            
                @foreach ($ads as $ad)

                    <!-- Single ad post Area -->
                    <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url({{$ad->image}});">
                        <div style="color:white">
                            Ads
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="/ad/{{$ad->id}}/{{$ad->title}}" class="post-title">{{$ad->title}}</a>
                        </div>
                        <!-- Post Date -->
                        <div class="post-date">
                            <h2>{{date('j',strtotime($ad->created_at))}}</h2>
                            <p>{{date('F',strtotime($ad->created_at))}}</p>
                        </div>
                        <!-- Read More -->
                        <div class="read-more-btn">
                            <a href="/ad/{{$ad->id}}/{{$ad->title}}" class="btn">Download <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                @endforeach

            </div>
        </section>
    @endif














    <!-- Blog Area Start -->
    <section class="razo-blog-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class=" uk-flex col-12 col-md-8">
                    @if (count($posts) > 0)
                        <div class="weekly-news-area mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading">
                                <h2>New Songs</h2>
                            </div>

                            <div class="row">

                                
                                    @foreach ($posts as $post)

                                        {{-- This is the first iteration. --}}
                                        @if ($loop->first)
                                            
                                            <!-- Featured Post Area -->
                                            <div class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url({{$post->image}});">
                                                <!-- Post Overlay -->
                                                <div class="post-overlay">
                                                    {{-- <div class="post-meta">
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                                    </div> --}}
                                                    <a href="/post/{{$post->id}}/{{$post->title}}" class="post-title">{{$post->title}}</a>
                                                    <div class="pos-meta mt-15">
                                                        <a class="btn btn-primary" href="/post/{{$post->id}}/{{$post->title}}">DOWNLOAD NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($loop->first) @continue @endif

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
                            <hr>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        {{$posts->links()}}
                                    </div>
                                </div>
                        </div>
                    
                        @else
                            <h1>NO POST AVAILABLE</h1>
                    @endif
                </div>
                @if (count($trendings) > 0)
                <!-- Trending News Area -->
                    <div class="col-12 col-md-4">
                        <div class="trending-news-area mb-50">

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <h2>Trending</h2>
                            </div>


                            
                                @foreach ($trendings as $trending)


                                    @if ($loop->first)

                                        <!-- Featured Post Area -->
                                        <div class="featured-post-area small-featured-post bg-img bg-overlay mb-30" style="background-image: url(blog/img/bg-img/12.jpg);">
                                            <!-- Post Overlay -->
                                            <div class="post-overlay">
                                                <div class="post-meta">
                                                    <a href="#"><i class="fa fa-download" aria-hidden="true"></i> {{$trending->downloads}}</a>
                                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ views($trending)->count() }}</a>
                                                </div>
                                                <a href="/post/{{$trending->id}}/{{$trending->title}}" class="post-title">{{$trending->title}}</a>
                                            </div>
                                        </div>

                                    @endif

                                    @if ($loop->first)  @continue @endif
                                        

                                        <div class="razo-single-post d-flex mb-30">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="single-blog.html"><img src="{{$trending->image}}"></a>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <a href="#"><i class="fa fa-download" aria-hidden="true"></i> {{$trending->downloads}}</a>
                                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ views($trending)->count() }}</a>
                                                </div>
                                                <a href="/post/{{$trending->id}}/{{$trending->title}}" class="post-title">{{$trending->title}}</a>
                                            </div>
                                        </div>

                                    @if ($loop->index==4) 
                                        @break
                                    @endif

                                @endforeach
                            

                        </div>
                    </div> 
                @endif
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
@endsection

