<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FitKyt</title>
  <link href="{{ asset('css/sub.css') }}" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="topnav">
			<a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/img/logo.jpg')}}" href="{{url('/')}}"></a>
			<a class ="links" href="#cart">cart</a>
			<a class ="links" href="{{url('login')}}">log in</a>
			<a class ="links" href="https://fitkyt.com/blogs/be-the-bee/be-like-the-bee">blogs</a>
			<a class ="links" href="https://fitkyt.com/blogs/a-little-about-us/a-little-about-us">about us</a>
			<a class ="links" id="subscribe">subscribe</a>
			<a class ="links" href="https://fitkyt.com/collections/all">shop</a>
		</nav>
	</header>
  <main>
    <section class="select">

	@foreach($subscriptions as $subscription)
			<a class="links" href="subdetails/{{$subscription->sid}}">
      	<div class="container">
        	<img class="banner" src="/img/select{{$subscription->sid}}.png">
					<h1>#{{$subscription->sname}}#{{$subscription->sid}}</h1>
      	</div>
			</a>
	@endforeach


<!-- 
			<a class="links" href="subdetails-foryogi">
      	<div class="container">
        	<img class="banner" src="{{URL::asset('/img/select1.png')}}">
					<h1>#ForYogis</h1>
      	</div>
			</a>

			<a class="links" href="subdetails-forgym">
      	<div class="container">
        	<img class="banner" src="{{URL::asset('/img/select2.png')}}">
					<h1>#ForGymLovers</h1>
      	</div>
			</a>

			<a class="links" href="subdetails-beenergized">
				<div class="container">
					<img class="banner" src="{{URL::asset('/img/select3.png')}}">
					<h1>#BeEnergized</h1>
				</div>
			</a>

			<a class="links" href="subdetails-bebalanced">
      	<div class="container">
        	<img class="banner" src="{{URL::asset('/img/select4.png')}}">
					<h1>#BeBalanced</h1>
      	</div>
			</a> -->

    </section>
  </main>
</body>
</html>
