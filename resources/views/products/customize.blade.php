<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Customize</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Customize</h2>
					</div>
				</div>
			</div>			
			@if(session('status'))
			<div class="alert alert-success mb-1 mt-1">
				{{ session('status') }}
			</div>
			@endif
			<form action="" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')			
				<div class="row">
					<div class="col-sm-12 mb-3">
						<div class="card text-center">
							<img class="card-img-top" src="{{ $prod->image }}" alt="Product Image">
							<div class="card-header">	
								<h5 class="card-title">{{ $prod->name }}</h5>	
								<p class="card-text">{{ $prod->description }}</p>
							</div>
							<div class="card-body">
								<form>
								
									<div class="row">
										<div class="col">
											<strong>Size:</strong><br>
											<select name="size" id="size">
												<option value="none" selected disabled hidden>Select an Option</option>
												<option value="Small">Small</option>	
												<option value="Medium">Medium</option>
												<option value="Large">Large</option>							
											</select>
											@error('size')
											<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
											@enderror						
										</div>

										<div class="col">
											<strong>Sweetener:</strong><br>
											<select name="sweetener" id="sweetener">
												<option value="none" selected disabled hidden>Select an Option</option>
												<option value="Sugar">Sugar</option>	
												<option value="Honey">Honey</option>
												<option value="Stevia">Stevia</option>	
												<option value="Syrup">Syrup</option>								
											</select>
											@error('sweetener')
											<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
											@enderror						
										</div>								
										<div class="col">
											<strong>Topping:</strong><br>
											<select name="topping" id="topping">
												<option value="none" selected disabled hidden>Select an Option</option>
												<option value="Sea Salt">Sea Salt</option>	
												<option value="Caramel Drizzle">Caramel Drizzle</option>
												<option value="Mocha Drizzle">Mocha Drizzle</option>	
												<option value="Cinnamon Powder">Cinnamon Powder</option>								
											</select>
											@error('topping')
											<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
											@enderror						
										</div>						

										<div class="col">
											<strong>Flavour:</strong><br>
											<select name="flavour" id="flavour">
												<option value="none" selected disabled hidden>Select an Option</option>
												<option value="Madagascar Vanilla">Madagascar Vanilla</option>	
												<option value="Caramel">Caramel</option>
												<option value="Mocha">Mocha</option>	
												<option value="Cinnamon">Cinnamon</option>								
											</select>
											@error('flavour')
											<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
											@enderror						
										</div>						
										<div class="col">
											<strong>Milk:</strong><br>
											<select name="milk" id="milk">
												<option value="none" selected disabled hidden>Select an Option</option>
												<option value="Goat">Goat</option>	
												<option value="Cow">Cow</option>
												<option value="Oat">Oat</option>	
												<option value="Soy">Soy</option>								
											</select>
											@error('milk')
											<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
											@enderror						
										</div>						
									</div>
									
								</form>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary">Add to Cart</a>
								<a href="#" class="btn btn-success">Go to Checkout</a>
							</div>						
						</div>
					</div>
				</div>				
			</form>
		</div>
		@endsection		
	</body>
</html>