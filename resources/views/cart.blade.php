@extends('layouts.app')
@section('content')

<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	input[type=number] {
		-moz-appearance: textfield;
	}
</style>


<?php dump(session()->all()) ?>


<section class="h-100 h-custom" style="background-color: #0d6efd;">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12">
				<div class="card card-registration card-registration-2" style="border-radius: 15px;">
					<div class="card-body p-0">
						<div class="row g-0">
							<div class="col-lg-8">
								<div class="p-5">
									<div class="d-flex justify-content-between align-items-center mb-5">
										@if ($message = Session::get('success'))
											<div class="p-4 mb-3 bg-green-400 rounded">
												<p class="text-green-800">{{ $message }}</p>
											</div>
										@endif	
										
										<h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
										<h6 class="mb-0 text-muted">{{ Cart::getTotalQuantity()}} items</h6>
									</div>
									<hr class="my-4">
									
									@foreach ($cartItems as $item)	
										<div class="border border-primary rounded bg-light">
											<table class="table">
												<tr class="table-primary">
													<th>
														@if ($item->size != "None")
															<span class="border border-secondary rounded p-1"> {{ $item->size }} </span>
														@endif
														@if ($item->sweetener != "None")
															<span class="border border-secondary rounded p-1"> {{ $item->sweetener }} </span>
														@endif
														@if ($item->topping != "None")
															<span class="border border-secondary rounded p-1"> {{ $item->topping }} </span>
														@endif
														@if ($item->flavour != "None")
															<span class="border border-secondary rounded p-1"> {{ $item->flavour }} </span>
														@endif
														@if ($item->milk != "None")
															<span class="border border-secondary rounded p-1"> {{ $item->milk }} </span>
														@endif																
													</th>
												</tr>
											</table>
										
											<div class="row mb-4 d-flex justify-content-between align-items-center">
												<div class="ms-2 col-md-2 col-lg-2 col-xl-2">
													<img
														src="{{ $item->attributes->image }}"
														class="img-fluid rounded-3" alt="{{ $item->name }}">
												</div>
												<div class="col-md-3 col-lg-3 col-xl-3">
													<h6 class="text-muted"><strong>{{ $item->name }}</strong></h6>
													<h6 class="text-muted">{{ $item->description }}</h6>
												</div>
												<div class="col-md-2 col-lg-3 col-xl-2 d-flex">
													
													<form class="form-inline" action="{{ route('cart.update') }}" method="POST">
														
														<div class="form-group">
															@csrf
															<button class="form-control btn btn-outline-primary" type="submit" class="btn btn-link px-2"
																onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
																<i class="bi bi-plus"></i>
															</button>
															
															<input type="hidden" name="id" value="{{ $item->id}}">
															<input type="number" name="quantity" value="{{ $item->quantity }}" 
															class="w-8 text-center bg-gray-300 form-control"/>

															<button class="form-control btn btn-outline-primary" type="submit" class="btn btn-link px-2"
																onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
																<i class="bi bi-dash"></i>
															</button>
														
														</div>
													</form>
														
												</div>
												<div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
													<h6 class="mb-0">€ {{ $item->price }}</h6>
												</div>

												<div class="col-md-2 col-lg-1 col-xl-1">
													<form action="{{ route('cart.remove') }}" method="POST">
														@csrf
														<input type="hidden" value="{{ $item->id }}" name="id">
														<a href="customize/{{ $item->product_id }}/{{ $item->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil"></i></a>
														<button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
													</form>	
												</div>
											</div>
										</div><br>
									@endforeach
									
									<hr class="my-4">
									
									<form action="{{ route('cart.clear') }}" method="POST">
										@csrf
										<button class="btn btn-danger btn-block btn-lg" data-mdb-ripple-color="dark"> Clear Cart</button>	
									</form>									
									
									<hr class="my-4">
									
									<div class="pt-5">
										<h6 class="mb-0"><a href="{{ url('/') }}" class="text-body"><i
											class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
									</div>
								</div>
							</div>
							<div class="col-lg-4 bg-grey">
								<div class="p-5">
									<h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
									<hr class="my-4">

									<div class="d-flex justify-content-between mb-4">
										<h5 class="text-uppercase">items {{ Cart::getTotalQuantity()}}</h5>
										<h5>€ {{ Cart::getTotal() }}</h5>
									</div>

									<h5 class="text-uppercase mb-3">Give code</h5>

									<form action="{{ route('cart.discount') }}" method="POST">
										@csrf
										<div class="mb-2">
											<div class="form-outline">
												<input type="text" name="discount_code" id="discount_code" class="form-control form-control-lg" />
												<label class="form-label" for="discount_code">Enter your code</label>
											</div>
										</div>											
										<button class="btn btn-warning btn-block" data-mdb-ripple-color="dark"> Submit Code</button>
									</form>

									<hr class="my-4">
									<div class="d-flex justify-content-between mb-5">
										<h5 class="text-uppercase">Total discount</h5>
										<h5>{{ Cart::getTotalDiscount() }}% </h5>
									</div>
									<div class="d-flex justify-content-between mb-5">
										<h5 class="text-uppercase">Total price</h5>
										<h5> €
											@if(Cart::getTotal() <= 0)
												0.00
											@else
												{{ Cart::getTotal() }}
											@endif
										</h5>
									</div>
									
									<form action="/" method="POST">
										@csrf
										@guest
											<a class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" href="/login"> Submit Order</a>
										@else
											<button class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark"> Submit Order</button>
										@endguest	
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
