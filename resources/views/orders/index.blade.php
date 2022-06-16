<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Order Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Index Order</h2>
					</div>
					<div class="pull-right mb-2">
						<a class="btn btn-success" href="/orders/create"> Create Order</a>
					</div>					
				</div>
			</div>

			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>User ID</th>
					<th>Order Item ID</th>
					<th>Created At</th>
					<th>Updated At</th>					
					<th width="280px">Action</th>
				</tr>

				@foreach ($order as $ord)
					<tr>						
						<td>{{ $ord->id }}</td>
						<td>{{ $ord->user_id }}</td>
						<td>{{ $ord->order_item_id }}</td>
						<td>{{ $ord->created_at }}</td>
						<td>{{ $ord->updated_at }}</td>						
						<td>
							<form action="/orders/{{ $ord->id }}" method="Post">							
								<a class="btn btn-primary" href="/orders/{{ $ord->id }}/edit">Edit</a>
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
					<li class="page-item"><a class="page-link" href="{{ $order->previousPageUrl() }}">Previous</a></li>
					<li class="page-item"><a class="page-link"> Page: {{ $order->currentPage() }} / {{ $order->lastPage() }} </a></li>								
					<li class="page-item"><a class="page-link" href="{{ $order->nextPageUrl() }}">Next</a></li>
				</ul>
			</nav>			
		</div>
		@endsection		
	</body>
</html>