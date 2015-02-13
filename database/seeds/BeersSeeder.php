<?php

class BeersSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = $this->faker();

		for ($i = 1; $i < 10; $i++)
		{
			$this->findOrCreateRow('beers', 'brewer_id', [
				'brewer_id' => $i,
				'beer_style_id' => $i,
				'name' => $faker->word,
				'abv' => $faker->randomNumber(2),
				'advocate_rating' => $faker->randomNumber(2),
				'rating' => $faker->randomNumber(2),
				'about' => $faker->text,
				'image_url' => '/img/beer-placeholder.gif',
				'thumbnail_url' => '/img/beer-placeholder.gif',
			]);
		}
	}
}