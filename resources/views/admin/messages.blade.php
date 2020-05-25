@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger uk-width-1-3 uk-margin-left uk-margin-top">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif