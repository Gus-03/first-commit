<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FitKyt</title>
  <link href="{{ asset('css/subdetails.css') }}" rel="stylesheet">
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
    <section class="heading">
			<div class="heading-container">
					<a class="back" href="{{url('subscription-select')}}"> < Back </a>
      	<h1 class ="header-title">#BeEnergized</h1>
      	<img class="banner" src="{{URL::asset('/img/select3.png')}}" alt="foryogis">
			</div>
    </section>

    <section class="details">
      <h3>Includes:</h3>
      <div class="content">
        <img class="product-image" src="{{URL::asset('/img/yogapackage.jpg')}}">
        <span class="text">Rosemary Citrus 4oz Bar Soap</span>
      </div>

      <div class="content">
        <img class="product-image" src="{{URL::asset('/img/yogapackage.jpg')}}">
        <span class="text">4oz Rosemary Citrus Bath Salts</span>
      </div>

      <div class="content">
        <img class="product-image" src="{{URL::asset('/img/yogapackage.jpg')}}">
        <span class="text">4oz Rosemary Citrus Hand Sanitizer Spray</span>
      </div>
    </section>

    <section class="pricing">
      <h1 class="price">$15</h1>
      <p class="text">/month</p>
    	<button class="btn" id="btn1">order now</button>
    </section>

  </main>
</body>
</html>
