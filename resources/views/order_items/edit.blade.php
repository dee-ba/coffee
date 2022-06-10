<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Edit Order Items Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Edit Order Items</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-primary" href="/order_items" enctype="multipart/form-data"> Back</a>
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
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Order ID:</strong><br>
						<select name="order_id" id="order_id">
							<option value="{{ $ord_item->order_id }}">{{ $ord_item->order_id }}</option>						
							@foreach ($orders as $ord)
								<option value="{{ $ord->id }}">{{ $ord->id }}</option>											
							@endforeach
						</select>
						@error('order_id')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror								
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Product ID:</strong><br>
						<select name="product_id" id="product_id">
							<option value="{{ $ord_item->product_id }}">{{ $ord_item->product_id }}</option>
							@foreach ($products as $prod)
								<option value="{{ $prod->id }}">{{ $prod->id }}</option>											
							@endforeach
						</select>
						@error('product_id')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror								
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Amount:</strong>
						<input type="text" name="amount" class="form-control" value="{{ $ord_item->amount }}" placeholder="0">
						@error('amount')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Total Price:</strong>
						<input type="decimal" name="total_price" class="form-control" value="{{ $ord_item->total_price }}" placeholder="0.00">
						@error('total_price')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Sweetener:</strong><br>
						<select name="sweetener" id="sweetener">
							<option value="{{ $ord_item->sweetener }}">{{ $ord_item->sweetener }}</option>
							<option value="Sugar">Sugar</option>	
							<option value="Honey">Honey</option>
							<option value="Stevia">Stevia</option>	
							<option value="Syrup">Syrup</option>								
						</select>
						@error('sweetener')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror						
					</div>						
				</div>			

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Topping:</strong><br>
						<select name="topping" id="topping">
							<option value="{{ $ord_item->topping }}">{{ $ord_item->topping }}</option>							
							<option value="Sea Salt">Sea Salt</option>	
							<option value="Caramel Drizzle">Caramel Drizzle</option>
							<option value="Mocha Drizzle">Mocha Drizzle</option>	
							<option value="Cinnamon Powder">Cinnamon Powder</option>								
						</select>
						@error('topping')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror						
					</div>						
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Flavour:</strong><br>
						<select name="flavour" id="flavour">
							<option value="{{ $ord_item->flavour }}">{{ $ord_item->flavour }}</option>								
							<option value="Madagascar Vanilla">Madagascar Vanilla</option>	
							<option value="Caramel">Caramel</option>
							<option value="Mocha">Mocha</option>	
							<option value="Cinnamon">Cinnamon</option>								
						</select>
						@error('flavour')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror						
					</div>						
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Milk:</strong><br>
						<select name="milk" id="milk">
							<option value="{{ $ord_item->milk }}">{{ $ord_item->milk }}</option>								
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

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Size:</strong><br>
						<select name="size" id="size">
							<option value="{{ $ord_item->size }}">{{ $ord_item->size }}</option>								
							<option value="Small">Small</option>	
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>							
						</select>
						@error('size')
						<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror						
					</div>						
				</div>
				
				<button type="submit" class="btn btn-primary ml-3">Submit</button>
			</div>
			</form>
		</div>
		@endsection
	</body>
</html>