@extends('blog.base')

@section('content')
    <div>


    <!-- Blog Details Post Thumbnail Area Start -->
    <section class="blog-details-post-thumbnail-area bg-overlay bg-img jarallax" style="background-image: url({{$ad->image}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="post-title-text">
                        <h2>{{$ad->title}}</h2>
                        <div class="post-meta">
                            <a href="#">Posted on: {{date('F jS, Y -- g:i A', strtotime($ad->created_at))}}</a>
                            <a href="#">Post by FiiComp Inc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Post Thumbnail Area End -->













    <!-- Blog Details Area Start -->
    <section class="blog-details-area section-padding-80">
        <div class="container">
            <!-- Post Details Text -->
            <div class="post-details-text">
                <div class="row justify-content-center">
                    <div class="col-2 col-md-2 col-lg-1">
                        <!-- Post Share -->
                        <div class="razo-post-share">
                            <h5>Share</h5>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Google Plus" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                    <div style="word-wrap:break-word" class="col-10 col-md-10 col-lg-9">
                        {{$ad->note}}
                    </div>

                    <!-- Audio Player Area Start -->
                    <div class="podcast-audio-player-area mt-30 mr-15 ml-15">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="audio-player">
                                        <audio preload="auto" controls>
                                            <source src="{{$ad->audio}}">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Audio Player Area End -->

                        {{-- download button --}}
                        <form id="download_form" action="{{route('download', ['id'=>$ad->id])}}" method="post">
                            @csrf
                            <a href="{{URL::to($ad->audio)}}" target="_blank" download="{{$ad->title}}">
                                <button id="download" type="submit" class="btn razo-btn btn-3 mt-15"><i class="fa fa-download"></i> Download</button>
                            </a>
                            <input type="hidden" id="route" value="{{route('download', ['id'=>$ad->id])}}">
                        </form>
                    </div>
                    
                        
                        <!-- Blockquote -->
                        <blockquote class="razo-blockquote d-flex">
                            <div class="text ml-15">
                                <h6>Stat</h6>
                            </div>
                            <div class="container">
                                <div>
                                    <i class="fa fa-eye"></i> <b>Views: <i>{{ views($ad)->count() }}</i></b> 
                                </div>
                                <div>
                                    <i class="fa fa-download"></i> <b>Downloads: <i>{{$ad->downloads}}</i></b> 
                                </div>
                            </div>

                        </blockquote>

                        <!-- Post Catagories -->
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- Post Catagories -->
                            <div class="post-catagories">
                                <ul class="d-flex flex-wrap align-items-center">
                                    <li><i class="fa fa-tag"></i> Tag:</li>
                                    <li><a href="#">Tutorials</a></li>
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Comments Area -->
                        <div class="comment_area mb-50 clearfix">
                            <h5 class="title">{{count($ad->adComments )}} Comments</h5>

                            <ol>

                                @if (count($ad->adComments) > 0)
                                    @foreach ($ad->adComments as $comment)
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    
                                                        <i class="fa fa-user"></i>
                                                
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="author-name">{{$comment->name}} <span class="post-date">- {{date('F jS, Y -- g:i A', strtotime($comment->created_at))}}</span></a>
                                                    <p>{{$comment->body}}.</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif


                                





                            </ol>

                        </div>

                        <!-- Leave A Reply -->
                        <div class="razo-contact-form">
                            <h2 class="mb-4">Leave A Comment</h2>

                            <!-- Form -->
                            <form action="{{route('save_comment', ['id'=>$ad->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" class="form-control mb-30" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" class="form-control mb-30" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="body" class="form-control mb-30" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn razo-btn btn-3 mt-15">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('blog/js/jquery.min.js')}}"></script>
        {{-- <script src="{{asset('js/downloadcount.js')}}"></script> --}}
        {{-- <script src="{{asset('js/app.js')}}"></script> --}}
        
    </section>
    <!-- Blog Details Area End -->




    </div>
@endsection