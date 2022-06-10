<!DOCTYPE html>

@extends('layouts.app')

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Order Item Index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
	<body>
		@section('content')
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Index Order Item</h2>
					</div>
					<div class="pull-right mb-2">
						<a class="btn btn-success" href="/order_items/create"> Create Order Item</a>
					</div>					
				</div>
			</div>

			<table class="table table-bordered">
				<tr>
					<th>id</th>
					<th>order id</th>
					<th>product id</th>
					<th>amount</th>
					<th>total_price</th>
					<th>sweetener</th>
					<th>topping</th>
					<th>flavour</th>
					<th>milk</th>
					<th>size</th>
					<th>created_at</th>
					<th>updated_at</th>
					<th width="280px">Action</th>
				</tr>

				@foreach ($order_item as $ord_item)
					<tr>						
						<td>{{ $ord_item->id }}</td>
						<td>{{ $ord_item->order_id }}</td>	
						<td>{{ $ord_item->product_id }}</td>							
						<td>{{ $ord_item->amount }}</td>						
						<td>{{ $ord_item->total_price }}</td>						
						<td>{{ $ord_item->sweetener }}</td>						
						<td>{{ $ord_item->topping }}</td>						
						<td>{{ $ord_item->flavour }}</td>						
						<td>{{ $ord_item->milk }}</td>						
						<td>{{ $ord_item->size }}</td>						
						<td>{{ $ord_item->created_at }}</td>						
						<td>{{ $ord_item->updated_at }}</td>
						
						<td>
							<form action="/order_items/{{ $ord_item->id }}" method="Post">							
								<a class="btn btn-primary" href="/order_items/{{ $ord_item->id }}/edit">Edit</a>
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
					<li class="page-item"><a class="page-link" href="{{ $order_item->previousPageUrl() }}">Previous</a></li>
					<li class="page-item"><a class="page-link"> Page: {{ $order_item->currentPage() }} / {{ $order_item->lastPage() }} </a></li>								
					<li class="page-item"><a class="page-link" href="{{ $order_item->nextPageUrl() }}">Next</a></li>
				</ul>
			</nav>			
		</div>
		@endsection		
	</body>
</html>