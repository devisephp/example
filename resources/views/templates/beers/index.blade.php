@extends('layouts.application')

@section('content')
<div id="index">

	<div class="container pb pt sp100">

		<div class="row mb sp50">
			<div class="col-md-6">
				<h3 class="lato">Beers <span>| Index</h3>
				<p>Bacon ipsum dolor amet meatball tenderloin bresaola doner landjaeger salami rump boudin jowl shoulder drumstick pancetta shankle spare ribs. Kevin short loin corned beef hamburger jerky shank. </p>
				<a href="{{ route('beers-create') }}" class="btn btn-primary fl mr sp50">Add new beer</a>
			</div>
		</div>

		<div class="row mb sp20">
			<div class="col-md-12">
				Sort:
                {!! Sort::link('name','A-Z') !!} |
                {!! Sort::link('abv','ABV') !!} |
				{!! Sort::link('beer_style_id','STYLE') !!}
			</div>
		</div>

		<!-- ROW OF 4 BEERS -->
		@foreach ($beers->chunk(4) as $beers)

			<div class="row index-gallery">

				@foreach($beers as $beer)

					<!-- SINGLE BEER -->
					<div class="col-md-3 beer">
						<div class="artwork">
							<a href="{{ route('beers-show', $beer->id) }}"><img src="{{ $beer->thumbnail_url }}"></a>
						</div>

						<h6>{{ $beer->name }}</h6>
						<p>
							{{ $beer->brewer_name }}<br>
							<span>{{ $beer->abv }}% ABV</span>
						</p>
					</div>
					<!-- END SINGLE BEER -->

				@endforeach

			</div>

		@endforeach

	</div>
</div>