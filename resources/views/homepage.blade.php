<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FitKyt</title>
  <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="topnav">
			<a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/img/logo.jpg')}}" href="{{url('/')}}"></a>
			<a class ="links" href="#cart">cart</a>
			<a class ="links" href="{{url('login')}}">log in</a>
			<a class ="links" href="https://fitkyt.com/blogs/be-the-bee/be-like-the-bee">blogs</a>
			<a class ="links" href="https://fitkyt.com/blogs/a-little-about-us/a-little-about-us">about us</a>
			<a class ="links" href="{{url('subscription-select')}}">subscribe</a>
			<a class ="links" href="https://fitkyt.com/collections/all">shop</a>
		</nav>
	</header>
	<main>
		<section class="headers">
			<div class="container-packages">
				<img class="yoga1" src="{{URL::asset('/img/yoga1.jpg')}}" alt="yoga1">
					<div class="text-button">
						<h1>packages</h1>
						<a href="subscription-select">
							<button class="click-here" id="btn1">click here</button>
						</a>
					</div>
			</div>

			<div class="container-choose">
				<img class="yoga1" src="{{URL::asset('/img/yoga2.png')}}" alt="yoga1">
					<div class="text-button">
						<h1>choose your own</h1>
						<button class="click-here" id="btn1">click here</button>
					</div>
			</div>
		</section>

		<section class="featured-products">
			<div class="container-featured">
				<h1 class="header-title">featured package</h1>
				<div class="left">
					<img class="yogapackage" src="{{URL::asset('/img/yogapackage.jpg')}}" alt="package">
				</div>
				<div class="right">
					<h2 class="title">#ForYogis</h2>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus eros odio, id sodales neque ullamcorper non. Integer id massa nunc. In pellentesque pretium orci, dapibus tincidunt sem tempus quis. Nam nisi ante, facilisis eu iaculis vel, dictum sit amet metus. Cras hendrerit odio condimentum lectus malesuada, non luctus sapien finibus.</p>
				</div>
			</div>
		</section>

		<section class="how-it-works">
			<div class="container-works">
				<h1 class="header-title">how it works</h1>
				<div class="left">
					<img class="graphic" src="{{URL::asset('/img/box.png')}}" alt="choose-plan">
					<h2 class="title">choose your plan</h2>
					<p class="text">choose from our range of pre-selected packages or create your own</p>
				</div>
				<div class="middle">
					<img class="graphic" src="{{URL::asset('/img/mail.png')}}" alt="subscribe">
					<h2 class="title">subscribe</h2>
					<p class="text">made up your mind? your order is just a few clicks away</p>
				</div>
				<div class="right">
					<img class="graphic" src="{{URL::asset('/img/gift.png')}}" alt="subscribe">
					<h2 class="title">receive and enjoy</h2>
					<p class="text">sit back and relax while your very own package gets delivered to your door!</p>
				</div>
			</div>
		</section>
	</main>
</body>
</html>
