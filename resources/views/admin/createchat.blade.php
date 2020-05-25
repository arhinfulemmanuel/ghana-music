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
            <p><h3>Add new chart</h3></p>
            <form action="/savechart" method="POST" class="uk-form-stacked" enctype="multipart/form-data">
                @csrf
                <div class="uk-margin">
                    <label style="letter-spacing:2px; font-size:16px" class="uk-form-label" for="form-stacked-text">Title</label>
                    <div class="uk-form-controls">
                        <input style="color:black; letter-spacing:2px; border-radius:3px; background:whitesmoke" name="title" class="uk-input" id="form-stacked-text" type="text">
                    </div>
                </div>

                <div class="uk-margin">
                    <label style="letter-spacing:2px; font-size:16px" class="uk-form-label" for="form-stacked-text">Artist</label>
                    <div class="uk-form-controls">
                        <input style="color:black; letter-spacing:2px; border-radius:3px; background:whitesmoke" name="artist" class="uk-input" id="form-stacked-text" type="text">
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
                    <label style="letter-spacing:2px; font-size:16px" class="uk-form-label" for="form-stacked-text">Position</label>
                    <div class="uk-form-controls">
                        <div class="uk-margin">
                            <select class="uk-select" name="position">
                                <option value="1">1<sup>st</sup></option>
                                <option value="2">2<sup>nd</sup></option>
                                <option value="3">3<sup>rd</sup></option>
                                <option value="4">4<sup>th</sup></option>
                                <option value="5">5<sup>th</sup></option>
                                <option value="6">6<sup>th</sup></option>
                                <option value="7">7<sup>th</sup></option>
                                <option value="8">8<sup>th</sup></option>
                                <option value="9">9<sup>th</sup></option>
                                <option value="10">10<sup>th</sup></option>
                            </select>
                        </div>
                    
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-width-1-2">
                        <button type="submit" class="uk-button bg-primary" style="border-radius:3px">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection