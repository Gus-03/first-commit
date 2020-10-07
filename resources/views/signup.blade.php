<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
  <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="topnav">
      <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/img/logo.jpg')}}" href="{{url('/')}}"></a>
      <a class ="links" href="#cart">cart</a>
      <a class ="links" id="login">log in</a>
      <a class ="links" href="https://fitkyt.com/blogs/be-the-bee/be-like-the-bee">blogs</a>
      <a class ="links" href="https://fitkyt.com/blogs/a-little-about-us/a-little-about-us">about us</a>
      <a class ="links" href="{{url('subscription-select')}}">subscribe</a>
      <a class ="links" href="https://fitkyt.com/collections/all">shop</a>
    </nav>
  </header>
  <main>
    <section class="left-container">
      <h3 class="login-heading">welcome!</h3>
      <div class="text">Already have an account?
        <a class="signup" href="{{url('login')}}">Log in now</a>
      </div>
    </section>
    <section class="right-container">
      <img class="logo2" src="{{URL::asset('/img/logo2.jpg')}}">
      <form action="{{url('post-registration')}}" method="POST" id="logForm">
        {{ csrf_field() }}
        <div class="group1">
          <div>
            <label for="inputName">name</label>
          </div>
          <input type="text" id="inputName" name="name" class="form-control">
          @if ($errors->has('name'))
          <span class="error">input required!</span>
          @endif
        </div>
        <div class="group2">
          <div>
            <label for="inputEmail">email address</label>
          </div>
          <input type="email" name="email" id="inputEmail" class="form-control">
          @if ($errors->has('email'))
          <span class="error">input required!</span>
          @endif
        </div>
        <div class="group3">
          <div>
            <label for="inputPassword">password</label>
          </div>
          <input type="password" name="password" id="inputPassword" class="form-control">
          @if ($errors->has('password'))
          <span class="error">input required!</span>
          @endif
        </div>
        <button class="signin" type="submit">sign up</button>
      </form>
    </section>
  </main>
</body>
</html>
