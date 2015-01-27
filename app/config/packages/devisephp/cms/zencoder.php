<?php return array(

    /*
    |--------------------------------------------------------------------------
    | API key for zencoder
    |--------------------------------------------------------------------------
    |
    */
    'api-key' => '0b4f968455396b8a2b533912052786e3',

    /*
    |--------------------------------------------------------------------------
    | If we are testing locally then we need some sort of
    | proxy url or else Zencoder cannot reach our development url
    | at http://localhost:8000/media/somefile.mov
    |--------------------------------------------------------------------------
    |
    */
	'callback-url' => App::environment('local')
        ? 'http://10b30903.ngrok.com'
        : url(),

    /*
    |--------------------------------------------------------------------------
    | Call back url for zencoder to tell us that our
    | video encoding job has been completed
    |--------------------------------------------------------------------------
    |
    */
    'notifications' => App::environment('local')
        ? [ 'http://10b30903.ngrok.com/api/notifications/zencoder' ]
        : [ url('/api/notifications/zencoder') ],

);