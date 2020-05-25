@extends('blog.base')

@section('content')
    





    <!-- Music Charts Area Start -->
    <section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url({{asset('blog/img/bg-img/34.jpg')}});">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center white">
                        <h2>MOST PLAYED TRACKS OF THE WEEK</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @if (count($charts))
                    <div class="col-12">

                        
                            @foreach ($charts as $chart)
                                <!-- Single Music Chart -->
                                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                                    <!-- Music Content -->
                                    <div class="music-content d-flex align-items-center">
                                        <div class="sl-number">
                                            <h5>{{$chart->position}}</h5>
                                        </div>
                                        <div class="music-thumb">
                                            <img src="{{$chart->image}}">
                                        </div>
                                        <div class="audio-player">
                                            <audio preload="auto" controls>
                                                <source src="">
                                            </audio>
                                        </div>
                                        <div class="music-title">
                                            <h5>{{$chart->title}} - <span>{{$chart->artist}}</span></h5>
                                        </div>
                                    </div>
                                    <!-- Music Price -->
                                    <div class="music-price">
                                        <form action="{{route('search')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$chart->title}}" name="search">
                                            <button type="submit" class="btn razo-btn btn-2">Search</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form action="{{route('charts')}}" method="get">
                            @csrf
                            <input type="hidden" name="chart_value" value="5">
                            <div class="view-more-button text-center">

                                @if (count($charts) >5)
                                    <button disabled type="submit" class="btn razo-btn mt-50">View More</button>
                                @else
                                    <button type="submit" class="btn razo-btn mt-50">View More</button>
                                @endif
        
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Music Charts Area End -->






@endsection