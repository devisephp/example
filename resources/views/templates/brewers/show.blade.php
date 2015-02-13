@extends('layouts.application')

@section('content')
<div id="show" style="background-image:url('/img/example-brewery-header.jpg')">
	<div class="container pt sp500">

		<div class="row dark pt sp80 op90">
			<div class="col-md-10 col-md-offset-1">
				<h3 data-devise="$brewer->name, Brewery Name" class="lato">{{ $brewer->name }}</h3>
				<a href="{{ route('brewers-index') }}" class="btn btn-info mt sp20">Back to all breweries</a>

				<div class="row sp50 mt">

					<div class="col-md-8">
						<p data-devise="$brewer->description, Brewery Description">{{ $brewer->description }}</p>

						<div class="row">
							<ul class="col-md-12" id="show-gallery">
								<li><a href="/img/example-show-1.jpg" data-lightbox="beer-gallery"><img src="/img/example-show-1-thumb.jpg"></a></li>
								<li><a href="/img/example-show-2.jpg" data-lightbox="beer-gallery"><img src="/img/example-show-2-thumb.jpg"></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-md-offset-1">
						<p data-devise="$brewer->address, Brewery Address">{{ $brewer->address }}</p>
						<a data-devise="$brewer->website, Brewery Website" href="{{ $brewer->website }}" class="btn btn-primary">Visit Website</a>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
@stop