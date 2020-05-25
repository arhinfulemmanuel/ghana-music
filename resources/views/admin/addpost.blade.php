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
            <div>


        <div class="uk-width-4-5 uk-margin-left uk-margin-bottom uk-margin-top uk-padding bg-success">
            <p><h3>Add new post</h3></p>
            <form action="/store" method="POST" class="uk-form-stacked" enctype="multipart/form-data">
                @csrf
                <div class="uk-margin">
                    <label style="letter-spacing:2px; font-size:16px" class="uk-form-label" for="form-stacked-text">Title</label>
                    <div class="uk-form-controls">
                        <input style="color:black; letter-spacing:2px; border-radius:3px; background:whitesmoke" name="title" class="uk-input" id="form-stacked-text" type="text">
                    </div>
                </div>

                <div class="uk-margin">
                    <label style="letter-spacing:2px" class="uk-form-label" for="form-stacked-note">Post note</label>
                    <div class="uk-form-controls">
                        <textarea style="color:black; letter-spacing:2px; border-radius:3px; font-size:16px; background:whitesmoke" name="note" class="uk-textarea" id="form-stacked-note" rows="5"></textarea>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="">Categories</label>
                    <div class="uk-form-control">
                        <label><input name="category[hiplife]" value="Hiplife" class="uk-checkbox" type="checkbox" checked> HIPLIFE</label>
                        <label><input name="category[gospel]" value="Gospel" class="uk-checkbox" type="checkbox"> GOSPEL</label>
                        <label><input name="category[high_life]" value="Highlife" class="uk-checkbox" type="checkbox"> HIGH LIFE</label>
                        <label><input name="category[dancehall]" value="Dancehall" class="uk-checkbox" type="checkbox"> DANCEHALL</label>
                        <label><input name="category[hiphop]" value="Hiphop" class="uk-checkbox" type="checkbox"> HIPHOP</label> <br>
                        <label><input name="category[shatta_wale]" value="Shatta Wale" class="uk-checkbox" type="checkbox"> SHATTA WALE</label>
                        <label><input name="category[sarkodie]" value="Sarkodie" class="uk-checkbox" type="checkbox"> SARKODIE</label>
                        <label><input name="category[stone_bwoy]" value="Stone Bwoy" class="uk-checkbox" type="checkbox"> STONE BWOY</label> <br>
                        <label><input name="category[ghana]" value="Ghana" class="uk-checkbox" type="checkbox"> GHANA</label>
                        <label><input name="category[nigeria]" value="Nigeria" class="uk-checkbox" type="checkbox"> NIGERIA</label>
                        <label><input name="category[jamaica]" value="Jamaica" class="uk-checkbox" type="checkbox"> JAMAICA</label>
                    </div>
                </div>

                <div class="uk-margin">
                    <label style="letter-spacing:2px" class="uk-form-label" for="form-stacked-image">Post image</label>
                    <div class="uk-form-controls">
                        <div uk-form-custom="target: true">
                            <input style="color:black; border-radius:3px" name="image" type="file">
                            <input style="color:black; border-radius:3px" class="uk-input uk-form-width-medium" type="text" placeholder="Select image" disabled>
                        </div>
                    </div>
                </div>

                <div class="uk-margin">
                    <label style="letter-spacing:2px" class="uk-form-label" for="form-stacked-audio">Post audio</label>
                    <div class="uk-flex">
                        <div class="uk-form-controls uk-width-1-2">
                            <div uk-form-custom="target: true">
                                <input style="color:black; border-radius:3px" name="audio" type="file">
                                <input style="color:black; border-radius:3px" class="uk-input uk-form-width-medium" type="text" placeholder="Select audio" disabled>
                            </div>
                        </div>

                        <div class="uk-width-1-2">
                            <button class="uk-button bg-primary" style="border-radius:3px">Publish</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection