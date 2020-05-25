@extends('admin.base')

@section('content')
<div class="uk-card">
    <div class="justify-content-left">
        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="uk-flex  uk-flex-wrap uk-flex-center uk-margin-left uk-margin-right uk-text-center">
                <p><h3 class="uk-text-warning">All your post....</h3></p>
                @if (count($posts) >0)
                    @foreach ($posts as $post)
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-width-5-6@m uk-margin-bottom uk-margin-left uk-margin-right">
    
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-width-2-3@m">
                                    <h3 class="uk-card-title"><a class="uk-link-heading uk-text-success" href="{{ route('show', ['post'=>$post->title]) }}">{{$post->title}}</a></h3>
                                </div>
                                <div class="uk-width-1-3@m uk-flex-first">
                                    <a href="">
                                         <img src="{{$post->image}}" alt="">
                                     </a>
                                </div>
                            </div>
                            <div class="uk-margin-top">
                                <form action="{{route('delete', ['post'=>$post->id])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="/" class="btn btn-success" style="color:white">Visit</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
    </div>
</div>
@endsection