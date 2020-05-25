
@extends('blog.base')
@section('content')
    <div>

































        @if (count($results) >0)
            <section class="show-routine-area section-padding-80-0 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="showRoutineTabContent">

                                <!-- Single Tab Content -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                    <div class="row">
                                        @foreach ($results as $result)
                                            <!-- Single Show Item -->
                                            <div class="col-12 col-md-6 col-lg-4 pl-30">
                                                <div class="single-show-item mb-30">
                                                    <img src="{{$result->image}}">
                                                    <div class="overlay-content">
                                                        <div class="text-center">
                                                            <span>{{date('F jS, Y',strtotime($result->created_at))}}</span>
                                                            <h5>{{$result->title}}</h5>

                                                                <a href="/post/{{$result->id}}/{{$result->title}}" class="btn btn-success mt-30">Download</a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Show Routine Area End -->
        @endif












        @if (count($results)<1)
            <!-- Welcome Area Start -->
            <section class="welcome-area">
                <div class="welcome-slides owl-carousel">

                    <!-- Single Welcome Slide -->
                    <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('blog/img/bg-img/30.jpg')}});">
                        <!-- Welcome Content -->
                        <div class="welcome-content h-100">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center justify-content-center">
                                    <!-- Welcome Text -->
                                    <div class="col-12 col-md-10 col-lg-6">
                                        <div class="welcome-text text-center">
                                            <h2 data-animation="fadeInUp" data-delay="100ms">No results found</h2>
                                            <h5 data-animation="fadeInUp" data-delay="400ms">{{date('F jS, Y', time() )}}</h5>
                                            <a href="/" class="btn razo-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Return Home</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Welcome Area End -->
        @endif















    </div>
@endsection