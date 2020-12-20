<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/three.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    @livewireStyles
</head>
<body>
<header>
    <div class="container-fluid p-0">
    	
		<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="Home.php">ElegantLux</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="mr-auto"></div>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/main">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.html">Blog</a>
      </li>
	 
	  <li class="nav-item">
         @if (Route::has('login'))
         <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
              </div>
            @endif
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
  <div class="container text-center">
     <div  class="row">
	 <div  class= "col-md-5 col-sm-12">
     	<h4>Spring/Summer Collections 2020</h4><br>
        <h1>Get up to 30% off new arrivals</h1><br><br>
     	<form action="header.php" method="POST">
     	<input type="submit" class="btn btn-light px-5 py-2" value="Shop Now">
     </form>
	 </div>
	 <div class="covers col-md-7 col-sm-12 h-25">
	 <img src="https://i.pinimg.com/564x/75/cb/21/75cb211d95989f11a1672138587f64bb.jpg">
	 </div>
     </div>
</div> 
	</header>
{{$slot}}


   <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2020 All rights reserved | This template is made with by
            <span> ElegantLux</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
	  </footer>

	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>