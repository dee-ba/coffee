@extends ('layouts.app')
@section ('title', 'Welcome')
@section ('content')


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<picture>
			    <source media="(min-width: 1200px)" srcset="{{ asset('images/nathan-dumlao-pMW4jzELQCw-unsplash.jpg') }}">
				<source media="(min-width: 600px)" srcset="{{ asset('images/demi-deherrera-L-sm1B4L1Ns-unsplash.jpg') }}">
				<img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/tabitha-turner-F0Wd4djYvSA-unsplash.jpg') }}" alt="First slide">
			</picture>			
		
			<div class="container">
				<div class="carousel-caption text-start">
					<h1 id="stroked_text">Iced Coffee.</h1>
					<p id="stroked_text">Try some iced coffee like you never had before.</p>
					<p><a class="btn btn-lg btn-primary" href="{{ url('/cold_products') }}">See More</a></p>				
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<picture>
			    <source media="(min-width: 1200px)" srcset="{{ asset('images/alexander-mils-K_mM9BQW2tU-unsplash.jpg') }}">
				<source media="(min-width: 600px)" srcset="{{ asset('images/farhad-ibrahimzade-DEovggNHhe0-unsplash.jpg') }}">
				<img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/ieva-kisunaite-kRS7qyKfVhY-unsplash.jpg') }}" alt="Second slide">
			</picture>		

		
			<div class="container">
				<div class="carousel-caption">
					<h1 id="stroked_text">Coffee ice Cream.</h1>
					<p id="stroked_text">The perfect coffee, for those hot summer days.</p>
					<p><a class="btn btn-lg btn-primary" href="{{ url('/cold_products') }}">See More</a></p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<picture>
			    <source media="(min-width: 1200px)" srcset="{{ asset('images/nathan-dumlao-pMW4jzELQCw-unsplash.jpg') }}">
				<source media="(min-width: 600px)" srcset="{{ asset('images/fahmi-fakhrudin-nzyzAUsbV0M-unsplash.jpg') }}">
				<img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/billy-kwok-vfiA7rRtjWo-unsplash.jpg') }}" alt="Third slide">
			</picture>

			<div class="container">
				<div class="carousel-caption text-end">
					<h1 id="stroked_text">Latte.</h1>
					<p id="stroked_text">Try our new Latte, made the way it's meant to be.</p>
					<p><a class="btn btn-lg btn-primary" href="{{ url('/hot_products') }}">See More</a></p>
				</div>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>







<div class="container mt-2">
	<div class="row">
		<img class="webbanner" src="{{ asset('images/advert.jpg') }}" alt="Banner image">
	</div>			
</div>




<div id="myCarousel">
	<br>

	<br>
	<img class="webbanner" src="{{ asset('images/coffee.jpg') }}" alt="Banner image">
</div>	


		


	


@endsection