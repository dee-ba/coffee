<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Create Order Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body



		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left mb-2">
						<h2>Add Order</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-primary" href="/orders"> Back</a>
					</div>
				</div>
			</div>
			@if(session('status'))
			<div class="alert alert-success mb-1 mt-1">
				{{ session('status') }}
			</div>
			@endif
			<form action="/orders" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>User ID:</strong><br>
							<select name="user_id" id="user_id">
								<option value="none" selected disabled hidden>Select an Option</option>
								@foreach ($users as $usr)
									<option value="{{ $usr->id }}">{{ $usr->id }} : {{ $usr->name }}</option>											
								@endforeach
							</select>
							@error('user_id')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror								
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Order Item ID:</strong><br>
							<select name="order_item_id" id="order_item_id">
								<option value="none" selected disabled hidden>Select an Option</option>
								@foreach ($order_items as $ord_item)
									<option value="{{ $ord_item->id }}">{{ $ord_item->id }}</option>											
								@endforeach
							</select>
							@error('order_item_id')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror							
						</div>						
						<button type="submit" class="btn btn-primary ml-3">Submit</button>
					</div>
				</div>			
			</form>
		@endsection
	</body>
</html>