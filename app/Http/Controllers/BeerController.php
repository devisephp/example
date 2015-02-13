<?php namespace App\Http\Controllers;

use Redirect, Validator, App\Beer, Image;

class BeerController extends Controller
{
	/**
	 * Store a new beer
	 *
	 * @param  array $input
	 * @return Redirect
	 */
	public function store($input)
	{
		$validator = Validator::make($input, $this->createRules());

		if ($validator->fails())
		{
			return Redirect::route('beers-create')
				->withErrors($validator->errors())
				->withInput();
		}

		$beer = $this->fillBeer(new Beer, $input);
		$beer->image_url = '/img/beer-placeholder.gif';
		$beer->thumbnail_url = '/img/beer-placeholder.gif';
		$beer->save();

		return Redirect::route('beers-index');
	}

	/**
	 * Update an existing beer
	 *
	 * @param  integer $id
	 * @param  array $input
	 * @return Redirect
	 */
	public function update($id, $input)
	{
		$validator = Validator::make($input, $this->updateRules());

		if ($validator->fails())
		{
			return Redirect::route('beers-edit', $id)
				->withErrors($validator->errors())
				->withInput();
		}

		$beer = $this->fillBeer(Beer::findOrFail($id), $input);

		$beer->save();

		return Redirect::route('beers-index');
	}

	/**
	 * Protected method to fill up your beer (no pun
	 * intended, well... maybe some pun intended)
	 *
	 * @param  Beer $beer
	 * @param  array $input
	 * @return Beer
	 */
	protected function fillBeer($beer, $input)
	{
		$beer->name = $input['name'];
		$beer->brewer_id = $input['brewer_id'];
		$beer->beer_style_id = $input['beer_style_id'];
		$beer->abv = $input['abv'];
		$beer->advocate_rating = $input['advocate_rating'];
		$beer->rating = $input['rating'];
		$beer->about = $input['about'];

		$image = array_get($input, 'image');

		if ($image)
		{
			// revisit this with Devise Media Manager later
			$image = Image::make($image);

			$beer->image_url = '/media/beers/beer_' . $beer->id . '.jpg';
			$beer->thumbnail_url = '/media/beers/beer_' . $beer->id . '_thumbnail.jpg';

			$image->save(public_path() . $beer->image_url);
			$image->resize(100, 100)->save(public_path() . $beer->thumbnail_url);
		}

		return $beer;
	}

	/**
	 * Protected method to get the create rules for
	 * a new beer. This could be in another class but
	 * for now it will remain here...
	 *
	 * @return array
	 */
	protected function createRules()
	{
		return array(
			'name' => 'required',
			'brewer_id' => 'required',
			'beer_style_id' => 'required',
			'abv' => 'required',
			'advocate_rating' => 'required',
			'rating' => 'required',
			'about' => 'required',
		);
	}

	/**
	 * Protected method to get the update rules for
	 * an existing beer. This could be in another class
	 * but for now it will remain here...
	 *
	 * @return array
	 */
	public function updateRules()
	{
		return $this->createRules();
	}
}