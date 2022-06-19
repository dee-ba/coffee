@extends ('layouts.app')
@section ('title', 'Search Results')
@section ('content')

<div class="border p-5 mb-1">

	<div class="text-center text-white p-1" style="background-color:#573429;"> 
		<h1>Search Results</h1>
</div> 
<br><br>

<table class="table table-hover table-responsive-sm border p-5 mb-5">
	<tr style="background-color: #B58D7B; color:white">
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






	@if($products->isNotEmpty())
    @foreach ($products as $product)
	<tr>
		<tr>						
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->description }}</td>
			
			<td> <img src="{{ $product->image }}" width="200vw"></td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->category }}</td>
			<td>{{ $product->stock }}</td>
			<td>{{ $product->created_at }}</td>
			<td>{{ $product->updated_at }}</td>

			<td>
				<form action="/products/{{ $product->id }}" method="Post">							
					<a class="btn btn-primary" href="/products/{{ $product->id }}/edit">Edit</a>
					@csrf
					@method('DELETE')							
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>						
		</tr>

    @endforeach

</table>
		
</div> 

@else 
    <div>
        <h2>No products found</h2>
    </div>
@endif
        

  

@endsection		


