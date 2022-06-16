<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Beverages Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Index Beverages</h2>
					</div>
					<div class="pull-right mb-2">
						<a class="btn btn-success" href="/products/create"> Create Product</a>
					</div>					
				</div>
			</div>

			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th width="380px">Description</th>
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
						
						<td> <img src="{{ $prod->image }}"></td>
						<td>{{ $prod->price }}</td>
						<td>{{ $prod->category }}</td>
						<td>{{ $prod->stock }}</td>
						<td>{{ $prod->created_at }}</td>
						<td>{{ $prod->updated_at }}</td>

						<td>
							<form action="/products/{{ $prod->id }}" method="Post">							
								<a class="btn btn-primary" href="/products/{{ $prod->id }}/edit">Edit</a>
								@csrf
								@method('DELETE')							
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>						
					</tr>
				@endforeach
			</table>
			<nav>
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="{{ $product->previousPageUrl() }}">Previous</a></li>
					<li class="page-item"><a class="page-link"> Page: {{ $product->currentPage() }} / {{ $product->lastPage() }} </a></li>								
					<li class="page-item"><a class="page-link" href="{{ $product->nextPageUrl() }}">Next</a></li>
				</ul>
			</nav>			
		</div>
		@endsection		
		
	</body>
</html>