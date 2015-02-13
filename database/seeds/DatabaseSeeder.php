<?php

class DatabaseSeeder extends DeviseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PagesSeeder');
		$this->call('BrewersSeeder');
		$this->call('BeerStylesSeeder');
		$this->call('BeersSeeder');
	}

	/**
	 * Creates a faker object for us
	 *
	 * @param  integer $seed
	 * @return Faker
	 */
	protected function faker($seed = 42)
	{
		$faker = Faker\Factory::create();

		$faker->seed(42);

		return $faker;
	}
}
