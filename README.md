Devise Brewers & Beers 
======

[![Latest Stable Version](https://poser.pugx.org/devisephp/cms/v/stable.svg)](https://packagist.org/packages/devisephp/cms)
[![Total Downloads](https://poser.pugx.org/devisephp/cms/downloads.svg)](https://packagist.org/packages/devisephp/cms)
[![Latest Unstable Version](https://poser.pugx.org/devisephp/cms/v/unstable.svg)](https://packagist.org/packages/devisephp/cms)
[![License](https://poser.pugx.org/devisephp/cms/license.svg)](https://packagist.org/packages/devisephp/cms)

![alt text][logo]

##About

Devise Brewers & Beers is an example application built on the [Devise](http://github.com/devisephp/cms) content management system. It showcases the three major application structures of Devise:

1. Easy to implement and use front-end editing on a non-model content areas using html attributes. This is showcased throughout the homepage section of the site. My mom was able to make this content manageable... while drinking beers.

2. Dead-simple model editing is showcased on the brewer side of the application. Brewers has a model and a database table but you are able to utilize the Devise editor to edit your models.

3. On the Beers site we recreate a 'CRUD' type scenario that shows how you can connect the front-end to your custom classes and execute custom code. 

### Full Documentation

Full documentation for Devise can be found at [http://devisephp.com/docs](http://devisephp.com/docs)

### Installation of Brewers & Beers

1. Setup an environment you want to install this example site on. We **highly** suggest you take a look at [Homestead](http://laravel.com/docs/5.0/homestead). It's worth it. 

2. Download [Brewers & Beers](https://github.com/devisephp/example/archive/master.zip) by clicking that link or by clicking "Download Zip" up above.

3. Unzip the contents of the zip into the root of your project. 

4. From the command line run ```composer update```. If you don't have composer you can get it from here: [https://getcomposer.org/download/](https://getcomposer.org/download/).

5. Install Devise by visiting the project through the browser or running ```php artisan devise:install``` from the project root on the command line. More information installing Devise at [http://devisephp.com/docs/installation/](http://devisephp.com/docs/installation/].

6. Run migrations and seeds by running ```php artisan migrate``` and then ```php artisan db:seed```

### Feedback

Please give us your feedback on Devise and the Devise Bootstrap at [info@devisephp.com](info@devisephp.com)

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

[logo]: https://raw.githubusercontent.com/devisephp/example/master/project-banner.jpg "Devise Brewers and Beers"