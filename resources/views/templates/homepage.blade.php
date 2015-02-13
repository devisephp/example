@extends('layouts.application')

@section('content')
<div id="homepage">
	<div class="container pb sp100">

		<img data-devise="homepage_image, image" src="{{ $page->homepage_image->image_url('/img/logo-homepage.png') }}" id="homepage-logo" width="{{ $page->homepage_image->width(412) }}" height="{{ $page->homeage_image->height(219) }}" alt="{{ $page->homepage_image->caption('Devise: Brewers &amp; Beers - An Example Application') }}">

		<a href="#beer-and-code" id="move-down-bottle-cap"><img src="/img/bottle-cap-down.png" width="59" height="59" alt="Click to go down"></a>

		<h2 id="beer-and-code" class="lato">Beer <span>+ Code</span></h2>

		<div class="row">
			<div data-devise="homepage_main_text, wysiwyg" class="col-md-6 col-md-offset-3">
				{!! $page->homepage_main_text->text('
					<p>Bacon ipsum dolor amet meatball tenderloin bresaola doner landjaeger salami rump boudin jowl shoulder drumstick pancetta shankle spare ribs. Kevin short loin corned beef hamburger jerky shank. Prosciutto turkey shoulder, jowl ham ribeye shankle pork beef ribs tri-tip. Boudin tri-tip salami, rump bacon short loin leberkas andouille. Kielbasa beef meatloaf capicola cow bresaola. Shankle ribeye pork chop, brisket chuck biltong kevin pork salami filet mignon short loin picanha.</p>
					<p>Shoulder strip steak filet mignon andouille, leberkas pork loin shank pork chop pastrami doner. Ground round bacon short ribs beef ribs landjaeger ham hock. Landjaeger pork belly ground round salami, chuck tail jowl capicola strip steak tri-tip. Ball tip fatback tri-tip leberkas. Shoulder jowl sausage tongue, fatback jerky ham hock brisket. Strip steak short loin tongue ribeye picanha tenderloin beef ribs cow shoulder porchetta jerky drumstick pig. Filet mignon picanha alcatra short ribs tail corned beef swine.</p>
					<p>Flank tri-tip meatball fatback, bacon chicken strip steak hamburger prosciutto brisket cupim. Ham frankfurter meatloaf, corned beef meatball leberkas ball tip. Doner filet mignon bacon, pig frankfurter biltong hamburger jerky rump meatball picanha porchetta meatloaf chuck. Landjaeger sirloin pancetta ball tip beef ribs t-bone brisket strip steak chicken drumstick ham filet mignon rump ribeye. Tenderloin ground round drumstick, pastrami tongue jowl ham hock picanha spare ribs boudin ribeye.</p>
					<p>Salami ribeye boudin chicken. Turkey picanha ham hock frankfurter, biltong meatball flank porchetta kevin andouille doner strip steak pork loin. Chuck flank brisket rump leberkas, corned beef filet mignon turducken cupim short ribs doner tail salami biltong. Flank alcatra chicken, biltong meatloaf tri-tip andouille tongue brisket. Swine chuck capicola, landjaeger </p>
				') !!}
			</div>
		</div>

	</div>

	<div class="light">
		<div class="container pb sp100">

			<div class="row mt sp1">
				<img data-devise="image1, image, First Image" class="fl" src="{{ $page->image1->image_url('/img/kirin-ichiban-garden.jpg') }}" width="{{ $page->image1->width(585) }}" height="{{ $page->image1->height(385) }}" alt="{{ $page->image1->caption('Kirin\'s Ichiban Gardens in Tokyo - Gary Williams - License MIT') }}">
				<img data-devise="image2, image, Second Image" class="fr" src="{{ $page->image2->image_url('/img/odell-beers.jpg') }}" width="{{ $page->image2->width(584) }}" height="{{ $page->image2->height(385) }}" alt="{{ $page->image2->caption('A flight of beers at Odell\'s outside Boulder Colorado - Gary Williams - License MIT') }}">
			</div>

			<div class="row mt sp50 tac ">
				<div class="col-md-4 col-md-offset-1">
					<h2 data-devise="breweries_tagline, text, Tag line, Breweries" class="sp40 mb">Breweries <br><small>{{ $page->breweries_tagline->text("Amazing feats of engineering") }}</small></h2>
					<p data-devise="breweries_about, wysiwyg, About, Breweries" class="blocked">{{ $page->breweries_about->text(lorem(68)) }}</p>
					<a data-devise="breweries_link, link, Link URL, Breweries" class="btn btn-primary" href="{{ $page->breweries_link->url('/brewers') }}">{{ $page->breweries_link->text('Explore Breweries') }}</a>
				</div>

				<div class="col-md-4 col-md-offset-2 ">
					<h2 data-devise="beers_tagline, text, Tag line, Beers" class="sp40 mb">Beers <br><small>{{ $page->beers_tagline->text('Delicious products of engineering') }}</small></h2>
					<p data-devise="beers_about, wysiwyg, About, Beers" class="blocked">{{ $page->beers_about->text(lorem(68)) }}</p>
					<a data-devise="beers_link, link, Link, Beers" class="btn btn-primary" href="{{ $page->beers_link->url('/beers') }}">{{ $page->beers_link->text('Guzzle Beers') }}</a>
				</div>
			</div>

		</div>
	</div>

	<div class="container pb pt sp100">

		<div class="row mb sp100">
			<div class="col-md-12">
				<h4 data-devise="about_site_tagline, text, Tagline, About Site">{{ $page->about_site_tagline->text('About this site') }}</h4>
				<p data-devise="about_site_description, wysiwyg, Description, About Site">{{ $page->about_site_description->text(lorem(68)) }}</p>
				<a href="https://github.com/devisephp/cms" class="btn btn-primary fl mr sp50">Devise Website</a>
				<a href="https://github.com/devisephp/cms" class="btn btn-primary fl">Devise on Github</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7">
				<h4 class="cb cf mt sp200">Contact Us</h4>
				<form method="post" action="{{ route('contact-us') }}" class="form-vertical">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="contact-your-name">Your Name</label>
						<input type="text" class="form-control" id="contact-your-name" name="your_name">
					</div>

					<div class="form-group">
						<label for="contact-your-message">Your Message</label>
						<textarea id="contact-your-message" class="form-control" name="your_message"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Reach Out</button>
				</form>
			</div>
		</div>

	</div>
</div>
@stop