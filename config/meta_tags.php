<?php

use Butschster\Head\MetaTags\Viewport;

return [
    /*
     * Meta title section
     */
    'title' => [
        'default' => 'Rhode Island Real Estate | 1-800RealEstate.com',
        'separator' => '-',
        'max_length' => 255,
    ],


    /*
     * Meta description section
     */
    'description' => [
        'default' => '1-800RealEstate.com is a full service real estate  company located in Providence Rhode Island Real Estate.',
        'max_length' => 255,
    ],


    /*
     * Meta keywords section
     */
    'keywords' => [
        'default' => 'Rhode Island Real Estate',
        'max_length' => 255
    ],

    /*
     * Default packages
     *
     * Packages, that should be included everywhere
     */
    'packages' => [
        // 'jquery', 'bootstrap', ...
    ],

    'charset' => 'utf-8',
    'robots' => null,
    'viewport' => Viewport::RESPONSIVE,
    'csrf_token' => true,
];
