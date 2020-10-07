<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FitKyt</title>
  <link href="{{ asset('css/purchasedetails.css') }}" rel="stylesheet">
</head>
<body>
	<script type="text/javascript">
		function showHide(){
			if(document.getElementById('gift').checked){
				document.getElementById('recipient-cont').style.display = 'block';
			} else{
				document.getElementById('recipient-cont').style.display = 'none';
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
    <section class="heading">
			<div class="heading-container">
				<div class="left-heading">
	        <h1 class="title">Purchase Details</h1>
	      </div>
	      <div class="right-heading">
	        <img src="{{URL::asset('/img/select1.png')}}" class="purchase-img">
	      </div>
			</div>
    </section>

    <section class="option">
      <div class="option-container">
				<h1>select gifting option:</h1>
        <input type="radio" onchange="javascript:showHide();" name="choices" id="gift" value="gift"/>
        <label for="gift">send as gift</label>
        <input type="radio" onchange="javascript:showHide();" name="choices" id="for-me" value="for-me"/>
        <label for="for-me">for me</label>
      </div>
    </section>

    <section class="recipient">
      <div class="recipient-container" id="recipient-cont">
				<h1>recipient's details</h1>
				<p>
					<label for="fname">First name</label>
				</p>
				<input type="text" id="fname"><br></br>
				<p>
					<label for="email">Email address</label>
				</p>
				<input type="email" id="email"><br></br>
				<p>
					<label for="address1">Address line 1</label>
				</p>
				<input type="text" id="address1"><br></br>
				<p>
					<label for="address2">Address line 2</label>
				</p>
				<input type="text" id="address2"><br></br>
				<p>
					<label for="country">Country</label>
				</p>
					<select id="country">
						<option value="usa">United States of America</option>
					</select><br></br>

				<div class="left">
					<p>
						<label for="state">State</label>
					</p>
					<input type="text" id="state">
				</div>
				<p>
					<label for="postcode">Postcode</label>
				</p>
				<input type="text" id="postcode"><br></br>
				<p>
					<label for="message">Send a message (optional)</label>
				</p>
				<textarea id="message" rows="4" cols="40"></textarea>
      </div>
    </section>

    <section class="mydetails">
      <div class="mydetails-container">
				<h1>my details</h1>
				<p>
					<label for="fname">First name</label>
				</p>
				<input type="text" id="fname"><br></br>
				<p>
					<label for="email">Email address</label>
				</p>
				<input type="email" id="email"><br></br>
				<p>
					<label for="address1">Address line 1</label>
				</p>
				<input type="text" id="address1"><br></br>
				<p>
					<label for="address2">Address line 2</label>
				</p>
				<input type="text" id="address2"><br></br>
				<p>
					<label for="country">Country</label>
				</p>
					<select id="country">
						<option value="usa">United States of America</option>
					</select><br></br>

				<div class="left">
					<p>
						<label for="state">State</label>
					</p>
					<input type="text" id="state">
				</div>
				<p>
					<label for="postcode">Postcode</label>
				</p>
				<input type="text" id="postcode"><br></br>
				<p>
      </div>
    </section>

    <section class="ordersummary">
      <div class="summary-container">
        <div class="left">
          <h2 class="products"></h2>

          <h2 class="subtotal">Sub-total<br></br>GST</h2>
          <h1 class="total">Total</h1>
        </div>

        <div class="right">
          <h2 class="subtotal"></h2>
          <h1 class="total"></h1>
        </div>
      </div>
			<div class="btn">
      	<a href="">
        	<button class="click-here" id="btn1">pay now</button>
      	</a>
			</div>

    </section>
  </main>
</body>
</html>
