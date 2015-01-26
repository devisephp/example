<?php

class Beer extends Eloquent
{
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
		return $this->belongsTo('Brewer');
	}

	public function beerStyle()
	{
		return $this->belongsTo('BeerStyle');
	}
}