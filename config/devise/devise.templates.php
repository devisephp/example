<?php return append_config([

    'templates.brewers.index' => array(
        'human_name' => 'Show All Brewers',
        'extends' => 'layouts.application',
        'vars' => array(
            'brewersAlphabeticallyGrouped' => 'App\Brewers\BrewerRepository.alphabeticallyGrouped'
        ),
    ),

    'templates.brewers.show' => array(
        'human_name' => 'Show A Brewer',
        'extends' => 'layouts.application',
        'vars' => array(
            'brewer' => ['App\Brewer.findOrFail' => [ '{params.brewerId}' ] ],
        ),
    ),

    'templates.beers.index' => array(
        'human_name' => 'Show All Beers',
        'extends' => 'layouts.application',
        'vars' => array(
            'beers' => 'App\Beer.paginate' ,
        ),
    ),

    'templates.beers.create' => array(
        'human_name' => 'Create A New Beer',
        'extends' => 'layouts.application',
        'vars' => array(
            'breweries' => ['App\Brewer.lists' => ['name', 'id']],
            'beerStyles' => ['App\BeerStyle.lists' => ['name', 'id']],
            'beer' => 'App\Beer.newInstanceWithOldInput' ,
        ),
    ),

    'templates.beers.edit' => array(
        'human_name' => 'Show A Beer',
        'extends' => 'layouts.application',
        'vars' => array(
            'breweries' => ['App\Brewer.lists' => ['name', 'id']],
            'beerStyles' => ['App\BeerStyle.lists' => ['name', 'id']],
            'beer' => ['App\Beer.findOrFail' => ['{params.beerId}']],
        ),
    ),

    'templates.beers.show' => array(
        'human_name' => 'Show A Beer',
        'extends' => 'layouts.application',
        'vars' => array(
            'beer' => ['App\Beer.findOrFail' => ['{params.beerId}']],
        ),
    ),

]);