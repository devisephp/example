@extends('layouts.application')

@section('content')
	<div id="show" style="background-image:url('/img/default-header.jpg')">

		<div class="container pt sp500">

			<div class="row dark pt sp80 op90">
				<div class="col-md-10 col-md-offset-1">
					<h3 class="lato">{{ $beer->name }} <span>| {{ $beer->style_name }}</span></h3>
					<div class="mt sp20">
						<a href="{{ route('beers-edit', $beer->id) }}" class="btn btn-primary fl mr sp20">Edit this beer</a>
						<a href="{{ route('beers-index') }}" class="btn btn-info">Back to all beers</a>
					</div>

					<div class="row sp50 mt">

						<div class="col-md-8">
							<h5>About this Beer</h5>

							<p>{{ $beer->about }}</p>

							<div class="row">
								<ul class="col-md-12" id="show-gallery">
									<li><a href="{{ $beer->thumbnail_url }}" data-lightbox="beer-gallery"><img src="{{ $beer->image_url }}"></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-md-offset-1">
							<dl>
								<dt>Brewery</dt>
								<dd><a href="{{ route('brewers-show', $beer->brewer_id) }}">{{ $beer->brewer_name }}</a></dd>
								<dt>ABV</dt>
								<dd>{{ $beer->abv }}</dd>
								<dt>Type</dt>
								<dd>{{ $beer->style_name }}</dd>
								<dt>Beer Advocate Rating</dt>
								<dd>{{ $beer->advocate_rating }} / 5</dd>
								<dt>Rate Beer Rating</dt>
								<dd>{{ $beer->rating }} / 5</dd>
							</dl>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
@stop