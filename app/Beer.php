<?php namespace App;

class Beer extends \Eloquent
{
	use \Devise\Support\Sortable\Sortable;
	use \Devise\Support\DeviseEloquentAddons;

	public function getStyleNameAttribute()
	{
		return isset($this->beerStyle->name) ? $this->beerStyle->name : null;
	}

	public function getBrewerNameAttribute()
	{
		return isset($this->brewer->name) ? $this->brewer->name : null;
	}

	public function brewer()
	{
		return $this->belongsTo('App\Brewer');
	}

	public function beerStyle()
	{
		return $this->belongsTo('App\BeerStyle');
	}
}