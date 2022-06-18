@extends ('layouts.app')
@section ('title', 'Product Index')
@section ('content')

<div class="border p-5 mb-1">
        

    <div class="text-center text-white p-1"> 
            <h1>Products Index</h1>
    </div> 
    <br><br>

	<div class="pull-right mb-3">
		<a class="btn btn-success" href="/products/create"> Add a New Product</a>
	  </div>	
		
			
	  <table class="table table-hover table-responsive-sm border p-5 mb-5">
			<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col" width="380px">Description</th>
					<th scope="col">Image</th>
					<th scope="col">Price</th>
					<th scope="col">Category</th>
					<th scope="col">Stock</th>
					<th scope="col">Created_at</th>
					<th scope="col">Updated_at</th>
					<th scope="col" width="180px">Action</th>
				</tr>
			
	
				@foreach ($product as $prod)
					<tr>						
						<td>{{ $prod->id }}</td>
						<td>{{ $prod->name }}</td>
						<td>{{ $prod->description }}</td>
						<td> <img class="card-img" style="background-color:red"
							src="{{ $prod->image }}"></td>
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
								
					</tbody>
				@endforeach
			</table>
	
			


		</div>
	

	




			
			<nav>
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="{{ $product->previousPageUrl() }}">Previous</a></li>
					<li class="page-item"><a class="page-link"> Page: {{ $product->currentPage() }} / {{ $product->lastPage() }} </a></li>								
					<li class="page-item"><a class="page-link" href="{{ $product->nextPageUrl() }}">Next</a></li>
				</ul>
			</nav>			
		
</div>
@endsection		
		