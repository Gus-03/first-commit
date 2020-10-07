@extends('layouts.app')
@section('content')
{{-- this blade changes the value of the card component --}}
<div class="container">
    @if(session()-> has('success'))
            <div class="alert alert-success">{{ session()->get('success')}}</div>
        @endif
    <div class="row text-center py-4">
        @foreach ($subscription as $sub)
    <x-card name=" {{$sub->name}}" 
            price="{{$sub->price}}" 
            description=" {{$sub->description}}" 
            img="{{$sub->img}}" 
            id="{{route('subscription.addToCart',['id'=>$sub->id])}}"/>
        @endforeach
    </div>
</div>
@endsection
