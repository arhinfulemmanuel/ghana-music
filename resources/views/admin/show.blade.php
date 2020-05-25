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
            <p>Single blog</p>
    </div>
</div>
@endsection