@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 p-5">
            <div class="image-cropper">
                <img src="http://i.imgur.com/VmZ6l7v.png" class="profile-pic" alt="">
            </div>
        </div>

        <div class="col-8 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>

        <div class="row pt-5">
            <div class="col-2"></div>
            <div class="col-3">
                <img class="w-100" src="https://www.tate.org.uk/art/images/work/T/T00/T00783_10.jpg" alt="">
            </div>
            <div class="col-3">
                <img class="w-100" src="https://www.tate.org.uk/art/images/work/T/T00/T00783_10.jpg" alt="">
            </div>
            <div class="col-3">
                <img class="w-100" src="https://www.tate.org.uk/art/images/work/T/T00/T00783_10.jpg" alt="">
            </div>
        </div>

        
    </div>
</div>
@endsection