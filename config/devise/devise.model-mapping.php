<?php return [

	'App\Brewer' => [
		'rules' => [
			'address' => 'required',
			'description' => 'required',
			'name' => 'required',
			'website' => 'required',
		],

		'picks' => [
			'Address' => ['address' => 'text'],
			'Description' => ['description' => 'text'],
			'Name' => ['name' => 'text'],
			'Website' => ['website' => 'url'],
		],

		'types' => [
			'Address' => 'wysiwyg',
			'Description' => 'wysiwyg',
			'Name' => 'text',
			'Website' => 'link',
		],
	],



	'App\BrewerImage' => [
		'rules' => [],
		'picks' => [],
		'types' => [],
	],
];