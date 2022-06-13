<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hot Beverages Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Index Hot Beverages</h2>
					</div>
				</div>
			</div>

			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Image</th>
					<th>Image</th>
					<th>Price</th>
					<th>Category</th>
					<th>Stock</th>
					<th>Created_at</th>
					<th>Updated_at</th>
					<th width="280px">Action</th>
				</tr>

				@foreach ($product as $prod)
					<tr>						
						<td>{{ $prod->id }}</td>
						<td>{{ $prod->name }}</td>
						<td>{{ $prod->description }}</td>
						<td>{{ $prod->image }}</td>
						<td><img src="{{ $prod->image }}"></td>  
						<td>{{ $prod->price }}</td>
						<td>{{ $prod->category }}</td>
						<td>{{ $prod->stock }}</td>
						<td>{{ $prod->created_at }}</td>
						<td>{{ $prod->updated_at }}</td>
						
					</tr>
				@endforeach
			</table>
		</div>
		@endsection		
	</body>
</html>