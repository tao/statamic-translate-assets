<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'english' => [
            'name' => config('app.name'),
            'locale' => 'en_US',
            'url' => '/',
        ],

        'french' => [
            'name' => 'french',
            'locale' => 'en_US',
            'url' => '/french/',
        ],

        'italian' => [
            'name' => 'italian',
            'locale' => 'en_US',
            'url' => '/italian/',
        ],

    ],
];
