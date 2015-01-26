# example
This is an example application demonstrating some techniques in Devise


## Steps for this example

- Install Laravel and Devise
	- add devisephp/cms to composer.json
	- composer update
	- add Devise\DeviseServiceProvider to config/app.php
	- add Devise facades to config/app.php
	- change bootstrap/start.php to detect getenv('LARAVEL_ENV') environment
	- create mysql database table 'example'
	- added 'example' database to app/config/local/database.php
	- took composer.lock out of .gitignore

- Install devise database tables & assets
	- run php artisan migrate --package devisephp/cms
	- run php artisan db:seed --class DeviseSeeder
	- run php artisan asset:publish devisephp/cms



- Install our application specific database tables
	- run php artisan migrate
	- run php artisan db:seed



- Create Models & Migrations
	- Brewery only created by admin
	- BreweryImage is the images attached to a Brewery
	- Beer is created by submitting a form on the site
		- when you create a new beer we need a dropdown of styles for that beer
	- Style is a select/dropdown of beer types/styles



- Create Blade Template Views
	- putting the blade templates inside of app/views/templates
	- created a route in routes.php for viewing templates dynamically



- Create Devise Page for Homepage
	- create a new pages thru the seeder (like a dev)

- Create Devise tags for Homepage
	- shows how we can use devise fields and groups of fields

- Create contact-us route for Homepage (using seeder)



- Create Devise Page for Brewers index & show pages
	- uses PagesSeeder again
	- added the brewers vars in the app/config/packages/devisephp/cms/templates.php
	- did the same for brewers.show vars

- Create Devise model tags for Brewery pages (for admin)
	- add view vars for Brewery template
	- uses Devise model mapping and validation



- Create regular form for Beers create page
	- created a controller for store and update routes
	- handle image uploads via Imagine



## Todo

- Create a BrewersImage model and modify using devise image uploader

- Create a new Brewery Using devise-create-model="" tag

- Create Menus Example for navigation?

- Create Permissions Example?