<?php

return [

    /*
     * Application title to display in <title> tag
     */
    'title' => 'MBVolley',

    /*
     * Text to put in the top-left of the menu bar. logo_mini is shown when the navbar is collapsed.
     * NOTE: This is a non-escaped string, so you can put HTML in here
     */
    'logo' => 'MBV<i class="fas fa-volleyball-ball"></i>lley',
    'logo_mini' => '<i class="fas fa-volleyball-ball"></i>',

    /*
     * Menu builder
     */
    'menu' => [
        [
            'text' => 'Wedstrijdzchema',
            'icon' => 'archway fas',
            'route' => 'matches.index',
        ],
        [
            'text' => 'Uitslagen',
            'icon' => 'table fas',
            'route' => 'results.index',
        ],
        [
            'text' => 'Standen',
            'icon' => 'sort-numeric-down fas',
            'route' => 'rankings.index',
        ],
    ],

    /**
     * Filters that parse above menu configuration and add some sparkling things, like .active classes on active
     * menu items and parsing routes and URLs into the correct href attributes.
     */
    'filters' => [
        HzHboIct\LaravelCoreUI\Menu\Filters\HrefFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ActiveFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\SubmenuFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ClassesFilter::class,
    ],
];
