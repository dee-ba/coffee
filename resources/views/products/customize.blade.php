<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Customize</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	
	<?php dump(session()->all()) ?>	
	
	<?php $cartItems = Cart::getContent() ?>	
	
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
			
			<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">		
				@csrf
				<div class="row">
					<div class="col-sm-12 mb-3">
						<div class="card text-center">
							<img class="card-img-top" src="{{ $prod->image }}" alt="Product Image">
							<div class="card-header">	
								<h5 class="card-title">{{ $prod->name }}</h5>	
								<p class="card-text">{{ $prod->description }}</p>
							</div>
							<div class="card-body">
							
								<input type="hidden" value="{{ $prod->id }}" name="id">
								<input type="hidden" value="{{ $prod->id }}" name="product_id">
								<input type="hidden" value="{{ $prod->name }}" name="name">
								<input type="hidden" value="{{ $prod->description }}" name="description">
								
								<div class="col">
									<strong>Size: </strong>
									<select name="size" id="size">
										<option value="Small">Small</option>	
										<option value="Medium">Medium</option>
										<option value="Large">Large</option>							
									</select>					
								</div>
								
								<div class="col">
									<strong>Sweetener: </strong>
									<select name="sweetener" id="sweetener">
										<option value="None" selected disabled hidden>Select an Option</option>
										<option value="Sugar">Sugar</option>	
										<option value="Honey">Honey</option>
										<option value="Stevia">Stevia</option>	
										<option value="Syrup">Syrup</option>								
									</select>					
								</div>	
								
								<div class="col">
									<strong>Topping: </strong>
									<select name="topping" id="topping">
										<option value="None" selected disabled hidden>Select an Option</option>
										<option value="Sea Salt">Sea Salt</option>	
										<option value="Caramel Drizzle">Caramel Drizzle</option>
										<option value="Mocha Drizzle">Mocha Drizzle</option>	
										<option value="Cinnamon Powder">Cinnamon Powder</option>								
									</select>					
								</div>						

								<div class="col">
									<strong>Flavour: </strong>
									<select name="flavour" id="flavour">
										<option value="None" selected disabled hidden>Select an Option</option>
										<option value="Madagascar Vanilla">Madagascar Vanilla</option>	
										<option value="Caramel">Caramel</option>
										<option value="Mocha">Mocha</option>	
										<option value="Cinnamon">Cinnamon</option>								
									</select>					
								</div>	
								
								<div class="col">
									<strong>Milk: </strong>
									<select name="milk" id="milk">
										<option value="None" selected disabled hidden>Select an Option</option>
										<option value="Goat">Goat</option>	
										<option value="Cow">Cow</option>
										<option value="Oat">Oat</option>	
										<option value="Soy">Soy</option>								
									</select>					
								</div>								
								
								<input type="hidden" value="{{ $prod->price }}" name="price">
								<input type="hidden" value="{{ $prod->image }}"  name="image">
								
								
								@if ($cartItems->isnotEmpty())
									@foreach ($cartItems as $item)
										@if($item->product_id == $prod->id)
											<input type="hidden" value="2" name="quantity">
											<div class="card-footer">
												<button class="px-4 py-2 text-white bg-success rounded">Change Order</button>
											</div>
											@break
										@else
											<input type="hidden" value="2" name="quantity">
											<div class="card-footer">
												<button class="px-4 py-2 text-white bg-success rounded">Add To Cart</button>
											</div>	
										@endif
									@endforeach										
								@else
									<input type="hidden" value="2" name="quantity">
									<div class="card-footer">
										<button class="px-4 py-2 text-white bg-success rounded">Add To Cart</button>
									</div>							
								@endif								
							</div>					
						</div>
					</div>
				</div>				
			</form>
		</div>
		@endsection		
	</body>
</html>