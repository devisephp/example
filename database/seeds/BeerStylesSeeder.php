<?php

class BeerStylesSeeder extends DatabaseSeeder {

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
			$this->findOrCreateRow('beer_styles', 'id', [
				'id' => $i,
				'name' => $faker->word,
			]);
		}
	}
}