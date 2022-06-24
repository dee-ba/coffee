@extends ('layouts.app')
@section ('title', 'Product Index')
@section ('content')

<div class="border p-5 mb-1">
	<div class="border p-5 mb-1">
		<div class="text-center text-white p-1" style="background-color:#573429;"> 
			<h1>Order Index</h1>
		</div> 
		<br><br>
					
			<div class="pull-right mb-2">
				<a class="btn btn-success" href="/orders/create"> Create Order</a>
			</div>					

			<table class="table table-hover table-responsive-sm border p-5 mb-5">
				<tr style="background-color: #B58D7B; color:white">
					<th>ID</th>
					<th>User ID</th>
					<th>Created At</th>
					<th>Updated At</th>					
					<th width="280px">Action</th>
				</tr>

				@foreach ($order as $ord)
					<tr>						
						<td>{{ $ord->id }}</td>
						<td>{{ $ord->user_id }}</td>
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
	</div>
</div>