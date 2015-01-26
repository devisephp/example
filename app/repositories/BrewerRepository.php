<?php

class BrewerRepository
{
	public function alphabeticallyGrouped()
	{
		$startingLetterRaw = DB::raw('UPPER(SUBSTRING(brewers.name, 1, 1)) as starting_letter');

		$brewers = Brewer::orderBy('name', 'asc')->get(['brewers.*', $startingLetterRaw]);

		return $brewers->groupBy('starting_letter');
	}
}