<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title')</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>

		<style>
			body {
			  background-image: url('images/mike-kenneally-TD4DBagg2wE-unsplash.jpg');
			  background-size: 100%;
			  background-repeat: no-repeat;
			  background-color: rgb(237, 217, 191);
			  background-position-y: 0.5em;
			
			}

			nav {
				margin-bottom: 10%;
			
			}


		
			</style>


		<div id="app">
			<nav class="navbar sticky-top navbar-expand-md navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}"><img src="/images/logo.jpg" alt="" width="60px" style="margin-right: 10px"><i class="bi bi-home"></i>Home</a>
					
					
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-cup-straw"></i> Categories
							</a>
								<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
							<a class="dropdown-item" href="{{ url('/hot_products') }}">Hot Beverages</a>
							<a class="dropdown-item" href="{{ url('/cold_products') }}">Cold Beverages</a>
								</ul>
							</li>
						</ul>
					
						<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-wrench-adjustable-circle"></i> Test Pages
								</a>
									<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
										<a class="dropdown-item" href="{{ url('/products') }}">Products</a>	
										<a class="dropdown-item" href="{{ url('/users') }}">Users</a>		
										<a class="dropdown-item" href="{{ url('/orders') }}">Orders</a>		
										<a class="dropdown-item" href="{{ url('/order_items') }}">Order Items</a>	
									</ul>
								</li>
							</ul>
						</div>	
						
		
						<!-- Left Side Of Navbar -->
						<ul class="navbar-nav me-auto">

						</ul>

						<!-- Right Side Of Navbar -->
						<ul class="navbar-nav ms-auto">
							<div class="input-group rounded search_bar">
								<form action="/search" method="GET">
									<input type="text" name="search" required/>
									<button class="search_button btn btn-primary ml-3"> <i class="bi bi-search"></i>
										</button>
								</form>
								
							</div>
								
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<i class="bi bi-basket"></i>
									<i class="text-warning"> ({{ Cart::getTotalQuantity()}}) </i> Shopping Cart
								</a>
								
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">									
									<a class="dropdown-item" href="/cart"> View Cart ({{ Cart::getTotalQuantity()}})</a>
								</div>										
							</li>
									
							<!-- Authentication Links -->
							@guest
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										<i class="bi bi-person-circle"></i> Login/Register
									</a>
									
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
									
										@if (Route::has('login'))
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										@endif

										@if (Route::has('register'))
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										@endif
										
									</div>
								</li>
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										<i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
									</a>

									<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">									
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
					</div>
				</div>
			</nav>
			<div>
				{{-- <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/mike-kenneally-TD4DBagg2wE-unsplash.jpg') }}" alt="Banner image"> --}}
			</div>		
			<main class="py-4">
				@yield('content')
			</main>
		</div>




  
	

		
  <br><br>
 
  
	<!-- Copyright -->
	<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	  © 2022 Copyright <br>
	  <a class="text-white" href="{{ url('/privacy') }}">Privacy Policy</a> <br>
	  <a class="text-white" href="{{ url('/terms') }}">Terms of Use</a>
	</div> 
	<!-- Copyright -->


  </footer>
  <!-- Footer -->


</body>
</html>