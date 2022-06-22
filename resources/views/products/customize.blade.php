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
								<h5 class="card-title"><strong>{{ $prod->name }}</strong></h5>	
								<p class="card-text">{{ $prod->description }}</p>
							</div>
							<div class="card-body">
								<div class="btn-group-vertical">
									<input type="hidden" value="{{ $prod->id }}" name="id">
									<input type="hidden" value="{{ $prod->id }}" name="product_id">
									<input type="hidden" value="{{ $prod->name }}" name="name">
									<input type="hidden" value="{{ $prod->description }}" name="description">
									
									@if(!empty(Request::segment(3)))
										@foreach ($cartItems as $item)
											@if(Request::segment(3) == $item->id)
												<div class="row g-2">
													<div class="form-floating">
														<select class="form-select form-select-lg mb-3" name="size" id="size">
															<option value="{{ $item->size }}" selected>Current: {{ $item->size }}</option>
															<option value="Small">Small</option>	
															<option value="Medium">Medium</option>
															<option value="Large">Large</option>							
														</select>
														<label for="size" class="h5">Select a Size</label>		
													</div>
													 
													<div class="form-floating">
														<select class="form-select form-select-lg mb-3" name="sweetener" id="sweetener">
															@if(is_null($item->sweetener))
																<option value="Select an Option" selected disabled hidden>Select an Option</option>
															@else
																<option value="{{ $item->sweetener }}" selected >Current: {{ $item->sweetener }}</option>
															@endif
															<option value="Sugar">Sugar</option>	
															<option value="Honey">Honey</option>
															<option value="Stevia">Stevia</option>	
															<option value="Syrup">Syrup</option>
															<option value="None">None</option>												
														</select>	
														<label for="size" class="h5">Select a Sweetener</label>													
													</div>	
													
													<div class="form-floating">
														<select class="form-select form-select-lg mb-3" name="topping" id="topping">
															@if(is_null($item->topping))
																<option value="Select an Option" selected disabled hidden>Select an Option</option>
															@else
																<option value="{{ $item->topping }}" selected >Current: {{ $item->topping }}</option>
															@endif
															<option value="Sea Salt">Sea Salt</option>	
															<option value="Caramel Drizzle">Caramel Drizzle</option>
															<option value="Mocha Drizzle">Mocha Drizzle</option>	
															<option value="Cinnamon Powder">Cinnamon Powder</option>
															<option value="None">None</option>													
														</select>
														<label for="size" class="h5">Select a Topping</label>	
													</div>						

													<div class="form-floating">
														<select class="form-select form-select-lg mb-3" name="flavour" id="flavour">
															@if(is_null($item->flavour))
																<option value="Select an Option" selected disabled hidden>Select an Option</option>
															@else
																<option value="{{ $item->flavour }}" selected >Current: {{ $item->flavour }}</option>
															@endif
															<option value="Madagascar Vanilla">Madagascar Vanilla</option>	
															<option value="Caramel">Caramel</option>
															<option value="Mocha">Mocha</option>	
															<option value="Cinnamon">Cinnamon</option>	
															<option value="None">None</option>													
														</select>
														<label for="size" class="h5">Select a Flavour</label>	
													</div>	
													
													<div class="form-floating">
														<select class="form-select form-select-lg mb-3" name="milk" id="milk">
															@if(is_null($item->milk))
																<option value="Select an Option" selected disabled hidden>Select an Option</option>
															@else
																<option value="{{ $item->milk }}" selected >Current: {{ $item->milk }}</option>
															@endif
															<option value="Goat">Goat</option>	
															<option value="Cow">Cow</option>
															<option value="Oat">Oat</option>	
															<option value="Soy">Soy</option>	
															<option value="None">None</option>													
														</select>
														<label for="size" class="h5">Select a Milk</label>													
													</div>
												</div>
											@endif		
										@endforeach			
									@else
										<div class="row g-2">
											<div class="form-floating">
												<select class="form-select form-select-lg mb-3" name="size" id="size">
													<option value="Small">Small</option>	
													<option value="Medium">Medium</option>
													<option value="Large">Large</option>							
												</select>
												<label for="size" class="h5">Select a Size</label>		
											</div>
											 
											<div class="form-floating">
												<select class="form-select form-select-lg mb-3" name="sweetener" id="sweetener">
													<option value="None">None</option>
													<option value="Sugar">Sugar</option>	
													<option value="Honey">Honey</option>
													<option value="Stevia">Stevia</option>	
													<option value="Syrup">Syrup</option>											
												</select>	
												<label for="size" class="h5">Select a Sweetener</label>													
											</div>	
											
											<div class="form-floating">
												<select class="form-select form-select-lg mb-3" name="topping" id="topping">
													<option value="None">None</option>
													<option value="Sea Salt">Sea Salt</option>	
													<option value="Caramel Drizzle">Caramel Drizzle</option>
													<option value="Mocha Drizzle">Mocha Drizzle</option>	
													<option value="Cinnamon Powder">Cinnamon Powder</option>
												</select>
												<label for="size" class="h5">Select a Topping</label>	
											</div>						

											<div class="form-floating">
												<select class="form-select form-select-lg mb-3" name="flavour" id="flavour">
													<option value="None">None</option>
													<option value="Madagascar Vanilla">Madagascar Vanilla</option>	
													<option value="Caramel">Caramel</option>
													<option value="Mocha">Mocha</option>	
													<option value="Cinnamon">Cinnamon</option>													
												</select>
												<label for="size" class="h5">Select a Flavour</label>	
											</div>	
											
											<div class="form-floating">
												<select class="form-select form-select-lg mb-3" name="milk" id="milk">
													<option value="None">None</option>
													<option value="Goat">Goat</option>	
													<option value="Cow">Cow</option>
													<option value="Oat">Oat</option>	
													<option value="Soy">Soy</option>													
												</select>
												<label for="size" class="h5">Select a Milk</label>													
											</div>
										</div>	
									@endif
									
									
									

								</div>
								
								<input type="hidden" value="{{ $prod->price }}" name="price">
								<input type="hidden" value="{{ $prod->image }}"  name="image">
								
								<div class="card-footer">
									<div class="btn-group">
										@if(!empty(Request::segment(3)))
											@if ($cartItems->isnotEmpty())
												<a class="px-4 py-2 text-white bg-primary rounded text-decoration-none" href="/cart"> View Cart</a>
												@foreach ($cartItems as $item)
													@if(Request::segment(3) == $item->id)
														<input type="hidden" value="2" name="quantity">
														<button class="px-4 py-2 text-white bg-success rounded">Change Order</button>
														@break
													@endif
												@endforeach																
											@endif		
										@else
											<input type="hidden" value="2" name="quantity">
											<button class="px-4 py-2 text-white bg-success rounded">Add To Cart</button>						
										@endif	
									</div>
								</div>
							</div>					
						</div>
					</div>
				</div>				
			</form>
		</div>
		@endsection		
	</body>
</html>