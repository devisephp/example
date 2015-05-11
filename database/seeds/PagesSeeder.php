<?php

class PagesSeeder extends DatabaseSeeder {

    /**
     * Get a list of all the pages we'd like to add
     *
     * @return array
     */
    protected function pages()
    {

        // ensure devise's default home page has been removed
        DB::table('dvs_pages')->where('slug','/')->delete();

        return
        [
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.homepage',
                'title'                   => 'Home Page',
                'http_verb'               => 'get',
                'route_name'              => 'home',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/',
                'short_description'       => 'Show the home page',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => null,
                'title'                   => 'Contact Us Handler',
                'http_verb'               => 'post',
                'route_name'              => 'contact-us',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/contact-us',
                'short_description'       => 'Handles the contact us form',
                'response_type'           => 'Function',
                'response_path'           => 'App\Http\Controllers\ContactUsController.store',
                'response_params'         => 'input',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.brewers.index',
                'title'                   => 'Brewers Index (Show\'s All Brewers)',
                'http_verb'               => 'get',
                'route_name'              => 'brewers-index',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/brewers',
                'short_description'       => 'Show all the brewers in the system',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.brewers.show',
                'title'                   => 'See a Specific Brewer',
                'http_verb'               => 'get',
                'route_name'              => 'brewers-show',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/brewers/{brewerId}',
                'short_description'       => 'Show a specific brewer in the system',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.beers.index',
                'title'                   => 'See all the Beers',
                'http_verb'               => 'get',
                'route_name'              => 'beers-index',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers',
                'short_description'       => 'Show all the beers in the system',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.beers.create',
                'title'                   => 'Create a New Beer for a Brewery',
                'http_verb'               => 'get',
                'route_name'              => 'beers-create',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/create',
                'short_description'       => 'Create a new beer for a brewery',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.beers.show',
                'title'                   => 'Show a Beer for a Brewery',
                'http_verb'               => 'get',
                'route_name'              => 'beers-show',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/{beerId}',
                'short_description'       => 'Show a beer for a brewery',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.beers.edit',
                'title'                   => 'Edit a Beer for a Brewery',
                'http_verb'               => 'get',
                'route_name'              => 'beers-edit',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/{beerId}/edit',
                'short_description'       => 'Edit a Beer for a Brewery',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => null,
                'title'                   => 'Stores a New Beer for a Brewery',
                'http_verb'               => 'post',
                'route_name'              => 'beers-store',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers',
                'short_description'       => 'Store a new beer for a brewery',
                'response_type'           => 'Function',
                'response_path'           => 'App\Http\Controllers\BeerController.store',
                'response_params'         => 'input',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => null,
                'title'                   => 'Update Beer for a Brewery',
                'http_verb'               => 'put',
                'route_name'              => 'beers-update',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/{beerId}',
                'short_description'       => 'Update beer for a brewery',
                'response_type'           => 'Function',
                'response_path'           => 'App\Http\Controllers\BeerController.update',
                'response_params'         => 'params.beerId,input',
            ],
        ];
    }

	/**
	 * Run the pages seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $pages = $this->pages();

    	foreach ($pages as $page)
    	{
            $dvsPage = $this->findOrCreateRow('dvs_pages', 'route_name', $page);
            $dvsPageVersion = $this->findOrCreateRow('dvs_page_versions', 'page_id', [
                'page_id' => $dvsPage->id,
                'created_by_user_id' => 0,
                'name' => 'Default',
                'starts_at' => new DateTime,
                'ends_at' => null,
                'preview_hash' => null,
            ]);
    	}
	}
}