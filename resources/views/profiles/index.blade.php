@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-2 p-6">
            <img class="float-right" style="height: 50px;" src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" alt="">
        </div>
        <div class="col-10">
            <div class="d-flex justify-content-between algin-items-baseline">
                
                <div>
                <h6 class="pt-2">{{ $user->username }}</h6>
                <a href="/profile/{{$user->id}}/edit"><small>Edit profile</small></a>
                </div>
                <a href="/p/create">Post Comment</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2 pt-5">
            <div class="float-right">Introduction:</div>
            <div class="float-right">Date-of-birth:</div>
            <div class="float-right">Addreess:</div>
        </div>
        <div class="col-10 pt-5">
            <div class="">{{$user->profile->Introduction}}</div>
            <div class="">{{$user->profile->Birthday}}</div>
            <div class=""><strong>{{$user->profile->Address}}</strong></div>

        </div>
    </div>
</div>
<div class="container pt-5">
    <div>
        <i>
            <h5>Your comments:<strong>{{$user->posts->count()}}</strong></h5>
        </i>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <a href="/p/{{$post->id}}">
            <div class="col-4 pb-4"><img style="height: 400px; width:300px;" src="/storage/{{$post->image}}" alt=""></div>
        </a>
        @endforeach
    </div>
</div>
@endsection