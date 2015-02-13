@extends('layouts.application')

@section('content')
<div id="index">
	<div class="container pb pt sp100">

		<div class="row mb sp100">
			<div class="col-md-6">
				<h3 class="lato">Breweries <span>| Index</h3>
				<p>Bacon ipsum dolor amet meatball tenderloin bresaola doner landjaeger salami rump boudin jowl shoulder drumstick pancetta shankle spare ribs. Kevin short loin corned beef hamburger jerky shank. </p>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="index-list col-3">

					@foreach ($brewersAlphabeticallyGrouped as $alphabetLetter => $brewers)

						<h4 id="brewery-alphabet-{{ $alphabetLetter }}">{{ $alphabetLetter }}</h4>

						@foreach ($brewers as $brewer)
							<a data-devise="$brewer, $brewer->name, Breweries ($alphabetLetter)" href="{{ route('brewers-show', $brewer->id) }}">{{ $brewer->name }}</a>
						@endforeach

					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>
@stop