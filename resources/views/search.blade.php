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
		<th scope="col">Name</th>
		<th scope="col" width="380px">Description</th>
		<th scope="col">Image</th>
		<th scope="col">Price</th>
	</tr>

	@if($products->isNotEmpty())
    @foreach ($products as $product)
	<tr>					
		<td>{{ $product->name }}</td>
		<td>{{ $product->description }}</td>
		<td> <img src="{{ $product->image }}" width="200vw"></td>
		<td>{{ $product->price }}</td>					
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


