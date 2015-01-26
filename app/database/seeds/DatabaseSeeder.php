<?php

class DatabaseSeeder extends Seeder {

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
	 * We are creating a new page when it does not exist already.
	 * We use the route name as it should be unique. If an row
	 * already exists with the same route name we just ignore
	 * the insert. We use similiar logic for new page versions.
	 * If a page does not have a page version then it will not
	 * be available at it's url because we don't show pages
	 * unless there is an active page version
	 *
	 * @param  array  $data
	 * @param  string $tableName
	 * @param  array  $uniqueKeys
	 * @return DvsPage
	 */
	protected function createWhenItDoesNotExist($tableName, $uniqueKeys ,$data)
	{
		// merge in created_at and updated_at timestamps
		$data = array_merge(['created_at' => new DateTime, 'updated_at' => new DateTime], $data);

		$uniqueKeys = is_array($uniqueKeys) ? $uniqueKeys : array($uniqueKeys);

		$table = DB::table($tableName);

		foreach ($uniqueKeys as $uniqueKey)
		{
			$table = $table->where($uniqueKey, '=', $data[$uniqueKey]);
		}

		$object = $table->first();

		if (!$object)
		{
			$id = DB::table($tableName)->insertGetId($data);
			$object = DB::table($tableName)->find($id);
		}

		return $object;

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
