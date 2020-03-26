@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2 p-5">
            <div class="image-cropper">
                <img src="http://i.imgur.com/VmZ6l7v.png" class="profile-pic" alt="">
            </div>
        </div>

        <div class="col-6 pt-5">
            <div>
                <h1>slowgram</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        </div>

        <div class="col-2"></div>
    </div>
</div>
@endsection