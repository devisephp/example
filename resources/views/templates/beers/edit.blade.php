@extends('layouts.application')

@section('content')
<div id="index">

	<div class="container pb pt sp100">

		<div class="row mb sp100">
			<div class="col-md-6">
				<h3 class="lato">Beers <span>| Edit Beer</h3>
				<p>Bacon ipsum dolor amet meatball tenderloin bresaola doner landjaeger salami rump boudin jowl shoulder drumstick pancetta shankle spare ribs. Kevin short loin corned beef hamburger jerky shank. </p>
				<a href="{{ route('beers-index') }}" class="btn btn-info fl mr sp50">Back to all beers</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors')

				{!! Form::open(['route' => array('beers-update', $beer->id), 'method' => 'put', 'class' => 'form-vertical dvs-allow-submit', 'files' => true])!!}
					<div class="form-group">
						<label for="beer-name">Beer Name</label>
						<input type="text" class="form-control" id="beer-name" name="name" value="{{ $beer->name }}">
					</div>

					<div class="row">

						<div class="form-group col-md-5">
							<label for="beer-brewery">Brewery</label>
							{!! Form::select('brewer_id', array_merge([0 => 'Select a brewery'], $breweries->toArray()), $beer->brewer_id, ['class' => 'form-control', 'id' => 'beer-brewery'])!!}
						</div>

						<div class="form-group col-md-5">
							<label for="beer-type">Type</label>
							{!! Form::select('beer_style_id', array_merge([0 => 'Select a style'], $beerStyles->toArray()), $beer->beer_style_id, ['class' => 'form-control', 'id' => 'beer-style'])!!}
						</div>

						<div class="form-group col-md-2">
							<label for="beer-abv">ABV</label>
							<input type="text" class="form-control" id="beer-abv" name="abv" value="{{ $beer->abv }}">
						</div>

					</div>

					<div class="row">

						<div class="form-group col-md-5">
							<label for="beer-advocate-rating">Beer Advocate Rating</label>
							<input type="text" class="form-control" id="beer-advocate-rating" name="advocate_rating" value="{{ $beer->advocate_rating }}">
						</div>

						<div class="form-group col-md-5 col-md-offset-2">
							<label for="beer-rate-beer-rating">Rate Beer Rating</label>
							<input type="text" class="form-control" id="beer-rate-beer-rating" name="rating" value="{{ $beer->rating }}">
						</div>

					</div>

					<div class="form-group">
						<label for="brewery-about">About the Brewery</label>
						<textarea id="brewery-about" class="form-control" name="about">{{ $beer->about }}</textarea>
					</div>

					<div class="form-group">
						<label for="brewery-image">Brewery Image</label>
						<div class="row">
							<div class="col-md-3">
								<img class="thumbnail {{ $beer->image_url ? '' : 'hidden' }}" src="{{ $beer->image_url }}">
								<input type="file" class="form-control" id="beer-image" name="image">
							</div>
						</div>
					</div>


					<button type="submit" class="btn btn-primary">Update Beer</button>
				{!! Form::close() !!}
			</div>
		</div>

	</div>
</div>
@stop