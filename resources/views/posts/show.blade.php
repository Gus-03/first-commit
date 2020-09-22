@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
        <img style="width: 300px;" src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-7">
            <div>
                <h3>{{$post->user->username}}</h3>
                <p>"{{$post->caption}}"</p>
            </div>
        </div>
    </div>
</div>
@endsection