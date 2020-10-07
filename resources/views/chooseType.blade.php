@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/chooseType.css" />
@endsection
@section('main')

<main>
  <div class="main-cont">
    <div class="jsm-banner">
      <div class="jsm-row flex-box">
        @foreach($subscriptions as $subscription)
          <div class="jsm-col-sm jsm-col-s">
            <div class="jsm-banner-wrap">
              <div class="banner_img"></div>
              <a href="checkParcel/{{$subscription->sname}}">
              <div class="pa">
                <p class="pa-p">{{$subscription->sname}}</p>
              </div>
              </a>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  </div>
</main>
@endsection