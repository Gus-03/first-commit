{{-- card component for the subscription package --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/card.css')}}"/>
<div class="col-md-3 col-sm-6 my-3 my-md-0 bg-light pb-3">
    <div class="card shadow" id="card">
        <div class="img-fluid card-img top pt-2" >
            <img src="{{$img}}" class="rounded w-75">
        </div>
        <div class="card-body">
            <h5 class="card-title">
              {{$name}}
            </h5>
            <div style="color:rgb(223,182,79)"><h1 style=font-size:60px>${{$price}}</h1></div>
            <div style="color:rgb(223,182,79)"><h3>/Month</h3></div>
            <p class="card-text " style="color:rgb(223,182,79)">
               {{$description}}
            </p>
            <div>
                
            <a href ="{{$id}}" class ="btn btn-dark btn-lg my-3 rounded-pill" name="add">Add to Cart</a>
            </div>
            <div><a href ="#" class ="btn btn-secondary btn-lg rounded-pill" name="add">Personalize</a></div>
        </div>
    </div>
   
</div>