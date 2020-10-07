@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/cart.css')}}"/>
    @if(Session::has('cart'))
    {{-- container for whole shopping cart --}}
    <div class = "container">
        @if(session()-> has('success'))
        <div class="alert alert-success">{{ session()->get('success')}}</div>
        @endif
        <div class="pb-3">
        <a href ="{{url('/subscriptionPackage')}}" class="btn btn-secondary btn-xl ml-4" action="">Back</a>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach ($subscription as $sub)
            
                {{-- left side of the shopping card --}}
                    <div class="card mb-2" id="linear-component">
                        <div class ="card-body">
                            <img src ="{{$sub['item']['img']}}" class="w-25 rounded float-right">
                            <h5 class="card-title">
                                {{$sub['item']['name']}}
                            </h5>
                            <div class="card-text">
                                <div class= "pl-4"><h5>Package Price= ${{$sub['item']['price']}} </h5>
                                </div>

                                <div class="col-xs-1 pl-4">
                                <input type="text" name="quantity" value= {{$sub['quantity']}}>
                                    <button class="btn btn-danger btn-sm ml-4">Remove </button><br>
                                    <form method="POST" action="{{route('subscription.remove',$sub['item']['id'])}}">
                                        @csrf
                                        @method('delete')
                                </div>
                                {{-- <a href="#" class="btn btn-secondary btn-sm">Save</a>
                                <--}}
                                
                            <div class="pl-4 pt-5"><h3>Subtotal = ${{$sub['price']}}</h3>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- check out component --}}
            </div> 
                <div class="card" id="right-component">
                    <div class="card-body">
                        <h3 class="card-title"  >
                            Your Cart
                            <hr>
                        </h3>
                        <div class="card-text">
                            <p><h3>
                                Total Amount: ${{$totalPrice}}/Month
                                </h3>
                            </p>
                            <a href="#" class="btn btn-success pt">Checkout</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @else
    
    <div class = "row justify-content-center">
        <div class="">
            <div class="pb-3">
            <a href ="{{url('/subscriptionPackage')}}" class="btn btn-secondary btn-xl ml-4" action="">Back</a>
            </div>
              <div class="pt-5">
                <img src="https://www.meerabasu.in/assets/images/empty-cart.png">
              </div>
         </div>
    @endif
@endsection