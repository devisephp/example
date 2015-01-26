<?php

class PagesSeeder extends DatabaseSeeder {

    /**
     * Get a list of all the pages we'd like to add
     *
     * @return array
     */
    protected function pages()
    {
        return
        [
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.homepage',
                'title'                   => 'The home page',
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
                'title'                   => 'The contact us handler',
                'http_verb'               => 'post',
                'route_name'              => 'contact-us',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/contact-us',
                'short_description'       => 'Handles the contact us form',
                'response_type'           => 'Function',
                'response_path'           => 'ContactUsController.store',
                'response_params'         => 'input',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => 'templates.brewers.index',
                'title'                   => 'The brewers index page to show all brewers',
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
                'title'                   => 'See a specific brewer',
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
                'title'                   => 'See all the beers for this site',
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
                'title'                   => 'Create a new beer for a brewery',
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
                'title'                   => 'Show a beer for a brewery',
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
                'title'                   => 'Edit a beer for a brewery',
                'http_verb'               => 'get',
                'route_name'              => 'beers-edit',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/{beerId}/edit',
                'short_description'       => 'Edit a beer for a brewery',
                'response_type'           => 'View',
                'response_path'           => '',
                'response_params'         => '',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => null,
                'title'                   => 'Stores a new beer for a brewery',
                'http_verb'               => 'post',
                'route_name'              => 'beers-store',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers',
                'short_description'       => 'Store a new beer for a brewery',
                'response_type'           => 'Function',
                'response_path'           => 'BeerController.store',
                'response_params'         => 'input',
            ],
            [
                'language_id'             => '45',
                'translated_from_page_id' => '0',
                'view'                    => null,
                'title'                   => 'Update beer for a brewery',
                'http_verb'               => 'put',
                'route_name'              => 'beers-update',
                'is_admin'                => '0',
                'dvs_admin'               => '0',
                'slug'                    => '/beers/{beerId}',
                'short_description'       => 'Update beer for a brewery',
                'response_type'           => 'Function',
                'response_path'           => 'BeerController.update',
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
            $dvsPage = $this->createWhenItDoesNotExist('dvs_pages', 'route_name', $page);
            $dvsPageVersion = $this->createWhenItDoesNotExist('dvs_page_versions', 'page_id', [
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