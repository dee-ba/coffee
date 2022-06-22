@extends ('layouts.app')
@section ('title', 'Product All')
@section ('content')

<div class="border p-5 mb-1">
        

	<div class="border p-5 mb-1">
        

		<div class="text-center text-white p-1" style="background-color:#573429;"> 
				<h1>Our Coffee Selection </h1>
		</div> 
		<br><br>

	
		
			
	  <table class="table table-hover table-responsive-sm border p-5 mb-5">
		<tr style="background-color: #B58D7B; color:white">
					<th scope="col" width="80px">Name</th>
					<th scope="col" width="280px">Description</th>
					<th scope="col" width="80px">Image</th>
					<th scope="col" width="80px">Price</th>
					<th scope="col"width="80px">Select</th>
				
				</tr>
			
			<tbody>
				@foreach ($product as $prod)
					<tr>						
						<td>{{ $prod->name }}</td>
						<td>{{ $prod->description }}</td>
						<td> <img class="card-img" style="background-color:red"
							src="{{ $prod->image }}"></td>
						<td>{{ $prod->price }}</td>
						<td>


							<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<input type="hidden" value="{{ $prod->id }}" name="id">
								<input type="hidden" value="{{ $prod->name }}" name="name">
								<input type="hidden" value="{{ $prod->description }}" name="description">
								<input type="hidden" value="{{ $prod->price }}" name="price">
								<input type="hidden" value="{{ $prod->image }}"  name="image">
								<input type="hidden" value="1" name="quantity">

								<a href="customize/{{$prod->id}}" class="px-1 py-1 btn btn-primary rounded" style="margin: 3px">Customize</a>

								<button class="px-1 py-1 text-white btn-success rounded">Add To Cart</button>
							</form>



						</td>

					</tr>
								
				@endforeach
			</tbody>
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
		