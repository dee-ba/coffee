@extends ('layouts.app')
@section ('title', 'Product Index')
@section ('content')

<div class="border p-5 mb-1">
	<div class="border p-5 mb-1">
		<div class="text-center text-white p-1" style="background-color:#573429;"> 
			<h1>Order Items Index</h1>
		</div> 
		<br><br>
					
			<div class="pull-right mb-2">
				<a class="btn btn-success" href="/order_items/create"> Create Order Item</a>
			</div>					

			<table class="table table-hover table-responsive-sm border p-5 mb-5">
				<tr style="background-color: #B58D7B; color:white">
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