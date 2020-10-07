<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FitKyt</title>
  <link href="{{ asset('css/yourpackage.css') }}" rel="stylesheet">
</head>
<body>
	<script type="text/javascript">
		function changePlan(){
			if(document.getElementById('monthly').checked){
				document.getElementById('plan-duration').innerHTML = "/month";
			} else if(document.getElementById('quarterly').checked){
				document.getElementById('plan-duration').innerHTML = "/quarter";
			} else {
				document.getElementById('plan-duration').innerHTML = "/year";
			}
		}

	</script>
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
			<div class="header-container">
				<img class="yoga1" src="{{URL::asset('/img/yoga1.jpg')}}" alt="yoga1">
        <h1>Your Package</h1>
      </div>
    </section>

    <section class="cart">
      <div class="cart-container">
        <h1 class="left-title">Product List</h1>
				<h1 class="right-title">Price</h1>

				@foreach($allproducts as $products)
			 	@foreach($products as $product)
			 	<div class="content">
				 	<img class="product-image" src="{{URL::asset('/img/yogapackage.jpg')}}">
				 	<span class="text">{{$product->description}}</span>
					<span class="price">${{$product->price}}<div></div>
						<a href="" class="smalltext"><span>remove</span></a>
					</span>
			 	</div>
				@endforeach
        @endforeach

      </div>

    <section class="choice">
      <div class="choice-container">
        <h1 class="title">Select your plan:</h1>
        <input type="radio" onclick="javascript:changePlan();" checked="checked" name="plan" id="monthly" value="monthly">
        <label for="monthly">monthly</label><br>
        <input type="radio" onclick="javascript:changePlan();" name="plan" id="quarterly" value="quarterly">
        <label for="quarterly">quarterly</label><br>
        <input type="radio" onclick="javascript:changePlan();" name="plan" id="yearly" value="yearly">
        <label for="yearly">yearly</label>
      </div>
    </section>

    <section class="pricing">
      <div class="pricing-container">
        <h1 class="title">You will be charged:</h1>
        <h1 class="total">$50</h1>
        <div id="plan-duration">/month</div>
        <a href="purchasedetails">
          <button class="click-here" id="btn1">confirm purchase</button>
        </a>
      </div>
    </section>

  </main>
</body>
</html>
